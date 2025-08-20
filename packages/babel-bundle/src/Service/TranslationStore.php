<?php
declare(strict_types=1);

namespace Survos\BabelBundle\Service;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Platforms\PostgreSQLPlatform;
use Doctrine\DBAL\Platforms\SqlitePlatform;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query\Expr\Join;
use Psr\Log\LoggerInterface;
use Survos\BabelBundle\Attribute\BabelLocale;
use Survos\BabelBundle\Attribute\Translatable;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

final class TranslationStore
{
    public function __construct(
        private readonly EntityManagerInterface $em,
        /** @var array<class-string,array{fields:array<string,array{context:?string}>,localeProp:?string,hasTCodes:bool,needsHooks?:bool,fieldsNeedingHooks?:string[]}> */
        public array $translatableIndex = [],   // compiler pass injects this
        /** @var string[] */
        #[Autowire('%kernel.enabled_locales%')]
        public readonly array $enabledLocales = [],
        private ?LoggerInterface $logger = null,
    ) {}

    public function setTranslatableIndex(array $index): void { $this->translatableIndex = $index; }

    /** Legacy guard for ORM path (not used when we queue/drain) */
    private array $trGuard = []; // [hash][locale] => object

    /** Queue for SQLite-safe postFlush draining */
    private array $queued = []; // each: [hash, original, srcLocale, context, localeForText, text]

    private function resolveClasses(): array
    {
        $strClass = '\\App\\Entity\\Str';
        $trClass  = '\\App\\Entity\\StrTranslation';
        if (!class_exists($strClass) || !class_exists($trClass)) {
            $strClass = '\\Survos\\PixieBundle\\Entity\\Str';
            $trClass  = '\\Survos\\PixieBundle\\Entity\\StrTranslation';
        }
        return [$strClass, $trClass];
    }

    // ---------- READ HELPERS ------------------------------------------------

    public function iterateMissing(string $targetLocale, ?string $source = null, int $limit = 0): iterable
    {
        [$strClass, $trClass] = $this->resolveClasses();
        $qb = $this->em->getRepository($strClass)->createQueryBuilder('s');
        $qb->leftJoin($trClass, 't', Join::WITH, 't.hash = s.hash AND t.locale = :target')
            ->andWhere('t.hash IS NULL')
            ->setParameter('target', $targetLocale);

        if (property_exists($strClass, 'srcLocale') && $source) {
            $qb->andWhere('s.srcLocale = :src')->setParameter('src', $source);
        }
        if ($limit > 0) $qb->setMaxResults($limit);

        return $qb->getQuery()->toIterable();
    }

