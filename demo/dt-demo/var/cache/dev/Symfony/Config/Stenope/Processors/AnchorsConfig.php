<?php

namespace Symfony\Config\Stenope\Processors;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AnchorsConfig 
{
    private $enabled;
    private $selector;
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
     * @default 'h1, h2, h3, h4, h5'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function selector($value): static
    {
        $this->_usedProperties['selector'] = true;
        $this->selector = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('selector', $value)) {
            $this->_usedProperties['selector'] = true;
            $this->selector = $value['selector'];
            unset($value['selector']);
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
        if (isset($this->_usedProperties['selector'])) {
            $output['selector'] = $this->selector;
        }

        return $output;
    }

}
