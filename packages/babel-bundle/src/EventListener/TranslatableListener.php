<?php
declare(strict_types=1);

namespace Survos\BabelBundle\EventListener;

use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\DBAL\Platforms\SqlitePlatform;
use Doctrine\ORM\Event\PostLoadEventArgs;
use Doctrine\ORM\Event\PostFlushEventArgs;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Events;
use Psr\Log\LoggerInterface;
use Survos\BabelBundle\Service\LocaleContext;
use Survos\BabelBundle\Service\TranslationStore;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;

#[AsDoctrineListener(event: Events::prePersist)]
#[AsDoctrineListener(event: Events::preUpdate)]
#[AsDoctrineListener(event: Events::postLoad)]
#[AsDoctrineListener(event: Events::postFlush)]
final class TranslatableListener
{
    public function __construct(
        private readonly TranslationStore $store,
        private readonly LocaleContext $localeContext,
        private readonly PropertyAccessorInterface $pa,
        private readonly LoggerInterface $logger,
        private readonly string $fallbackLocale = 'en',
    ) {}

    private function isSqlite(): bool
    {
        return $this->store->getEntityManager()->getConnection()->getDatabasePlatform() instanceof SqlitePlatform;
    }

    // ---------------- WRITE PHASE ----------------

    public function prePersist(PrePersistEventArgs $args): void
    {
        $entity = $args->getObject();
        $this->logger->debug('[Babel] prePersist: {class}', ['class' => $entity::class]);
        $this->ensureSourceRecords($entity, 'prePersist', $args);
    }

    public function preUpdate(PreUpdateEventArgs $args): void
    {
        $entity = $args->getObject();
        $this->logger->debug('[Babel] preUpdate: {class}', ['class' => $entity::class]);
        $changed = $this->ensureSourceRecords($entity, 'preUpdate', $args);
        if ($changed) {
            $om   = $args->getObjectManager();
            $meta = $om->getClassMetadata($entity::class);
            $om->getUnitOfWork()->recomputeSingleEntityChangeSet($meta, $entity);
        }
    }

    /**
     * Returns true if we changed a mapped field on the entity (e.g. tCodes), so caller can recompute changeset.
     */
    private function ensureSourceRecords(object $entity, string $phase, PrePersistEventArgs|PreUpdateEventArgs $args): bool
    {
        $config = $this->store->getEntityConfig($entity) ?? null;
        if (!$config) {
            $this->logger->debug('[Babel] {phase}: no translatable config for {class}', [
                'phase' => $phase, 'class' => $entity::class
            ]);
            return false;
        }

        if (!empty($config['needsHooks'])) {
            $fields = implode(', ', (array)($config['fieldsNeedingHooks'] ?? []));
            $msg = sprintf(
                "Class %s not configured for translations (missing property hooks for: %s).\n".
                "Run one of:\n".
                "  bin/console code:translatable:trait %s\n".
                "  bin/console code:trans:trait %s\n".
                "  bin/console code:translation:trait %s",
                $entity::class, $fields ?: '(unknown)', $entity::class, $entity::class, $entity::class
            );
            $this->logger->error('[Babel] ' . $msg);
            throw new \LogicException($msg);
        }

        // Determine source locale
        $srcLocale = $this->fallbackLocale;
        $prop = $config['localeProp'] ?? 'locale';
        if (\property_exists($entity, $prop)) {
            $v = $this->pa->getValue($entity, $prop);
            if (\is_string($v) && $v !== '') $srcLocale = $this->normalize($v);
        }

        $hasCodes = ($config['hasTCodes'] ?? false) && \property_exists($entity, 'tCodes');
        /** @var array<string,string> $codes */
        $codes   = $hasCodes ? ((array)($entity->tCodes ?? [])) : [];
        $updated = false;

        foreach (array_keys($config['fields'] ?? []) as $field) {
            if (!\property_exists($entity, $field)) continue;

            $value = \method_exists($entity, 'getBackingValue')
                ? $entity->getBackingValue($field)
                : $this->pa->getValue($entity, $field);

            if (!\is_string($value) || \trim($value) === '') continue;

            $context = $config['fields'][$field]['context'] ?? $field;
            $hash    = $this->store->hash($value, $srcLocale, $context);

            $this->logger->info('[Babel] {phase}: schedule STR/TR', [
                'phase' => $phase, 'class' => $entity::class, 'field' => $field,
                'context' => $context, 'srcLocale' => $srcLocale, 'hash' => $hash,
                'preview' => mb_substr($value, 0, 64),
                'sqlite' => $this->isSqlite(),
            ]);

            if ($this->isSqlite()) {
                // Queue for postFlush to avoid SQLite write during ORM transaction
                $this->store->queueUpsert($hash, $value, $srcLocale, $context, $srcLocale, $value);
            } else {
                // Immediate write on non-SQLite platforms
                $this->store->upsertRaw($hash, $value, $srcLocale, $context, $srcLocale, $value);
            }

            if (($codes[$field] ?? null) !== $hash) {
                $codes[$field] = $hash;
                $updated = true;
            }
        }

        if ($hasCodes && $updated) {
            $entity->tCodes = $codes ?: null;
            return true; // caller recomputes changeset
        }

        return false;
    }

    // For SQLite only: drain queued upserts AFTER the ORM transaction commits
    public function postFlush(PostFlushEventArgs $args): void
    {
        if ($this->isSqlite()) {
            $this->logger->info('[Babel] postFlush: draining queued STR/TR for SQLite');
            $this->store->drainQueuedUpserts();
        }
    }

    // ---------------- READ PHASE ----------------

    public function postLoad(PostLoadEventArgs $args): void
    {
        $entity = $args->getObject();
        $config = $this->store->getEntityConfig($entity) ?? null;
        if (!$config) return;

        $targetLocale = $this->normalize($this->localeContext->get() ?? $this->fallbackLocale);
        $srcLocale    = $this->fallbackLocale;

        /** @var array<string,string> $codes */
        $codes = \property_exists($entity, 'tCodes') ? ((array)($entity->tCodes ?? [])) : [];

        foreach ($config['fields'] as $field => $info) {
            if (!\property_exists($entity, $field)) continue;

            $sourceValue = \method_exists($entity, 'getBackingValue')
                ? $entity->getBackingValue($field)
                : $this->pa->getValue($entity, $field);

            if (!\is_string($sourceValue) || $sourceValue === '') continue;

            $context = $info['context'] ?? $field;
            $hash    = $codes[$field] ?? $this->store->hash($sourceValue, $srcLocale, $context);
            $text    = $this->store->get($hash, $targetLocale) ?? $sourceValue;

            if (\method_exists($entity, 'setResolvedTranslation')) {
                $entity->setResolvedTranslation($field, $text);
            }
        }
    }

    private function normalize(string $locale): string
    {
        $locale = \str_replace('_', '-', \trim($locale));
        if (\preg_match('/^([a-zA-Z]{2,3})(?:-([A-Za-z]{2}))?$/', $locale, $m)) {
            $lang = \strtolower($m[1]);
            $reg  = isset($m[2]) ? '-'.\strtoupper($m[2]) : '';
            return $lang.$reg;
        }
        return $locale;
    }
}
