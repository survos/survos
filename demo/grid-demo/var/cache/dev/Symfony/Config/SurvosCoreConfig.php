<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosCoreConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $direction;
    private $baseLayout;
    private $entities;
    private $enabled;
    private $_usedProperties = [];

    /**
     * @default 'LR'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function direction($value): static
    {
        $this->_usedProperties['direction'] = true;
        $this->direction = $value;

        return $this;
    }

    /**
     * @default 'base.html.twig'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function baseLayout($value): static
    {
        $this->_usedProperties['baseLayout'] = true;
        $this->baseLayout = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function entities(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['entities'] = true;
        $this->entities = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_core';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('direction', $value)) {
            $this->_usedProperties['direction'] = true;
            $this->direction = $value['direction'];
            unset($value['direction']);
        }

        if (array_key_exists('base_layout', $value)) {
            $this->_usedProperties['baseLayout'] = true;
            $this->baseLayout = $value['base_layout'];
            unset($value['base_layout']);
        }

        if (array_key_exists('entities', $value)) {
            $this->_usedProperties['entities'] = true;
            $this->entities = $value['entities'];
            unset($value['entities']);
        }

        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['direction'])) {
            $output['direction'] = $this->direction;
        }
        if (isset($this->_usedProperties['baseLayout'])) {
            $output['base_layout'] = $this->baseLayout;
        }
        if (isset($this->_usedProperties['entities'])) {
            $output['entities'] = $this->entities;
        }
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }

        return $output;
    }

}
