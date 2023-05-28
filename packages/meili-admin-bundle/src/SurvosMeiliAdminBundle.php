<?php

namespace Survos\MeiliAdminBundle;

use Survos\MeiliAdminBundle\Controller\MeiliAdminController;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SurvosMeiliAdminBundle extends AbstractBundle
{
    protected string $extensionAlias = 'survos_meili_admin';

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {

        $builder->autowire(MeiliAdminController::class)
            ->setAutoconfigured(true)
            ->setPublic(true)
        ;

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

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->scalarNode('direction')->defaultValue('LR')->end()
            ->scalarNode('base_layout')->defaultValue('base.html.twig')->end()
            ->arrayNode('entities')
            ->scalarPrototype()
            ->end()->end()
            ->booleanNode('enabled')->defaultTrue()->end()
//            ->integerNode('min_sunshine')->defaultValue(3)->end()
            ->end();
    }

}