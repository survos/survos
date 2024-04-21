<?php

namespace Survos\MobileBundle;

use Survos\MobileBundle\Event\KnpMenuEvent;
use Survos\CoreBundle\Traits\HasAssetMapperTrait;
use Survos\MobileBundle\Components\MenuComponent;
use Survos\MobileBundle\Menu\MenuService;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SurvosMobileBundle extends AbstractBundle implements CompilerPassInterface
{
    use HasAssetMapperTrait;

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);
        $container->addCompilerPass($this);
    }


    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {

        $builder->register(MenuComponent::class)->setAutowired(true)->setAutoconfigured(true)
            ->setArgument('$menuOptions', []) // $config['menu_options'])
            ->setArgument('$helper', new Reference('knp_menu.helper'))
            ->setArgument('$factory', new Reference('knp_menu.factory'))
            ->setArgument('$eventDispatcher', new Reference('event_dispatcher'));
        ;

        $builder->register(MenuService::class)
            ->setAutowired(true)
            ->setArgument(
                '$authorizationChecker',
                new Reference('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)
            )
            ->setArgument(
                '$security',
                new Reference('security.helper', ContainerInterface::NULL_ON_INVALID_REFERENCE)
            );


        // $builder->setParameter('survos_workflow.direction', $config['direction']);

        // twig classes

        /*
        $definition = $builder
        ->autowire('survos.barcode_twig', BarcodeTwigExtension::class)
        ->addTag('twig.extension');

        $definition->setArgument('$widthFactor', $config['widthFactor']);
        $definition->setArgument('$height', $config['height']);
        $definition->setArgument('$foregroundColor', $config['foregroundColor']);
        */
    }

    public function process(ContainerBuilder $container): void
    {
        if (false === $container->hasDefinition('twig')) {
            assert(false, "missing twig");
            return;
        }
        $def = $container->getDefinition('twig');

        // add the constants to twig to make calling the menu easier.

        $eventClass = (new \ReflectionClass(KnpMenuEvent::class));

        foreach ($eventClass->getConstants() as $name => $value) {
            $def->addMethodCall('addGlobal', [$name, $value]);
        }

    }


        public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->scalarNode('theme')->defaultValue('pagestack')->end()
            ->booleanNode('enabled')->defaultTrue()->end()
            ->end();
    }

    public function getPaths(): array
    {
        $dir = realpath(__DIR__ . '/../assets/');
        assert(file_exists($dir), 'asset path must exist for the assets in ' . __DIR__);
        return [$dir => '@survos/mobile'];
    }



}
