<?php

namespace Survos\WebCliBundle;

use Survos\WebCliBundle\Twig\TwigExtension;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SurvosWebCliBundle extends AbstractBundle
{
    protected string $extensionAlias = 'survos_cli';

    /**
     * @param array<mixed> $config
     */
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $definition = $builder
            ->autowire('survos.cli_twig', \Survos\WebCliBundle\Twig\TwigExtension::class)
            ->addTag('twig.extension')
            ->setArgument('$config', $config)
        ;

        //        $definition->setArgument('$seed', $config['seed']);
        //        $definition->setArgument('$prefix', $config['function_prefix']);

        $builder->autowire(SurvosBuildDocsCommand::class)
            ->setArgument('$config', $config)
            ->setArgument('$twig', new Reference('twig'))
            ->addTag('console.command')
        ;

        $definition
            ->addMethodCall('setTwig', [new Reference('twig')]);
    }

    public function configure(DefinitionConfigurator $definition): void
    {
        // since the configuration is short, we can add it here
        $definition->rootNode()
            ->children()
            ->scalarNode('user_provider')->defaultValue(null)->end()
            ->scalarNode('user_class')->defaultValue("App\\Entity\\User")->end()
            ->end();
        ;
    }
}
