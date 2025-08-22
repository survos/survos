<?php

/** generated from /home/tac/ca/survos/packages/maker-bundle/templates/skeleton/bundle/src/Bundle.tpl.php */

namespace Survos\PixieBundle;

use Survos\CoreBundle\Traits\HasAssetMapperTrait;
use Survos\PixieBundle\Command\IterateCommand;
use Survos\PixieBundle\Command\PixieExportCommand;
use Survos\PixieBundle\Command\PixieImportCommand;
use Survos\PixieBundle\Command\PixieIndexCommand;
use Survos\PixieBundle\Command\PixieInjestCommand;
use Survos\PixieBundle\Command\PixieMakeCommand;
use Survos\PixieBundle\Command\PixieMediaCommand;
use Survos\PixieBundle\Command\PixieMeiliSettingsCommand;
use Survos\PixieBundle\Command\PixieMigrateCommand;
use Survos\PixieBundle\Command\PixiePrepareCommand;
use Survos\PixieBundle\Command\PixieSchemaDumpCommand;
use Survos\PixieBundle\Command\PixieSchemaSyncCommand;
use Survos\PixieBundle\Command\PixieStatsShowCommand;
use Survos\PixieBundle\Command\PixieSyncCommand;
use Survos\PixieBundle\Command\PixieTranslateCommand;
use Survos\PixieBundle\Components\DatabaseComponent;
use Survos\PixieBundle\Components\RowComponent;
use Survos\PixieBundle\Controller\PixieController;
use Survos\PixieBundle\Controller\PixieDashboardController;
use Survos\PixieBundle\Controller\SearchController;
use Survos\PixieBundle\DataCollector\PixieDataCollector;
use Survos\PixieBundle\Debug\TraceableStorageBox;
use Survos\PixieBundle\Dto\Attributes\Mapper as MapperAttr;
use Survos\PixieBundle\EventListener\CsvHeaderEventListener;
use Survos\PixieBundle\EventListener\PixieControllerEventListener;
use Survos\PixieBundle\EventListener\PixiePostLoadListener;
use Survos\PixieBundle\EventListener\TranslationRowEventListener;
use Survos\PixieBundle\Import\Ingest\CsvIngestor;
use Survos\PixieBundle\Import\Ingest\JsonIngestor;
use Survos\PixieBundle\Menu\PixieItemMenu;
use Survos\PixieBundle\Menu\PixieMenu;
use Survos\PixieBundle\Repository\CoreDefinitionRepository;
use Survos\PixieBundle\Repository\CoreRepository;
use Survos\PixieBundle\Repository\FieldDefinitionRepository;
use Survos\PixieBundle\Repository\FieldRepository;
use Survos\PixieBundle\Repository\OriginalImageRepository;
use Survos\PixieBundle\Repository\RowRepository;
use Survos\PixieBundle\Repository\StrRepository;
use Survos\PixieBundle\Repository\StrTranslationRepository;
use Survos\PixieBundle\Repository\TableRepository;
use Survos\PixieBundle\Schema\YamlSchemaSynchronizer;
use Survos\PixieBundle\Service\CoreService;
use Survos\PixieBundle\Service\DtoMapper;
use Survos\PixieBundle\Service\DtoRegistry;
use Survos\PixieBundle\Service\EventQueryService;
use Survos\PixieBundle\Service\ImportHandler;
use Survos\PixieBundle\Service\LibreTranslateService;
use Survos\PixieBundle\Service\LocaleContext;
use Survos\PixieBundle\Service\MeiliIndexer;
use Survos\PixieBundle\Service\MeiliSettingsBuilder;
use Survos\PixieBundle\Service\PixieConvertService;
use Survos\PixieBundle\Service\PixieDocumentProjector;
use Survos\PixieBundle\Service\PixieEntityManagerProvider;
use Survos\PixieBundle\Service\PixieImportService;
use Survos\PixieBundle\Service\PixieService;
use Survos\PixieBundle\Service\PixieTranslationService;
use Survos\PixieBundle\Service\ReferenceService;
use Survos\PixieBundle\Service\RelationService;
use Survos\PixieBundle\Service\RowIngestor;
use Survos\PixieBundle\Service\SchemaViewService;
use Survos\PixieBundle\Service\SqlViewService;
use Survos\PixieBundle\Service\StatsCollector;
use Survos\PixieBundle\Service\TranslationResolver;
use Survos\PixieBundle\StorageBox;
use Survos\PixieBundle\Twig\TwigExtension;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeBuilder;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Twig\Environment;

