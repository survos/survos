<?php

namespace ContainerONuJ4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPixyControllerService extends Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the public 'Survos\KeyValueBundle\Controller\PixyController' shared autowired service.
     *
     * @return \Survos\KeyValueBundle\Controller\PixyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 6).'/src/Controller/PixyController.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
        include_once \dirname(__DIR__, 6).'/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';

        $container->services['Survos\\KeyValueBundle\\Controller\\PixyController'] = $instance = new \Survos\KeyValueBundle\Controller\PixyController(($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)), ($container->privates['Survos\\KeyValueBundle\\Service\\KeyValueService'] ?? $container->load('getKeyValueServiceService')));

        $instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'http_kernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', true],
        ], [
            'request_stack' => '?',
            'http_kernel' => '?',
            'parameter_bag' => '?',
        ]))->withContext('Survos\\KeyValueBundle\\Controller\\PixyController', $container));

        return $instance;
    }
}