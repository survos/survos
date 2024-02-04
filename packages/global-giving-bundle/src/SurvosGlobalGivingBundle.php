<?php

/** generated from /home/tac/g/survos/survos/packages/maker-bundle/templates/skeleton/bundle/src/Bundle.tpl.php */

namespace Survos\GlobalGivingBundle;

use Survos\BarcodeBundle\Service\BarcodeService;
use Survos\GlobalGivingBundle\Service\GlobalGivingService;
use Survos\GlobalGivingBundle\Twig\TwigExtension;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SurvosGlobalGivingBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {

//        $serviceId = 'survos_barcode.barcode_service';
//        $container->services()->alias(BarcodeService::class, $serviceId);
        $builder->autowire(GlobalGivingService::class)
            ->setPublic(true)
            ->setArgument('$httpClient', new Reference('http_client'))
            ->setArgument('$apiKey', $config['api_key']);
        // $builder->setParameter('survos_workflow.direction', $config['direction']);

        // twig classes

        $definition = $builder
            ->autowire(TwigExtension::class)
            ->setArgument('$config', $config)
            ->addTag('twig.extension');

        /*
        $definition->setArgument('$widthFactor', $config['widthFactor']);
        $definition->setArgument('$height', $config['height']);
        $definition->setArgument('$foregroundColor', $config['foregroundColor']);
        */
    }

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->scalarNode('api_key')->defaultValue('')->end()
            ->end();
    }
}
