<?php

namespace Survos\RevealBundle;

use Survos\CoreBundle\Traits\HasAssetMapperTrait;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SurvosRevealBundle extends AbstractBundle
{
    use HasAssetMapperTrait;

    const NAME = 'reveal'; // @todo use this for getPaths()

    /**
     * @param array<mixed> $config
     */
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        // $builder->setParameter('survos_workflow.direction', $config['direction']);
    }

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->booleanNode('enabled')->defaultTrue()->end()
            ->end();
    }

    /**
     * @return array<string>
     */
    public function getPaths(): array
    {
        if ($dir = realpath(__DIR__ . '/../assets/')) {
            if (!file_exists($dir)) {
                throw new \RuntimeException(sprintf('The directory "%s" does not exist.', $dir));
            }
        }
        return [$dir => '@survos/reveal'];
    }
}
