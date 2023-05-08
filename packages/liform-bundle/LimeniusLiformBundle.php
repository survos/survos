<?php

/*
 * This file is part of the Limenius\LiformBundle package.
 *
 * (c) Limenius <https://github.com/Limenius/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Limenius\LiformBundle;

use Limenius\Liform\Liform;
use Limenius\Liform\Resolver;
use Limenius\LiformBundle\DependencyInjection\Compiler\ExtensionCompilerPass;
use Limenius\LiformBundle\DependencyInjection\Compiler\TransformerCompilerPass;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

/**
 * @author Nacho Martín <nacho@limenius.com>
 */
class LimeniusLiformBundle extends AbstractBundle
{

    public function configure(DefinitionConfigurator $definition): void
    {
        dd($definition);
        // loads config definition from a file
        $definition->import('../config/definition.php');

        // loads config definition from multiple files (when it's too long you can split it)
        $definition->import('../config/definition/*.php');

        // if the configuration is short, consider adding it in this class
        $definition->rootNode()
            ->children()
            ->scalarNode('foo')->defaultValue('bar')->end()
            ->end()
        ;
    }
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        // $builder->setParameter('survos_workflow.direction', $config['direction']);

        $resolverId = 'survos.liform_resolver';
        $builder
            ->autowire($resolverId, Resolver::class)
            ->setPublic(true)
        ;

        $liform_service_id = 'survos.liform';
        $builder
            ->autowire($liform_service_id, Liform::class)
            ->setPublic(true)
            ->setArgument('$resolver', new Reference($resolverId))
        ;
        $container->services()->alias(Liform::class, $liform_service_id);
        dd(Liform::class);


//        $grid_group_service_id = 'survos.grid_group_csv_database';
//        $builder
//            ->autowire($grid_group_service_id, CsvDatabase::class)
//            ->setPublic(true)
//        ;
//
//        $grid_group_service_id = 'survos.grid_group_csv_adapter';
//        $builder
//            ->autowire($grid_group_service_id, CsvCacheAdapter::class)
//            ->setPublic(true)
//            ->setAutoconfigured(true)
//        ;

        // @todo: set the logger


    }

    /**
     * @inheritDoc
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new TransformerCompilerPass());
        $container->addCompilerPass(new ExtensionCompilerPass());
    }
}
