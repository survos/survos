<?php
/** generated from /home/tac/ca/survos/packages/maker-bundle/templates/skeleton/bundle/src/Bundle.tpl.php */

namespace Survos\LibreTranslateBundle;

use Jefs42\LibreTranslate;
use Survos\LibreTranslateBundle\Api\FrontendApi;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SurvosLibreTranslateBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        // $builder->setParameter('survos_workflow.direction', $config['direction']);

                $builder->register(FrontendApi::class)
                ->setAutowired(true)
                ->setPublic(true);

        $serviceId = 'survos_libretranslate.libretranslate__service';
        $container->services()->alias(LibreTranslate::class, $serviceId);
        $definition = $builder->autowire($serviceId, LibreTranslate::class)
            ->setPublic(true);
        $definition->setArgument('$host', $config['host']);
        $definition->setArgument('$port', $config['port']);
        if ($apiKey = $config['apikey']) {
            $definition->addMethodCall('setApiKey', [$apiKey]);
        }
        if ($source = $config['sourceLanguage']) {
            $definition->addMethodCall('setSource', [$source]);
        }

        // twig classes

        /*
        $definition = $builder
        ->autowire('survos.barcode_twig', BarcodeTwigExtension::class)
        ->addTag('twig.extension');

        $definition->setArgument('$widthFactor', $config['widthFactor']);
        $definition->setArgument('$height', $config['height']);
        $definition->setArgument('$foregroundColor', $config['foregroundColor']);
        */

    }

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->scalarNode('host')->defaultValue('http://127.0.0.1')->end()
            ->scalarNode('port')->defaultValue('5000')->end()
            ->scalarNode('apikey')->defaultValue(null)->end()
            ->scalarNode('sourceLanguage')->defaultValue(null)->end()
            ->scalarNode('targetLanguage')->defaultValue(null)->end()
            ->booleanNode('canManage')->defaultTrue()->end()
//            ->integerNode('min_sunshine')->defaultValue(3)->end()
            ->end();
    }

}
