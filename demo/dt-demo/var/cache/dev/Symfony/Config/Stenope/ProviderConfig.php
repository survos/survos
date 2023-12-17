<?php

namespace Symfony\Config\Stenope;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ProviderConfig'.\DIRECTORY_SEPARATOR.'ConfigConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProviderConfig 
{
    private $type;
    private $config;
    private $_usedProperties = [];

    /**
     * The provider type used to fetch contents
     * @example files
     * @default 'files'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;

        return $this;
    }

    public function config(array $value = []): \Symfony\Config\Stenope\ProviderConfig\ConfigConfig
    {
        if (null === $this->config) {
            $this->_usedProperties['config'] = true;
            $this->config = new \Symfony\Config\Stenope\ProviderConfig\ConfigConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "config()" has already been initialized. You cannot pass values the second time you call config().');
        }

        return $this->config;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }

        if (array_key_exists('config', $value)) {
            $this->_usedProperties['config'] = true;
            $this->config = new \Symfony\Config\Stenope\ProviderConfig\ConfigConfig($value['config']);
            unset($value['config']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['config'])) {
            $output['config'] = $this->config->toArray();
        }

        return $output;
    }

}
