<?php

namespace Container5ICl95i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSqliteServiceService extends Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer
{
    /**
     * Gets the public 'Survos\KeyValueBundle\Service\SqliteService' shared autowired service.
     *
     * @return \Survos\KeyValueBundle\Service\SqliteService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 6).'/src/Service/SqliteService.php';

        return $container->services['Survos\\KeyValueBundle\\Service\\SqliteService'] = new \Survos\KeyValueBundle\Service\SqliteService();
    }
}
