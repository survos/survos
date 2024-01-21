<?php

namespace Survos\PhenxBundle;

use Survos\PhenxBundle\Command\ScrapeCommand;
use Survos\PhenxBundle\Services\ImportService;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SurvosPhenxBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {

        $builder->register('survos_phenx.import_service', ImportService::class)
            ->setArgument('$logger', new Reference('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE))
            ->setArgument('$entityManager', new Reference('doctrine.orm.entity_manager'))
            ->setArgument('$router', new Reference('router'))
            ->setAutowired(true);

        // check https://github.com/zenstruck/console-extra/issues/59

        $definition = $builder->autowire(ScrapeCommand::class)
            ->setArgument('$service', new Reference('survos_phenx.import_service'))
            ->addTag('console.command')
        ;

    }

}
