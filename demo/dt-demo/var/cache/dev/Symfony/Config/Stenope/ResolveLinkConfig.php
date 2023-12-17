<?php

namespace Symfony\Config\Stenope;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ResolveLinkConfig 
{
    private $route;
    private $slug;
    private $_usedProperties = [];

    /**
     * The name of the route to generate the URL
     * @example show_recipe
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function route($value): static
    {
        $this->_usedProperties['route'] = true;
        $this->route = $value;

        return $this;
    }

    /**
     * The name of the route argument in which will be injected the content's slug
     * @example recipe
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function slug($value): static
    {
        $this->_usedProperties['slug'] = true;
        $this->slug = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('route', $value)) {
            $this->_usedProperties['route'] = true;
            $this->route = $value['route'];
            unset($value['route']);
        }

        if (array_key_exists('slug', $value)) {
            $this->_usedProperties['slug'] = true;
            $this->slug = $value['slug'];
            unset($value['slug']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['route'])) {
            $output['route'] = $this->route;
        }
        if (isset($this->_usedProperties['slug'])) {
            $output['slug'] = $this->slug;
        }

        return $output;
    }

}
