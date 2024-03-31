<?php
namespace Survos\LandingBundle;

use Survos\AuthBundle\Services\AuthService;
use Survos\LandingBundle\Controller\LandingController;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SurvosLandingBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void

    /**
     * @param array<mixed> $config
     */
    {
        $builder->autowire(LandingService::class)
            ->setPublic(true)
            ->setAutowired(true);

        $definition = $builder->autowire(LandingController::class)
            ->setArgument('$landingService', new Reference(LandingService::class))
//            ->setArgument('$registry', new Reference('doctrine'))
//            ->setArgument('$router', new Reference('router'))
//            ->setArgument('$userClass', $config['user_class'])
//            ->setArgument('$entityManager', new Reference('doctrine.orm.entity_manager'))
////            ->setArgument('$userProvider', new Reference('doctrine.orm.security.user.provider'))
//            ->setArgument('$clientRegistry', new Reference('knpu.oauth2.registry'))
            ->addTag('container.service_subscriber')
            ->addTag('controller.service_arguments')
            ->setPublic(true);


    }
    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->arrayNode('entities')
            ->normalizeKeys(false)
            ->defaultValue(array())
            ->info('The list of entities to manage in the administration zone.')
            ->prototype('variable')
            ->end()
            ->end()
        ;

    }

}
