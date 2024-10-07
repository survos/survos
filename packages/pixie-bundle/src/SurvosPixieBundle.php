<?php

/** generated from /home/tac/ca/survos/packages/maker-bundle/templates/skeleton/bundle/src/Bundle.tpl.php */

namespace Survos\PixieBundle;

use Survos\ApiGrid\Controller\GridController;
use Survos\CoreBundle\Traits\HasAssetMapperTrait;
use Survos\PixieBundle\Command\IterateCommand;
use Survos\PixieBundle\Command\PixieExportCommand;
use Survos\PixieBundle\Command\PixieImportCommand;
use Survos\PixieBundle\Command\PixieIndexCommand;
use Survos\PixieBundle\Controller\PixieController;
use Survos\PixieBundle\Controller\SearchController;
use Survos\PixieBundle\DataCollector\PixieDataCollector;
use Survos\PixieBundle\Debug\TraceableStorageBox;
use Survos\PixieBundle\Event\CsvHeaderEvent;
use Survos\PixieBundle\EventListener\CsvHeaderEventListener;
use Survos\PixieBundle\EventListener\TranslationRowEventListener;
use Survos\PixieBundle\Menu\PixieItemMenu;
use Survos\PixieBundle\Menu\PixieMenu;
use Survos\PixieBundle\Service\PixieService;
use Survos\PixieBundle\Service\PixieImportService;
use Survos\PixieBundle\Service\SqliteService;
use Survos\PixieBundle\Twig\TwigExtension;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeBuilder;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Twig\Environment;