    public function countMissing(string $targetLocale, ?string $source = null): int
    {
        [$strClass, $trClass] = $this->resolveClasses();
        $qb = $this->em->getRepository($strClass)->createQueryBuilder('s')
            ->select('COUNT(s.hash)')
            ->leftJoin($trClass, 't', Join::WITH, 't.hash = s.hash AND t.locale = :target')
            ->andWhere('t.hash IS NULL')
            ->setParameter('target', $targetLocale);

        if (property_exists($strClass, 'srcLocale') && $source) {
            $qb->andWhere('s.srcLocale = :src')->setParameter('src', $source);
        }

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function get(string $hash, string $locale): ?string
    {
        [, $trClass] = $this->resolveClasses();
        $tr = $this->em->find($trClass, ['hash' => $hash, 'locale' => $locale]);
        return $tr?->text;
    }

    public function hash(string $text, string $srcLocale, ?string $context = null): string
    {
        return hash('xxh3', $srcLocale . "\0" . $context . "\0" . $text);
    }

    // ---------- CONFIG LOOKUP (compiler-pass authored) ----------------------

    public function getEntityConfig(object|string $entity): ?array
    {
        $class = \is_object($entity) ? $entity::class : $entity;
        return $this->translatableIndex[$class] ?? null;
    }

    // ---------- QUEUE API (used for SQLite) ---------------------------------

    public function queueUpsert(
        string $hash,
        string $original,
        string $srcLocale,
        ?string $context,
        string $localeForText,
        string $text
    ): void {
        $this->queued[] = [$hash, $original, $srcLocale, $context, $localeForText, $text];
        $this->logger?->debug('[Babel] queued STR/TR upsert', ['hash' => $hash, 'src' => $srcLocale, 'ctx' => $context]);
    }

    public function drainQueuedUpserts(): void
    {
        if (!$this->queued) return;
        $platform = $this->em->getConnection()->getDatabasePlatform();
        foreach ($this->queued as [$hash, $original, $srcLocale, $context, $localeForText, $text]) {
            $this->upsertRaw($hash, $original, $srcLocale, $context, $localeForText, $text);
        }
        $this->logger?->info('[Babel] drained queued STR/TR upserts', ['count' => \count($this->queued), 'platform' => $platform::class]);
        $this->queued = [];
    }

    // ---------- RAW UPSERT (DBAL) — identity-map safe -----------------------

    public function upsertRaw(
        string $hash,
        string $original,
        string $srcLocale,
        ?string $context,
        string $localeForText,
        string $text
    ): void {
        [$strClass, $trClass] = $this->resolveClasses();
        $conn     = $this->em->getConnection();
        $platform = $conn->getDatabasePlatform();

        $strMeta = $this->em->getClassMetadata($strClass);
        $trMeta  = $this->em->getClassMetadata($trClass);

        $tStr = $strMeta->getTableName();
        $tTr  = $trMeta->getTableName();

        $col = function($meta, string $field): string {
            $m = $meta->getFieldMapping($field);
            return $m['columnName'] ?? $field;
        };

        // Str columns
        $c_hash      = $col($strMeta, 'hash');
        $c_original  = $col($strMeta, 'original');
        $c_srcLocale = $col($strMeta, 'srcLocale');
        $c_context   = $col($strMeta, 'context');
        $c_createdAt = $col($strMeta, 'createdAt');
        $c_updatedAt = $col($strMeta, 'updatedAt');

        // StrTranslation columns
        $ctr_hash      = $col($trMeta, 'hash');
        $ctr_locale    = $col($trMeta, 'locale');
        $ctr_text      = $col($trMeta, 'text');
        $ctr_createdAt = $col($trMeta, 'createdAt');
        $ctr_updatedAt = $col($trMeta, 'updatedAt');
        $ctr_status    = $trMeta->hasField('status') ? $col($trMeta, 'status') : null;

        $now = new \DateTimeImmutable();

        // STR
        $this->upsertRow(
            platform:   $platform,
            table:      $tStr,
            pkCols:     [$c_hash],
            insertCols: [$c_hash, $c_original, $c_srcLocale, $c_context, $c_createdAt, $c_updatedAt],
            insertVals: [$hash,   $original,   $srcLocale,   $context,   $now,         $now],
            updateCols: [$c_original, $c_srcLocale, $c_context, $c_updatedAt],
            updateVals: [$original,   $srcLocale,   $context,   $now],
        );

        // SOURCE TRANSLATION
        $this->upsertRow(
            platform:   $platform,
            table:      $tTr,
            pkCols:     [$ctr_hash, $ctr_locale],
            insertCols: [$ctr_hash, $ctr_locale, $ctr_text, $ctr_createdAt, $ctr_updatedAt],
            insertVals: [$hash,     $srcLocale,  $original,  $now,           $now],
            updateCols: [$ctr_text, $ctr_updatedAt],
            updateVals: [$original, $now],
        );

        // TARGET TEXT (if different)
        if ($localeForText !== $srcLocale) {
            $this->upsertRow(
                platform:   $platform,
                table:      $tTr,
                pkCols:     [$ctr_hash, $ctr_locale],
                insertCols: [$ctr_hash, $ctr_locale, $ctr_text, $ctr_createdAt, $ctr_updatedAt],
                insertVals: [$hash,     $localeForText, $text,  $now,           $now],
                updateCols: [$ctr_text, $ctr_updatedAt],
                updateVals: [$text,     $now],
            );
        }

        $this->logger?->debug('[Babel] enabledLocales', ['count' => count($this->enabledLocales), 'locales' => $this->enabledLocales]);

        // PLACEHOLDERS
        foreach ($this->enabledLocales as $loc) {
            if ($loc === $srcLocale) continue;

            $insertCols = [$ctr_hash, $ctr_locale, $ctr_text, $ctr_createdAt, $ctr_updatedAt];
            $insertVals = [$hash,     $loc,        '',        $now,           $now];
            $updateCols = [$ctr_updatedAt];
            $updateVals = [$now];

            if ($ctr_status) {
                $insertCols[] = $ctr_status;
                $insertVals[] = 'untranslated';
            }

            $this->upsertRow(
                platform:   $platform,
                table:      $tTr,
                pkCols:     [$ctr_hash, $ctr_locale],
                insertCols: $insertCols,
                insertVals: $insertVals,
                updateCols: $updateCols,
                updateVals: $updateVals,
            );
        }

        $this->logger?->debug('[Babel] upsertRaw wrote STR/TR', [
            'hash' => $hash, 'src' => $srcLocale, 'ctx' => $context,
            'table_str' => $tStr, 'table_tr' => $tTr
        ]);
    }

    /**
     * Generic platform-aware UPSERT.
     *
     * @param list<string> $pkCols
     * @param list<string> $insertCols
     * @param list<mixed>  $insertVals
     * @param list<string> $updateCols
     * @param list<mixed>  $updateVals
     */
    private function upsertRow(
        AbstractPlatform $platform,
        string $table,
        array $pkCols,
        array $insertCols,
        array $insertVals,
        array $updateCols,
        array $updateVals,
    ): void {
        $conn = $this->em->getConnection();
        $qid  = fn(string $c) => $platform->quoteIdentifier($c);

        $colsList = implode(', ', array_map($qid, $insertCols));
        $phList   = implode(', ', array_fill(0, \count($insertVals), '?'));

        if ($platform instanceof PostgreSQLPlatform || $platform instanceof SqlitePlatform) {
            $pkList = implode(', ', array_map($qid, $pkCols));
            $set    = implode(', ', array_map(
                fn($c) => sprintf('%s = EXCLUDED.%s', $qid($c), $qid($c)),
                $updateCols
            ));
            $sql = sprintf(
                'INSERT INTO %s (%s) VALUES (%s) ON CONFLICT (%s) DO UPDATE SET %s',
                $qid($table), $colsList, $phList, $pkList, $set
            );
            $conn->executeStatement($sql, $insertVals, $this->inferTypes($insertVals));
            return;
        }

        // Fallback: UPDATE first, then INSERT
        $setPairs = implode(', ', array_map(fn($c) => sprintf('%s = ?', $qid($c)), $updateCols));
        $wherePk  = implode(' AND ', array_map(fn($c) => sprintf('%s = ?', $qid($c)), $pkCols));
        $sqlUpdate = sprintf('UPDATE %s SET %s WHERE %s', $qid($table), $setPairs, $wherePk);

        // Build WHERE params from insertVals by PK positions
        $pkVals = [];
        foreach ($pkCols as $pk) {
            $pos = array_search($pk, $insertCols, true);
            $pkVals[] = $pos === false ? null : $insertVals[$pos];
        }
        $updateParams = array_merge($updateVals, $pkVals);
        $conn->executeStatement($sqlUpdate, $updateParams, $this->inferTypes($updateParams));

        $sqlInsert = sprintf('INSERT INTO %s (%s) VALUES (%s)', $qid($table), $colsList, $phList);
        try {
            $conn->executeStatement($sqlInsert, $insertVals, $this->inferTypes($insertVals));
        } catch (UniqueConstraintViolationException) {
            // another tx won; OK
        }
    }

    private function inferTypes(array $vals): array
    {
        return array_map(static function ($v) {
            if ($v instanceof \DateTimeImmutable || $v instanceof \DateTimeInterface) return Types::DATETIME_IMMUTABLE;
            if (\is_int($v))   return Types::INTEGER;
            if (\is_bool($v))  return Types::BOOLEAN;
            if (\is_array($v)) return Types::JSON;
            return Types::STRING;
        }, $vals);
    }

    // ---------- legacy ------------------------------------------------------

    public function flush(): void { $this->em->flush(); }
    // mostly for debugging
    public function getEntityManager(): EntityManagerInterface { return $this->em; }

}
