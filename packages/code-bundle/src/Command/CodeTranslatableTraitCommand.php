<?php
declare(strict_types=1);

namespace Survos\CodeBundle\Command;

use PhpParser\Node;
use PhpParser\Node\AttributeGroup;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\Namespace_;
use PhpParser\Node\Stmt\Property;
use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter\Standard as Pretty;
use Psr\Log\LoggerInterface;
use Survos\CodeBundle\Service\EntityTranslatableUpdater;
use Survos\CodeBundle\Service\TranslatableTraitGenerator;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

#[AsCommand('code:translatable:trait', 'Generate <Entity>TranslationsTrait and update entities (scan-all if no path)')]
final class CodeTranslatableTraitCommand
{
    private Pretty $pp;

    public function __construct(
        private readonly TranslatableTraitGenerator $traitGen,
        private readonly EntityTranslatableUpdater  $updater,
        private readonly LoggerInterface            $logger,
        #[Autowire('%kernel.project_dir%')] private readonly string $projectDir,
        #[Autowire(param: 'kernel.default_locale')] private readonly string $defaultLocale = 'en',
        #[Autowire(param: 'kernel.enabled_locales')] private readonly array $enabledLocales = [],
    ) {
        $this->pp = new Pretty();
    }

    public function __invoke(
        SymfonyStyle $io,
        #[Argument('Optional path to entity file or directory; when omitted, scan src/Entity')] ?string $path = null,
        #[Option('Trait namespace base (defaults to <EntityNs>\\Translations)')] ?string $traitNsBase = null,
        #[Option('Dry-run: only show diffs / do not write')] bool $dryRun = false,
    ): int {
        $io->title('Generate TranslationsTrait + Update Entities');

        // 0) Report locales and warn if misconfigured
        $this->reportLocales($io);

        // 1) Resolve targets
        $targets = $this->resolveTargets($path);
        if (!$targets) {
            $io->warning('No entity files detected.');
            return 0;
        }

        $parser = (new ParserFactory())->createForHostVersion();

        $totalUpdated = 0;
        $totalTraits  = 0;
        foreach ($targets as $entityFile) {
            $code = @file_get_contents($entityFile);
            if ($code === false) {
                $this->logger->warning('Skip unreadable entity', ['file' => $entityFile]);
                continue;
            }

            $ast = $parser->parse($code);
            if (!$ast) {
                $this->logger->warning('Skip unparsable entity', ['file' => $entityFile]);
                continue;
            }

            // Find ns+class
            [$nsName, $className, $classNode] = $this->findNamespaceAndClass($ast);
            if (!$classNode || !$className || !$nsName) {
                $this->logger->warning('Skip (no class/namespace)', ['file' => $entityFile]);
                continue;
            }

            $entityFqcn = $nsName.'\\'.$className;
            $entityDir  = \dirname($entityFile);

            // Scan this entity for #[Translatable] public properties
            [$fields, $fieldNames] = $this->scanTranslatableFieldsFromAst($classNode);
            $this->logger->info('Entity scan', ['entity' => $entityFqcn, 'fields' => $fieldNames]);

            // If nothing to generate for this entity, still run updater to normalize implements/uses
            $traitNamespace = ($traitNsBase ?? $nsName.'\\Translations');
            $traitName      = $className.'TranslationsTrait';
            $traitFqcn      = $traitNamespace.'\\'.$traitName;
            $traitPath      = $entityDir.'/Translations/'.$traitName.'.php';

            if ($fields) {
                // Write the trait (complete file in one pass)
                $this->traitGen->generateTrait(
                    traitFqcn:  $traitFqcn,
                    fields:     $fields,
                    targetPath: $traitPath
                );
                $totalTraits++;
                $io->writeln(sprintf(' • Trait <info>%s</info> → <comment>%s</comment>', $traitFqcn, $this->rel($traitPath)));
            }

            // Update entity (imports, implements short, use short traits, remove props, @property)
            $updated = $this->updater->updateEntity(
                entityPath:  $entityFile,
                entityFqcn:  $entityFqcn,
                traitFqcn:   $traitFqcn,
                fieldNames:  $fieldNames,
                dryRun:      $dryRun,
                backup:      false, // git is our backup
            );
            if ($updated) {
                $totalUpdated++;
                $io->writeln(sprintf(' • Updated entity <info>%s</info>', $this->rel($entityFile)));
            }
        }

        // 2) Scaffold Str/StrTranslation (+ repos) if missing
        $scaffolded = $this->scaffoldStrEntitiesIfMissing($io);

        $io->newLine();
        $io->success(sprintf('Done. Traits: %d, Entities updated: %d%s',
            $totalTraits, $totalUpdated, $scaffolded ? ", Scaffolds: $scaffolded" : ''
        ));

        return 0;
    }

