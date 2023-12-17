<?php

namespace Container57M1xJi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTablerPageHeaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Survos\BootstrapBundle\Twig\Components\TablerPageHeader' autowired service.
     *
     * @return \Survos\BootstrapBundle\Twig\Components\TablerPageHeader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/survos/bootstrap-bundle/src/Twig/Components/TablerPageHeader.php';

        $container->factories['service_container']['Survos\\BootstrapBundle\\Twig\\Components\\TablerPageHeader'] = function ($container) {
            return new \Survos\BootstrapBundle\Twig\Components\TablerPageHeader();
        };

        return $container->factories['service_container']['Survos\\BootstrapBundle\\Twig\\Components\\TablerPageHeader']($container);
    }
}