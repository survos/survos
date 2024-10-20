<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 5).'/vendor/autoload.php';
(require __DIR__.'/Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer.php')->set(\Container5ICl95i\Survos_KeyValueBundle_Tests_Fixtures_TestKernelTestDebugContainer::class, null);
require __DIR__.'/Container5ICl95i/RequestPayloadValueResolverGhostDa4cc11.php';
require __DIR__.'/Container5ICl95i/getTest_ServiceContainerService.php';
require __DIR__.'/Container5ICl95i/getTest_PrivateServicesLocatorService.php';
require __DIR__.'/Container5ICl95i/getTest_Client_HistoryService.php';
require __DIR__.'/Container5ICl95i/getTest_Client_CookiejarService.php';
require __DIR__.'/Container5ICl95i/getTest_ClientService.php';
require __DIR__.'/Container5ICl95i/getSluggerService.php';
require __DIR__.'/Container5ICl95i/getServicesResetterService.php';
require __DIR__.'/Container5ICl95i/getSecrets_VaultService.php';
require __DIR__.'/Container5ICl95i/getSecrets_EnvVarLoaderService.php';
require __DIR__.'/Container5ICl95i/getSecrets_DecryptionKeyService.php';
require __DIR__.'/Container5ICl95i/getPropertyInfo_ReflectionExtractorService.php';
require __DIR__.'/Container5ICl95i/getPropertyAccessorService.php';
require __DIR__.'/Container5ICl95i/getParameterBagService.php';
require __DIR__.'/Container5ICl95i/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/Container5ICl95i/getErrorControllerService.php';
require __DIR__.'/Container5ICl95i/getDebug_FileLinkFormatterService.php';
require __DIR__.'/Container5ICl95i/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/Container5ICl95i/getContainer_GetenvService.php';
require __DIR__.'/Container5ICl95i/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/Container5ICl95i/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/Container5ICl95i/getContainer_EnvVarProcessorService.php';
require __DIR__.'/Container5ICl95i/getCache_SystemClearerService.php';
require __DIR__.'/Container5ICl95i/getCache_SystemService.php';
require __DIR__.'/Container5ICl95i/getCache_PropertyAccessService.php';
require __DIR__.'/Container5ICl95i/getCache_GlobalClearerService.php';
require __DIR__.'/Container5ICl95i/getCache_DefaultMarshallerService.php';
require __DIR__.'/Container5ICl95i/getCache_AppClearerService.php';
require __DIR__.'/Container5ICl95i/getCache_AppService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_VariadicService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_SessionService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_ServiceService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_RequestAttributeService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_RequestService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_DefaultService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_DatetimeService.php';
require __DIR__.'/Container5ICl95i/getArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/Container5ICl95i/getSqliteServiceService.php';
require __DIR__.'/Container5ICl95i/getPixyImportServiceService.php';
require __DIR__.'/Container5ICl95i/getKeyValueServiceService.php';
require __DIR__.'/Container5ICl95i/getCsvHeaderEventListenerService.php';
require __DIR__.'/Container5ICl95i/getPixyControllerService.php';
require __DIR__.'/Container5ICl95i/get_ServiceLocator_TDsuIEService.php';
require __DIR__.'/Container5ICl95i/get_ServiceLocator_PkAnQ8fService.php';
require __DIR__.'/Container5ICl95i/getPixyControllerimportService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/Container5ICl95i/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Survos\KeyValueBundle\SurvosKeyValueBundle';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Survos\KeyValueBundle\Controller\PixyController';
$classes[] = 'Survos\KeyValueBundle\EventListener\CsvHeaderEventListener';
$classes[] = 'Survos\KeyValueBundle\Service\KeyValueService';
$classes[] = 'Survos\KeyValueBundle\Service\PixyImportService';
$classes[] = 'Survos\KeyValueBundle\Service\SqliteService';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\StaticEnvVarLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Bundle\FrameworkBundle\KernelBrowser';
$classes[] = 'Symfony\Component\BrowserKit\CookieJar';
$classes[] = 'Symfony\Component\BrowserKit\History';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Test\TestContainer';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';

$preloaded = Preloader::preload($classes);