    // ----------------------- helpers -----------------------

    private function reportLocales(SymfonyStyle $io): void
    {
        $enabled = array_values(array_unique(array_filter($this->enabledLocales, 'strlen')));
        $io->section('Locales');
        $io->text('Default: <info>'.$this->defaultLocale.'</info>');
        $io->text('Enabled: <info>'.($enabled ? implode(', ', $enabled) : '(none)').'</info>');

        if (!$enabled || (count($enabled) === 1 && $enabled[0] === $this->defaultLocale)) {
            $io->warning("Meaningful 'framework.enabled_locales' is not configured.");
            $io->writeln("Add something like:");
            $io->writeln("  framework:");
            $io->writeln("    default_locale: ".$this->defaultLocale);
            $io->writeln("    enabled_locales: ['".$this->defaultLocale."', 'es', 'de', 'fr']");
        }
    }

    /** @return list<string> */
    private function resolveTargets(?string $path): array
    {
        $targets = [];
        if ($path === null) {
            $root = $this->projectDir.'/src/Entity';
            if (is_dir($root)) {
                $it = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($root, \FilesystemIterator::SKIP_DOTS));
                foreach ($it as $f) {
                    if ($f->isFile() && $f->getExtension() === 'php') {
                        // skip generated translations traits
                        if (str_contains($f->getPathname(), '/Translations/')) continue;
                        $targets[] = $f->getPathname();
                    }
                }
            }
        } else {
            if (is_dir($path)) {
                $it = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path, \FilesystemIterator::SKIP_DOTS));
                foreach ($it as $f) if ($f->isFile() && $f->getExtension() === 'php') $targets[] = $f->getPathname();
            } elseif (is_file($path)) {
                $targets[] = $path;
            }
        }
        sort($targets);
        return $targets;
    }

    /** @return array{0:?string,1:?string,2:?Class_} */
    private function findNamespaceAndClass(array $ast): array
    {
        $nsName = null; $className = null; $class = null;
        foreach ($ast as $stmt) {
            if ($stmt instanceof Namespace_) {
                $nsName = $stmt->name?->toString();
                foreach ($stmt->stmts as $s) {
                    if ($s instanceof Class_) { $class = $s; $className = $s->name?->toString(); break; }
                }
            }
        }
        return [$nsName, $className, $class];
    }

    /**
     * AST-based scan:
     *  - find public properties with #[Translatable]
     *  - emit short attributes for hook: #[Translatable], #[Groups(...)]
     *
     * @return array{0: array<int, array{name:string, hookAttrs:string[], columnAttr?:string|null}>, 1: string[]}
     */
    private function scanTranslatableFieldsFromAst(Class_ $class): array
    {
        $fields = [];
        $names  = [];

        foreach ($class->stmts as $stmt) {
            if (!$stmt instanceof Property) continue;
            if (!($stmt->flags & Class_::MODIFIER_PUBLIC)) continue;

            $hasTranslatable = false;
            foreach ($stmt->attrGroups as $grp) {
                foreach ($grp->attrs as $attr) {
                    $fq = $attr->name->toString();
                    if ($fq === 'Translatable' || $fq === 'Survos\\BabelBundle\\Attribute\\Translatable') {
                        $hasTranslatable = true; break 2;
                    }
                }
            }
            if (!$hasTranslatable) continue;

            $hookAttrLines = $this->emitHookAttributesShort($stmt->attrGroups);

            foreach ($stmt->props as $prop) {
                $name = $prop->name->toString();
                $fields[] = [
                    'name'       => $name,
                    'hookAttrs'  => $hookAttrLines,
                    'columnAttr' => null,
                ];
                $names[] = $name;
            }
        }

        return [$fields, $names];
    }

    /** @param AttributeGroup[] $groups */
    private function emitHookAttributesShort(array $groups): array
    {
        $out = [];
        foreach ($groups as $g) {
            foreach ($g->attrs as $a) {
                $name = $a->name->toString();
                if ($name === 'Column' || $name === 'Doctrine\\ORM\\Mapping\\Column' || str_ends_with($name, '\\Column')) {
                    continue;
                }
                $parts = [];
                foreach ($a->args as $arg) {
                    $k = $arg->name?->toString();
                    $v = $this->pp->prettyPrintExpr($arg->value);
                    $parts[] = $k ? ($k.': '.$v) : $v;
                }
                if ($name === 'Translatable' || $name === 'Survos\\BabelBundle\\Attribute\\Translatable') {
                    $out[] = '#[Translatable'.($parts ? '('.implode(', ', $parts).')' : '').']';
                } elseif ($name === 'Groups' || $name === 'Symfony\\Component\\Serializer\\Attribute\\Groups') {
                    $out[] = '#[Groups'.($parts ? '('.implode(', ', $parts).')' : '').']';
                } else {
                    $out[] = '#['.$name.($parts ? '('.implode(', ', $parts).')' : '').']';
                }
            }
        }
        return $out ?: ['#[Translatable]'];
    }

    private function rel(string $abs): string
    {
        return str_starts_with($abs, $this->projectDir.'/') ? substr($abs, strlen($this->projectDir) + 1) : $abs;
    }

    /**
     * Ensure Str and StrTranslation (and their repositories) exist under App\*.
     * Returns the number of files created.
     */
    private function scaffoldStrEntitiesIfMissing(SymfonyStyle $io): int
    {
        $created = 0;

        $entityDir = $this->projectDir.'/src/Entity';
        $repoDir   = $this->projectDir.'/src/Repository';
        @mkdir($entityDir, 0775, true);
        @mkdir($repoDir, 0775, true);

        // Str
        if (!class_exists('App\\Entity\\Str')) {
            $code = <<<PHPSTR
<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\StrRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StrRepository::class)]
#[ORM\Table(name: 'str')]
class Str extends \Survos\BabelBundle\Entity\Base\StrBase
{
}
PHPSTR;
            file_put_contents($entityDir.'/Str.php', $code);
            $created++;
            $io->writeln(' • Created <info>App\Entity\Str</info>');
        }
        if (!class_exists('App\\Repository\\StrRepository')) {
            $code = <<<PHPSTRR
<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Str;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

final class StrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) { parent::__construct($registry, Str::class); }
}
PHPSTRR;
            file_put_contents($repoDir.'/StrRepository.php', $code);
            $created++;
            $io->writeln(' • Created <info>App\Repository\StrRepository</info>');
        }

        // StrTranslation
        if (!class_exists('App\\Entity\\StrTranslation')) {
            $code = <<<PHPTR
<?php
declare(strict_types=1);

namespace App\Entity;

use App\Repository\StrTranslationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StrTranslationRepository::class)]
#[ORM\Table(name: 'str_translation')]
class StrTranslation extends \Survos\BabelBundle\Entity\Base\StrTranslationBase
{
}
PHPTR;
            file_put_contents($entityDir.'/StrTranslation.php', $code);
            $created++;
            $io->writeln(' • Created <info>App\Entity\StrTranslation</info>');
        }
        if (!class_exists('App\\Repository\\StrTranslationRepository')) {
            $code = <<<PHPTRR
<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\StrTranslation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

final class StrTranslationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry) { parent::__construct($registry, StrTranslation::class); }
}
PHPTRR;
            file_put_contents($repoDir.'/StrTranslationRepository.php', $code);
            $created++;
            $io->writeln(' • Created <info>App\Repository\StrTranslationRepository</info>');
        }

        if ($created) {
            $io->warning('Str/StrTranslation were scaffolded. Run your migrations or doctrine:schema:update --force.');
        }
        return $created;
    }
}
