<?php

namespace Symfony\Config\Stenope\ProviderConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class ConfigConfig 
{
    private $path;
    private $depth;
    private $patterns;
    private $excludes;
    private $_usedProperties = [];
    private $_extraKeys;

    /**
     * Required: The directory path for "files" providers
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function path($value): static
    {
        $this->_usedProperties['path'] = true;
        $this->path = $value;

        return $this;
    }

    /**
     *     The directory depth for "files" providers.
        See "Symfony\Component\Finder\Finder::depth()"
        https://symfony.com/doc/current/components/finder.html#directory-depth
     * @example < 2
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function depth($value): static
    {
        $this->_usedProperties['depth'] = true;
        $this->depth = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function patterns(mixed $value): static
    {
        $this->_usedProperties['patterns'] = true;
        $this->patterns = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function excludes(mixed $value): static
    {
        $this->_usedProperties['excludes'] = true;
        $this->excludes = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('path', $value)) {
            $this->_usedProperties['path'] = true;
            $this->path = $value['path'];
            unset($value['path']);
        }

        if (array_key_exists('depth', $value)) {
            $this->_usedProperties['depth'] = true;
            $this->depth = $value['depth'];
            unset($value['depth']);
        }

        if (array_key_exists('patterns', $value)) {
            $this->_usedProperties['patterns'] = true;
            $this->patterns = $value['patterns'];
            unset($value['patterns']);
        }

        if (array_key_exists('excludes', $value)) {
            $this->_usedProperties['excludes'] = true;
            $this->excludes = $value['excludes'];
            unset($value['excludes']);
        }

        $this->_extraKeys = $value;

    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['path'])) {
            $output['path'] = $this->path;
        }
        if (isset($this->_usedProperties['depth'])) {
            $output['depth'] = $this->depth;
        }
        if (isset($this->_usedProperties['patterns'])) {
            $output['patterns'] = $this->patterns;
        }
        if (isset($this->_usedProperties['excludes'])) {
            $output['excludes'] = $this->excludes;
        }

        return $output + $this->_extraKeys;
    }

    /**
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function set(string $key, mixed $value): static
    {
        $this->_extraKeys[$key] = $value;

        return $this;
    }

}
