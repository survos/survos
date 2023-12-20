<?php

/*
 * This file is part of the Limenius\LiformBundle package.
 *
 * (c) Limenius <https://github.com/Limenius/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Limenius\LiformBundle;

use Limenius\Liform\Liform;
use Limenius\Liform\LiformInterface;
use Limenius\Liform\Resolver;
use Limenius\Liform\ResolverInterface;
use Limenius\Liform\Transformer\CompoundTransformer;
use Limenius\Liform\Transformer\ExtensionInterface;
use Limenius\LiformBundle\DependencyInjection\Compiler\ExtensionCompilerPass;
use Limenius\LiformBundle\DependencyInjection\Compiler\TransformerCompilerPass;
use Survos\ApiGrid\Service\DatatableService;
use Survos\BarcodeBundle\Service\BarcodeService;
use Survos\BarcodeBundle\Twig\BarcodeTwigExtension;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Nacho Martín <nacho@limenius.com>
 * @author Tac Tacelosky <tacman@gmail.com>
 */
class LimeniusLiformBundle extends AbstractBundle implements CompilerPassInterface
{

    const EXTENSION_TAG = 'liform.extension';

    /**
     * @inheritDoc
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new TransformerCompilerPass());
        $container->addCompilerPass(new ExtensionCompilerPass());
    }

    public function loadExtension(array                 $config,
                                  ContainerConfigurator $container,
                                  ContainerBuilder      $builder): void
    {

        $builder->autowire($id = 'survos_liform', Liform::class)
            ->setPublic(true);
        $container->services()->alias(LiformInterface::class, $id);
//        $container->services()->alias(Liform::class, $serviceId);

        $builder->register('liform', Liform::class)
            ->setPublic(true)
            ->setAutowired(true);

        $builder->register($id = 'liform_resolver', Resolver::class)
            ->setPublic(true)
            ->setAutowired(true);
        $container->services()->alias(ResolverInterface::class, $id);

        $container->import('config/*.xml');
//        $container->import('config/transformers.xml');
//        $container->import('config/services.xml');
//        dd($container->services()->get());


//        dd($config);
//        // you can also add or replace parameters and services
//        $containerConfigurator->parameters()
//            ->set('acme_hello.phrase', $config['phrase'])
//        ;
//
//        if ($config['scream']) {
//            $containerConfigurator->services()
//                ->get('acme_hello.printer')
//                ->class(ScreamingPrinter::class)
//            ;
//        }
    }

    public function configure(DefinitionConfigurator $definition): void
    {
////        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
////        $loader->load('transformers.xml');
////        $loader->load('services.xml');
//
//        // loads config definition from a file
//        $definition->import(__DIR__ . '/../config/transformers.xml');
//
//        // loads config definition from multiple files (when it's too long you can split it)
//        $definition->import('../config/definition/*.php');
//
        // if the configuration is short, consider adding it in this class
        $definition->rootNode()
            ->children()
            ->scalarNode('foo')->defaultValue('bar')->end()
            ->end()
        ;
    }

    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('Limenius\Liform\Liform')) {
            return;
        }

        $liform = $container->getDefinition('Limenius\Liform\Liform');

        foreach ($container->findTaggedServiceIds(self::EXTENSION_TAG) as $id => $attributes) {
            $extension = $container->getDefinition($id);

            if (!isset(class_implements($extension->getClass())[ExtensionInterface::class])) {
                throw new \InvalidArgumentException(sprintf(
                    "The service %s was tagged as a '%s' but does not implement the mandatory %s",
                    $id,
                    self::EXTENSION_TAG,
                    ExtensionInterface::class
                ));
            }

            $liform->addMethodCall('addExtension', [$extension]);
        }
    }
}
