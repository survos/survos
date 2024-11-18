<?php

namespace Survos\FakerBundle;

use Survos\FakerBundle\Twig\TwigExtension;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SurvosFakerBundle extends AbstractBundle
{
    protected string $extensionAlias = 'survos_faker';

    /**
     * @param array<mixed> $config
     */
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $definition = $builder
            ->autowire('survos.faker_twig', TwigExtension::class)
            ->addTag('twig.extension');

        $definition->setArgument('$seed', $config['seed']);
        $definition->setArgument('$prefix', $config['function_prefix']);
    }

    public function configure(DefinitionConfigurator $definition): void
    {
        // since the configuration is short, we can add it here
        $definition->rootNode()
            ->children()
            ->scalarNode('seed')->info('set to some value to get the same fake values on reload')->defaultValue(null)->end()
            ->scalarNode('function_prefix')->defaultValue('')->end()
            ->end();
        ;
    }
}
