<?php

/** generated from /home/tac/g/survos/survos/vendor/survos/maker-bundle/templates/skeleton/bundle/src/Bundle.tpl.php */

namespace Survos\GeoapifyBundle;

use Survos\GeoapifyBundle\Service\GeoapifyService;
use Survos\GeoapifyBundle\Twig\TwigExtension;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SurvosGeoapifyBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {

// Lookup domain information
        $serviceId = 'survos_geoapify_service';
        $container->services()->alias(GeoapifyService::class, $serviceId);
        $builder->autowire($serviceId, GeoapifyService::class)
            ->setArgument('$apiKey', $config['api_key'])
            ->setArgument('$localhostIp', $config['localhost_ip'])
            ->setArgument('$cache', new Reference('cache.app', ContainerInterface::NULL_ON_INVALID_REFERENCE))
            ->setPublic(true);

        $definition = $builder
        ->autowire('survos.survos_geoapify_twig', TwigExtension::class)
        ->addTag('twig.extension');

    }



    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->scalarNode('api_key')->defaultValue('%env(GEOAPIFY_API_KEY)%')->end()
            ->scalarNode('localhost_ip')->defaultValue('8.8.8.8')->end() // Google DNS
            ->end();
    }
}
