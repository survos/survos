<?php

namespace Container57M1xJi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSurvosScraper_CacheScraperServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'survos_scraper.cache_scraper_service' shared autowired service.
     *
     * @return \Survos\Scraper\Service\CacheScraperService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/survos/scraper-bundle/src/Service/CacheScraperService.php';

        return $container->services['survos_scraper.cache_scraper_service'] = new \Survos\Scraper\Service\CacheScraperService('/tmp/cache', ($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)), ($container->privates['monolog.logger'] ?? self::getMonolog_LoggerService($container)));
    }
}