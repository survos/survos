<?php

namespace Symfony\Config\Stenope\Processors;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TocConfig 
{
    private $enabled;
    private $property;
    private $minDepth;
    private $maxDepth;
    private $_usedProperties = [];

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

    /**
     * Property used to configure and inject the TableOfContent object in your model
     * @default 'tableOfContent'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function property($value): static
    {
        $this->_usedProperties['property'] = true;
        $this->property = $value;

        return $this;
    }

    /**
     * @default 2
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function minDepth($value): static
    {
        $this->_usedProperties['minDepth'] = true;
        $this->minDepth = $value;

        return $this;
    }

    /**
     * @default 6
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxDepth($value): static
    {
        $this->_usedProperties['maxDepth'] = true;
        $this->maxDepth = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('property', $value)) {
            $this->_usedProperties['property'] = true;
            $this->property = $value['property'];
            unset($value['property']);
        }

        if (array_key_exists('min_depth', $value)) {
            $this->_usedProperties['minDepth'] = true;
            $this->minDepth = $value['min_depth'];
            unset($value['min_depth']);
        }

        if (array_key_exists('max_depth', $value)) {
            $this->_usedProperties['maxDepth'] = true;
            $this->maxDepth = $value['max_depth'];
            unset($value['max_depth']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['property'])) {
            $output['property'] = $this->property;
        }
        if (isset($this->_usedProperties['minDepth'])) {
            $output['min_depth'] = $this->minDepth;
        }
        if (isset($this->_usedProperties['maxDepth'])) {
            $output['max_depth'] = $this->maxDepth;
        }

        return $output;
    }

}
