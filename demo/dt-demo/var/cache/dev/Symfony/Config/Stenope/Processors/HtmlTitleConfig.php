<?php

namespace Symfony\Config\Stenope\Processors;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HtmlTitleConfig 
{
    private $enabled;
    private $property;
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
     * Property where to inject the title in your model
     * @default 'title'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function property($value): static
    {
        $this->_usedProperties['property'] = true;
        $this->property = $value;

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

        return $output;
    }

}
