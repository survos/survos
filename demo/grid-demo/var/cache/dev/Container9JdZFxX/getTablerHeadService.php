<?php

namespace Container9JdZFxX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTablerHeadService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Survos\BootstrapBundle\Twig\Components\TablerHead' autowired service.
     *
     * @return \Survos\BootstrapBundle\Twig\Components\TablerHead
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/survos/bootstrap-bundle/src/Twig/Components/TablerHead.php';

        $container->factories['service_container']['Survos\\BootstrapBundle\\Twig\\Components\\TablerHead'] = function ($container) {
            return new \Survos\BootstrapBundle\Twig\Components\TablerHead();
        };

        return $container->factories['service_container']['Survos\\BootstrapBundle\\Twig\\Components\\TablerHead']($container);
    }
}