class SurvosPixieBundle extends AbstractBundle
{
    use HasAssetMapperTrait;
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {

        $builder->register(PixieImportService::class)
            ->setAutowired(true)
            ->setArgument('$logger', new Reference('logger'))
            ->setArgument('$purgeBeforeImport', $config['purge_before_import'])
        ;

        if (class_exists(Environment::class)) {
            $builder
                ->setDefinition('survos.pixie_bundle', new Definition(TwigExtension::class))
                ->setArgument('$config', $config)
                ->setArgument('$requestStack', new Reference('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE))
                ->addTag('twig.extension')
                ->setAutoconfigured(true)
                ->setPublic(false);
        }

        // @todo: get the bootstrap bundle configuration and add pixieCode
        foreach ([PixieMenu::class, PixieItemMenu::class] as $class) {
            $builder->autowire($class)
                ->setAutowired(true)
                ->setAutoconfigured(true)
                ->setPublic(true);


        }
        $builder->autowire(SqliteService::class)
            ->setAutowired(true)
            ->setPublic(true);

        $builder->autowire(PixieController::class)
            ->addTag('container.service_subscriber')
            ->addTag('controller.service_arguments')
            ->setArgument('$bus', new Reference('debug.traced.messenger.bus.default', ContainerInterface::NULL_ON_INVALID_REFERENCE))
            ->setArgument('$chartBuilder', new Reference('chartjs.builder', ContainerInterface::NULL_ON_INVALID_REFERENCE))
        ;

        $builder->autowire(SearchController::class)
            ->addTag('container.service_subscriber')
            ->addTag('controller.service_arguments')
            ->setArgument('$iriConverter', new Reference('api_platform.symfony.iri_converter', ContainerInterface::NULL_ON_INVALID_REFERENCE))
//            ->setArgument(
//                '$authorizationChecker',
//                new Reference('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)
//            )
            ->setAutoconfigured(true)
        ;

        $builder->autowire(PixieDataCollector::class)
            ->setArgument('$pixieService', new Reference(PixieService::class))
            ->addTag('data_collector', [
                'template' => '@SurvosPixie/DataCollector/pixie_debug_profile.html.twig'
            ]);


        // storageBoxService, right?  Then get an instance of the storageBox? PixieService?
        foreach ([StorageBox::class, TraceableStorageBox::class] as $storageBoxClass) {
            $builder->register($storageBoxClass)
                ->setAutowired(true)
                ->setArgument('$logger', new Reference('logger'))
            ;

        }

        // check https://github.com/zenstruck/console-extra/issues/59
        $builder->autowire(PixieIndexCommand::class)
            ->setAutoconfigured(true)
            ->addTag('console.command')
        ;

        $builder->autowire(PixieImportCommand::class)
            ->setAutoconfigured(true)
            ->addTag('console.command')
        ;
        $builder->autowire(IterateCommand::class)
            ->setAutoconfigured(true)
            ->addTag('console.command')
        ;
        $builder->autowire(PixieExportCommand::class)
            ->setAutoconfigured(true)
            ->addTag('console.command')
        ;


        $x = $builder->register(PixieService::class)
            ->setAutowired(true)
            ->setAutoconfigured(true)
            ->setArgument('$isDebug', $builder->getParameter('kernel.debug'))
            ->setArgument('$dataRoot', $config['data_root'])
            ->setArgument('$configDir', $config['config_dir'])
            ->setArgument('$dbDir', $config['db_dir'])
            ->setArgument('$config', $config)
            ->setArgument('$stopwatch', new Reference('debug.stopwatch'))
            ->setArgument('$serializer', new Reference('serializer'))
            ->setArgument('$logger', new Reference('logger'))
        ;

        // register our listener.  We could disable or set priority in the config
        foreach ([TranslationRowEventListener::class, CsvHeaderEventListener::class] as $listenerClass) {
            $builder->register($listenerClass)
//            ->addTag('kernel.event_listener', [
//                'method' => 'onCsvHeaderEvent',
//                'event' => CsvHeaderEvent::class])
                ->setAutowired(true)
                ->setAutoconfigured(true)
                ->setPublic(true)
            ;

        }
    }

    private function addPixiesSection(ArrayNodeDefinition $rootNode): void
    {
        $children = $rootNode->children();  // Start with children() on the root node

        $this->addCoresSection($children);
        $this->addPixiesSectionChildren($children);

        $children->end();  // End the children block
    }

    private function addCoresSection(NodeBuilder $children): void
    {
        $children
            ->arrayNode('cores')
            ->arrayPrototype()
                ->children()
                    ->scalarNode('icon')->end()
                    ->scalarNode('icon_class')->end()
                ->end()
            ->end()
            ->end();
    }

    private function addPixiesSectionChildren(NodeBuilder $children): void
    {
        $pixieRoot = $children
            ->arrayNode('pixies')
            ->arrayPrototype()
            ->children();

        $pixieRoot->scalarNode('version')->defaultValue('1.1')->end();


        // like pixies, tables are keyed by some value, but have a prototype beneath them of rules, properies, translatableFields, etc.
        // replace this with
//        $this->addTablesSection($pixies);
        $pixieRoot->arrayNode('tables')->end();

        $this->addSourceSection($pixieRoot);
    }

    private function addSourceSection(NodeBuilder $pixieRoot): void
    {
        $source = $pixieRoot
            ->arrayNode('source')
            ->children();

        $this->addGitSection($source);
        $source
            ->scalarNode('instructions')->end()
            ->scalarNode('notes')->end()
            ->scalarNode('dir')->info('defaults to <projectDir>/data')->end()

            ->arrayNode('links')->info("pre-defined links");
        # this isn't right.
        foreach (['facebook', 'twitter','github','instagram','flickr'] as $socialMedia) {
            $source->scalarNode($socialMedia)->end();
        }
        $source
            ->end()

            ->arrayNode('ignore')->info("array of patterns to ignore")
                ->scalarPrototype()->defaultValue(["*.zip"])->end()
            ->end()
            ->scalarNode('include')->end()
            ->end() // End pixies children
                ;
        // this seems like its in the wrong spot.
        $source->end();  // End source children
    }

    private function addGitSection(NodeBuilder $sourceRoot): void
    {
        $sourceRoot
            ->arrayNode('git')
                ->children()
                    ->scalarNode('repo')->end()
                    ->booleanNode('lfs')->defaultFalse()->end()
                    ->scalarNode('lsf_include')->end()
                ->end()
            ->end();
    }


    public function configure(DefinitionConfigurator $definition): void
    {
        // see https://github.com/tacman/pwa-bundle/tree/1.2.x/src/Resources/config/definition for best practices
        $rootNode = $definition->rootNode();
        $rootNode
            ->children()
            ->scalarNode('extension')->info("the pixie db extension")->defaultValue('.pixie.db')->end()
            ->scalarNode('db_dir')->info("where to store the pixie db files")->defaultValue('pixie]')->end()
            ->scalarNode('data_root')->info("root for csv/json data")->defaultValue('data')->end()
            ->scalarNode('transport')->info("default transport for iterate, e.g. sync")->defaultNull()->end()
            ->booleanNode('purge_before_import')->info("purge db before import")->defaultValue(false)->end()
            ->integerNode('limit')->info("import, index, translation, etc. limit")->defaultValue(0)->end()
            ->scalarNode('config_dir')->info("location of .pixie.yaml config files")->defaultValue('config/packages/pixie')->end()
            ->end();
        $this->addPixiesSection($rootNode);
    }

    public function getPaths(): array
    {
        $dir = realpath(__DIR__ . '/../assets/');
        assert(file_exists($dir), 'asset path must exist for the assets in ' . __DIR__);
        return [$dir => '@survos/pixie'];
    }

}
