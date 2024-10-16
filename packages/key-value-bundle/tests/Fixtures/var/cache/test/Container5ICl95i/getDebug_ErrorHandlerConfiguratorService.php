<?php

namespace Container5ICl95i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_ErrorHandlerConfiguratorService extends Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the public 'debug.error_handler_configurator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/vendor/symfony/http-kernel/Debug/ErrorHandlerConfigurator.php';

        return $container->services['debug.error_handler_configurator'] = new \Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator(($container->privates['logger'] ?? self::getLoggerService($container)), NULL, -1, true, true, NULL);
    }
}
