<?php
// src/SurvosBabelBundle.php
// Compiler pass with trait-aware attribute scanning + logging

declare(strict_types=1);

namespace Survos\BabelBundle;

use Survos\BabelBundle\Attribute\BabelLocale;
use Survos\BabelBundle\Attribute\Translatable;
use Survos\BabelBundle\Command\BabelBrowseCommand;
use Survos\BabelBundle\Command\BabelPopulateCommand;
use Survos\BabelBundle\Command\BabelTranslateMissingCommand;
use Survos\BabelBundle\Command\BabelTranslatablesDumpCommand;
use Survos\BabelBundle\EventListener\TranslatableListener;
use Survos\BabelBundle\Service\LocaleContext;
use Survos\BabelBundle\Service\TranslationStore;
use Survos\LibreTranslateBundle\Service\LibreTranslateService;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

final class SurvosBabelBundle extends AbstractBundle implements CompilerPassInterface
{
    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass($this);
    }

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        foreach ([BabelBrowseCommand::class, BabelTranslatablesDumpCommand::class, BabelPopulateCommand::class] as $cmd) {
            $builder->autowire($cmd)->setAutoconfigured(true)->addTag('console.command');
        }
        $builder->autowire(BabelTranslateMissingCommand::class)
            ->setAutoconfigured(true)
            ->setArgument('$libreTranslateService', new Reference(LibreTranslateService::class))
            ->addTag('console.command');

        foreach ([TranslationStore::class, LocaleContext::class] as $svc) {
            $builder->autowire($svc)->setAutowired(true)->setAutoconfigured(true)->setPublic(true);
        }

        $builder->autowire(TranslatableListener::class)
            ->setAutowired(true)->setAutoconfigured(true)->setPublic(false);
    }

    public function process(ContainerBuilder $container): void
    {
        if (!$container->hasDefinition(TranslationStore::class)) {
            return;
        }

        $index = [];

        $projectDir = (string) $container->getParameter('kernel.project_dir');
        $srcDir     = $projectDir . DIRECTORY_SEPARATOR . 'src';
        $prefix     = 'App';

        if (!is_dir($srcDir)) {
//            echo "[Babel] src/ not found in project dir $projectDir\n";
        } else {
//            echo "[Babel] Scanning $srcDir for classes (prefix $prefix)\n";
            foreach ($this->scanPhpFiles($srcDir) as $file) {
                $relPath = substr($file, strlen($srcDir) + 1);
                $class   = $prefix . '\\' . str_replace(['/', '\\', '.php'], ['\\', '\\', ''], $relPath);
                if (!class_exists($class)) {
                    continue;
                }
                $this->maybeIndexClass($index, $class);
            }
        }

//        echo "[Babel] Compiler pass finished. Indexed " . count($index) . " classes.\n";

        $container->findDefinition(TranslationStore::class)
            ->setArgument('$translatableIndex', $index);
    }

    /** @return iterable<string> absolute file paths */
    private function scanPhpFiles(string $baseDir): iterable
    {
        $it = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($baseDir, \FilesystemIterator::SKIP_DOTS)
        );
        /** @var \SplFileInfo $f */
        foreach ($it as $f) {
            if ($f->isFile() && $f->getExtension() === 'php') {
                yield $f->getPathname();
            }
        }
    }

    private function maybeIndexClass(array &$index, string $class): void
    {
        try {
            $rc = new \ReflectionClass($class);
        } catch (\Throwable) {
            return;
        }
        if ($rc->isAbstract() || $rc->isTrait()) {
            return;
        }

        // Collect ALL properties from class + all used traits (recursive)
        $props = $this->collectPropsRecursive($rc);

        // Gather fields with #[Translatable] no matter where they live (class/trait) and remember the source
        $fields = [];
        foreach ($props as $entry) {
            /** @var \ReflectionProperty $p */
            $p = $entry['prop'];
            $src = $entry['source']; // class FQCN or trait FQCN
            $attrs = $p->getAttributes(Translatable::class);
            if (!$attrs) continue;
            /** @var Translatable $meta */
            $meta = $attrs[0]->newInstance();
            $fields[$p->getName()] = ['context' => $meta->context, '_source' => $src];
        }

        // Detect localeProp on class OR trait
        $localeProp = null;
        foreach ($props as $entry) {
            $p = $entry['prop'];
            if ($p->getAttributes(BabelLocale::class)) {
                $localeProp = $p->getName();
                break;
            }
        }

        // tCodes existence on class OR trait
        $hasTCodes = false;
        foreach ($props as $entry) {
            if ($entry['prop']->getName() === 'tCodes') { $hasTCodes = true; break; }
        }

        if (!$fields && !$hasTCodes && $localeProp === null) {
            // nothing interesting on this class
            return;
        }

        // needsHooks heuristic: if a translatable field has no <field>Backing anywhere AND class doesn't use our hooks trait
        $usesHooksTrait = $this->classUsesTraitRecursive($rc, 'Survos\\BabelBundle\\Entity\\Traits\\TranslatableHooksTrait');
        $allPropNames = array_map(fn($e) => $e['prop']->getName(), $props);
        $allPropNames = array_fill_keys($allPropNames, true);

        $needsHooks = false;
        $fieldsNeedingHooks = [];
        foreach (array_keys($fields) as $fname) {
            $backing = $fname.'Backing';
            if (!isset($allPropNames[$backing]) && !$usesHooksTrait) {
                $needsHooks = true;
                $fieldsNeedingHooks[] = $fname;
            }
        }

        // Log with source (trait/class) for each field
//        echo sprintf("[Babel] Indexed %s  fields=[%s]  localeProp=%s  hasTCodes=%s  needsHooks=%s\n",
//            $class,
//            implode(', ', array_map(fn($n) => $n . (isset($fields[$n]['_source']) ? '@'.($fields[$n]['_source']) : ''), array_keys($fields))),
//            $localeProp ?? '(none)',
//            $hasTCodes ? 'yes' : 'no',
//            $needsHooks ? ('YES: '.implode(', ', $fieldsNeedingHooks)) : 'no'
//        )."\n";

        // Strip _source before storing
        foreach ($fields as &$f) { unset($f['_source']); }

        $index[$class] = [
            'fields'             => $fields,
            'localeProp'         => $localeProp,
            'hasTCodes'          => $hasTCodes,
            'needsHooks'         => $needsHooks,
            'fieldsNeedingHooks' => $fieldsNeedingHooks,
        ];
    }

    /** @return array<array{prop:\ReflectionProperty, source:string}> */
    private function collectPropsRecursive(\ReflectionClass $rc): array
    {
        $out = [];
        // class properties
        foreach ($rc->getProperties() as $p) {
            $out[] = ['prop' => $p, 'source' => $rc->getName()];
        }
        // trait properties (recursive)
        foreach ($this->collectTraitsRecursive($rc) as $t) {
            foreach ($t->getProperties() as $p) {
                $out[] = ['prop' => $p, 'source' => $t->getName()];
            }
        }
        // parent chain
        if ($parent = $rc->getParentClass()) {
            $out = array_merge($out, $this->collectPropsRecursive($parent));
        }
        return $out;
    }

    /** @return \ReflectionClass[] traits used by the class (recursive) */
    private function collectTraitsRecursive(\ReflectionClass $rc): array
    {
        $seen = [];
        $out  = [];
        $stack = $rc->getTraits();
        while ($stack) {
            /** @var \ReflectionClass $t */
            $t = array_pop($stack);
            $name = $t->getName();
            if (isset($seen[$name])) continue;
            $seen[$name] = true;
            $out[] = $t;
            foreach ($t->getTraits() as $tt) {
                $stack[] = $tt;
            }
        }
        return $out;
    }

    private function classUsesTraitRecursive(\ReflectionClass $rc, string $traitFqcn): bool
    {
        foreach ($rc->getTraitNames() as $t) {
            if ($t === $traitFqcn) return true;
        }
        foreach ($rc->getTraits() as $tRc) {
            if ($this->classUsesTraitRecursive($tRc, $traitFqcn)) return true;
        }
        $parent = $rc->getParentClass();
        return $parent ? $this->classUsesTraitRecursive($parent, $traitFqcn) : false;
    }
}
