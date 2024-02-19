<?php

/** generated from /home/tac/g/survos/survos/vendor/survos/maker-bundle/templates/skeleton/bundle/src/Bundle.tpl.php */

namespace Survos\Ip2LocationBundle;

use Survos\Ip2LocationBundle\Service\Ip2LocationService;
use Survos\Ip2LocationBundle\Twig\TwigExtension;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SurvosIp2LocationBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {

// Lookup domain information
        $serviceId = 'survos_ip2location_service';
        $container->services()->alias(Ip2LocationService::class, $serviceId);
        $builder->autowire($serviceId, Ip2LocationService::class)
            ->setArgument('$apiKey', $config['api'])
            ->setPublic(true);

        $definition = $builder
        ->autowire('survos.survos_ip2location_twig', TwigExtension::class)
        ->addTag('twig.extension');

    }

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->scalarNode('api_key')->defaultValue(null)->end()
            ->end();
    }
}
