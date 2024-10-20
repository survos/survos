<?php

namespace ContainerONuJ4ef;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvHeaderEventListenerService extends Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the private 'Survos\KeyValueBundle\EventListener\CsvHeaderEventListener' shared autowired service.
     *
     * @return \Survos\KeyValueBundle\EventListener\CsvHeaderEventListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/src/EventListener/CsvHeaderEventListener.php';

        return $container->privates['Survos\\KeyValueBundle\\EventListener\\CsvHeaderEventListener'] = new \Survos\KeyValueBundle\EventListener\CsvHeaderEventListener();
    }
}