class SurvosPixieBundle extends AbstractBundle implements CompilerPassInterface
{
    use HasAssetMapperTrait;

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        // Autoconfigure DTO classes annotated with #[Mapper] -> tag "pixie.dto"
        $container->registerAttributeForAutoconfiguration(
            MapperAttr::class,
            static function (Definition $definition, MapperAttr $attr, \ReflectionClass $ref): void {
                $definition->addTag('pixie.dto', [
                    'priority' => $attr->priority,
                    'when' => $attr->when,
                    'except' => $attr->except,
                    'cores' => $attr->cores,
                ]);
            }
        );

        // If you still want this class as a compiler pass for other reasons, keep it.
        // Otherwise, you can drop the addCompilerPass($this) call entirely.
        $container->addCompilerPass($this);
    }

    public function process(ContainerBuilder $container): void
    {
        // Intentionally no-op (remove dd/experiments).
        // You can add other pass-time tweaks here later if needed.
    }

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {

        foreach ([
                     \Survos\PixieBundle\Dto\Generic\Obj::class,
                     // add more bundle DTOs here as you create them:
                     // \Survos\PixieBundle\Dto\Cleveland\Obj::class,
                 ] as $dtoClass) {
            $builder->register($dtoClass)
                ->setAutowired(true)
                ->setAutoconfigured(true)
                ->setPublic(false);
        }

        // repos are not public, but do need the tag
        foreach ([CoreRepository::class,
                     FieldRepository::class,
                     FieldDefinitionRepository::class,
                     TableRepository::class,
                     StrRepository::class,
                     StrTranslationRepository::class,
                     OriginalImageRepository::class,
                     RowRepository::class,
                     CoreDefinitionRepository::class] as $class) {
            $builder->register($class)
                ->setAutowired(true)
                ->setAutoconfigured(true)
                ->addTag('doctrine.repository_service')//                ->setPublic(true)
            ;

        }

        // Core services
        foreach ([
                     StatsCollector::class,
                     PixieService::class,
                     PixieImportService::class,
                     PixieEntityManagerProvider::class,
                     CoreService::class,
                     LocaleContext::class,
                     MeiliSettingsBuilder::class,
                     JsonIngestor::class,
                     CsvIngestor::class,
                     YamlSchemaSynchronizer::class,
                     PixieDocumentProjector::class,
                     EventQueryService::class,
                     TranslationResolver::class,
                     PixieTranslationService::class,
                     LibreTranslateService::class,
                     MeiliIndexer::class,
                     PixieConvertService::class,
                     ReferenceService::class,
                     RelationService::class,
                     RowIngestor::class,
                     SchemaViewService::class,
                     SqlViewService::class,
                     DtoMapper::class,
                     DtoRegistry::class,
                     DatabaseComponent::class,
                     RowComponent::class,
                 ] as $svc) {
            $builder->register($svc)
                ->setAutowired(true)
                ->setAutoconfigured(true)
                ->setPublic(true);
        }

        // PixieService args
        $builder->getDefinition(PixieImportService::class)
            ->setArgument('$logger', new Reference('logger'))
            ->setArgument('$purgeBeforeImport', $config['purge_before_import']);

        $builder->getDefinition(PixieConvertService::class)
            ->setArgument('$logger', new Reference('logger'))
            ->setArgument('$purgeBeforeImport', $config['purge_before_import']);

        $builder->getDefinition(PixieService::class)
            ->setAutowired(true)
            ->setAutoconfigured(true)
            ->setArgument('$isDebug', $config['debug'])
            ->setArgument('$dataRoot', $config['data_root'])
            ->setArgument('$configDir', $config['config_dir'])
            ->setArgument('$dbDir', $config['db_dir'])
            ->setArgument('$bundleConfig', $config)
            ->setArgument('$stopwatch', new Reference('debug.stopwatch'))
            ->setArgument('$serializer', new Reference('serializer'))
            ->setArgument('$logger', new Reference('logger'));

        // Twig extension (if Twig is installed)
        if (class_exists(Environment::class)) {
            $builder
                ->setDefinition('survos.pixie_bundle.twig_extension', new Definition(TwigExtension::class))
                ->setArgument('$requestStack', new Reference('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE))
                ->addTag('twig.extension')
                ->setAutoconfigured(true)
                ->setAutowired(true)
                ->setPublic(false);
        }

        foreach ([PixieController::class, PixieDashboardController::class] as $controllerClass) {
            // Controllers
            $builder->autowire($controllerClass)
                ->addTag('controller.service_arguments')
                ->setAutowired(true)
                ->setAutoconfigured(true)
                ->setPublic(true);

        }

        $builder->autowire(SearchController::class)
            ->addTag('controller.service_arguments')
            ->setAutowired(true)
            ->setAutoconfigured(true)
            ->setPublic(true);

        // Data collector
        $builder->autowire(PixieDataCollector::class)
            ->setArgument('$pixieService', new Reference(PixieService::class))
            ->addTag('data_collector', ['template' => '@SurvosPixie/DataCollector/pixie_debug_profile.html.twig'])
            ->setPublic(true);

        // StorageBox helpers
        foreach ([StorageBox::class, TraceableStorageBox::class] as $storageBoxClass) {
            $builder->register($storageBoxClass)
                ->setAutowired(true)
                ->setAutoconfigured(true)
                ->setArgument('$logger', new Reference('logger'))
                ->setPublic(true);
        }

        // Event listeners
        foreach ([TranslationRowEventListener::class, CsvHeaderEventListener::class, PixiePostLoadListener::class, PixieControllerEventListener::class] as $listener) {
            $builder->register($listener)
                ->setAutowired(true)
                ->setAutoconfigured(true)
                ->setPublic(true);
        }

        // Commands
        foreach ([
                     PixieStatsShowCommand::class,
                     PixieMeiliSettingsCommand::class,
                     PixieMigrateCommand::class,
                     PixieMediaCommand::class,
                     PixieTranslateCommand::class,
                     PixiePrepareCommand::class,
                     PixieImportCommand::class,
                     PixieExportCommand::class,
                     PixieInjestCommand::class,
                     PixieSchemaDumpCommand::class,
                     PixieSchemaSyncCommand::class,
                     IterateCommand::class,
                     PixieIndexCommand::class,
                     PixieSyncCommand::class,
                     PixieMakeCommand::class,
                 ] as $commandClass) {
            $builder->autowire($commandClass)
                ->setAutoconfigured(true)
                ->addTag('console.command');
        }
    }

    public function configure(DefinitionConfigurator $definition): void
    {
        $root = $definition->rootNode();
        $root
            ->children()
            // Use a filename extension compatible with your PixieService expectation
            ->scalarNode('extension')->defaultValue('db')->info("pixie DB filename extension, e.g. 'db'")->end()
            ->scalarNode('db_dir')->defaultValue('pixie')->info("directory for pixie db files")->end()
            ->scalarNode('data_root')->defaultValue('data')->info("root for csv/json data")->end()
            ->scalarNode('transport')->defaultNull()->info("default messenger transport for iterate")->end()
            ->booleanNode('debug')->defaultFalse()->info("turn on profiler hooks (kernel.debug?)")->end()
            ->booleanNode('purge_before_import')->defaultFalse()->end()
            ->integerNode('limit')->defaultValue(0)->info("default limit for import/index/translate")->end()
            ->scalarNode('config_dir')->defaultValue('config/packages/pixie')->end()
            ->end();

        $this->addPixiesSection($root);
    }

    private function addPixiesSection(ArrayNodeDefinition $rootNode): void
    {
        $children = $rootNode->children();

        $this->addCoresSection($children);
        $this->addTablesSection($children, 'templates');
        $this->addPixiesSectionChildren($children);

        $children->end();
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
            ->useAttributeAsKey('code')
            ->arrayPrototype()
            ->children();

        $pixieRoot->scalarNode('version')->defaultValue('1.1')->end();
        $pixieRoot->scalarNode('code')->defaultNull()->end();
        $pixieRoot->scalarNode('type')->defaultValue('museum')->end();

        $pixieRoot->arrayNode('files')->scalarPrototype()->end()->end();

        $pixieRoot->arrayNode('members')
            ->arrayPrototype()
            ->children()
            ->scalarNode('email')->defaultNull()->end()
            ->scalarNode('roles')->defaultNull()->end()
            ->end()
            ->end()
            ->end();

        $this->addTablesSection($pixieRoot);
        $this->addSourceSection($pixieRoot);
    }

    private function addTablesSection(NodeBuilder $parent, string $key = 'tables'): void
    {
        $tableRoot = $parent->arrayNode($key)
            ->useAttributeAsKey('name')
            ->arrayPrototype()
            ->children()
            ->integerNode('total')->defaultNull()->info("if total is known for progress bar")->end()
            ->booleanNode('has_images')->defaultNull()->info("if images display thumbnail")->end()
            ->scalarNode('extends')->defaultNull()->info("inherits table data from templates")->end()
            ->arrayNode('rules')->scalarPrototype()->end()->end()
            ->scalarNode('workflow')->end()
            ->scalarNode('parent')->defaultNull()->info("related parent table in 1:N")->end()
            ->arrayNode('translatable')->scalarPrototype()->end()->end()
            ->arrayNode('facets')->scalarPrototype()->end()->end()
            ->arrayNode('extras')->scalarPrototype()->end()->end()
            ->arrayNode('uses')->scalarPrototype()->end()->info("use definitions from templates['internal']")->end()
            ->arrayNode('properties')->scalarPrototype()->end()->end()
            ->end()
            ->end();
    }

    private function addSourceSection(NodeBuilder $pixieRoot): void
    {
        $source = $pixieRoot
            ->arrayNode('source')
            ->children();

        $this->addGitSection($source);
        $this->addBuildSection($source, 'build');
        $this->addBuildSection($source, 'make');

        $source
            ->scalarNode('instructions')->end()
            ->scalarNode('units')->defaultValue('cm')->info("mm or cm")->end()
            ->scalarNode('label')->end()
            ->scalarNode('flickr_album_id')->end()
            ->scalarNode('approx_image_count')->end()
            ->scalarNode('license')->info("e.g. 'CC BY-NC-SA'")->end()
            ->scalarNode('moderation')->defaultValue('all')->info("moderate before flickr upload (none|all)")->end()
            ->scalarNode('description')->end()
            ->scalarNode('origin')->isRequired()->info("data source: api, github, musdig")->end()
            ->scalarNode('country')->info("2-letter country code")->end()
            ->scalarNode('locale')->end()
            ->scalarNode('notes')->end()
            ->scalarNode('dir')->info('defaults to <projectDir>/data')->end()
            ->arrayNode('links')
            ->children()
            ->scalarNode('facebook')->end()
            ->scalarNode('twitter')->end()
            ->scalarNode('github')->end()
            ->scalarNode('instagram')->end()
            ->scalarNode('flickr')->end()
            ->scalarNode('api')->end()
            ->scalarNode('contact')->end()
            ->scalarNode('license')->end()
            ->scalarNode('web')->end()
            ->scalarNode('website')->end()
            ->scalarNode('search')->end()
            ->scalarNode('info')->end()
            ->end()
            ->end()
            ->arrayNode('ignore')
            ->beforeNormalization()->ifString()->then(fn($v) => [$v])->end()
            ->scalarPrototype()->end()
            ->end()
            ->scalarNode('include')->end()
            ->end()->end();
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

    private function addBuildSection(NodeBuilder $sourceRoot, string $nodeName = 'build'): void
    {
        $sourceRoot
            ->arrayNode($nodeName)
            ->arrayPrototype()
            ->children()
            ->scalarNode('action')->end()
            ->scalarNode('source')->end()
            ->scalarNode('target')->end()
            ->scalarNode('unzip')->end()
            ->scalarNode('cmd')->end()
            ->end()
            ->end()
            ->end();
    }

    public function getPaths(): array
    {
        $dir = realpath(__DIR__ . '/../assets/');
        assert($dir && file_exists($dir), 'asset path must exist for the assets in ' . __DIR__);
        return [$dir => '@survos/pixie'];
    }
}
