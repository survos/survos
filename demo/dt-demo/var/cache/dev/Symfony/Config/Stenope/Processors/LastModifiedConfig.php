<?php

namespace Symfony\Config\Stenope\Processors;

require_once __DIR__.\DIRECTORY_SEPARATOR.'LastModified'.\DIRECTORY_SEPARATOR.'GitConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class LastModifiedConfig 
{
    private $enabled;
    private $property;
    private $git;
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
     * Property where to inject the last modified date of the content according to its provider.
     * @default 'lastModified'
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
     * Whether to attempt using Git to get the last modified date of the content according to commits.
     * @default {"enabled":true,"path":"git"}
    */
    public function git(array $value = []): \Symfony\Config\Stenope\Processors\LastModified\GitConfig
    {
        if (null === $this->git) {
            $this->_usedProperties['git'] = true;
            $this->git = new \Symfony\Config\Stenope\Processors\LastModified\GitConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "git()" has already been initialized. You cannot pass values the second time you call git().');
        }

        return $this->git;
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

        if (array_key_exists('git', $value)) {
            $this->_usedProperties['git'] = true;
            $this->git = new \Symfony\Config\Stenope\Processors\LastModified\GitConfig($value['git']);
            unset($value['git']);
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
        if (isset($this->_usedProperties['git'])) {
            $output['git'] = $this->git->toArray();
        }

        return $output;
    }

}
