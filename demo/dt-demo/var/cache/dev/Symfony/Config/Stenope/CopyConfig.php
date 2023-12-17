<?php

namespace Symfony\Config\Stenope;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class CopyConfig 
{
    private $src;
    private $dest;
    private $excludes;
    private $failIfMissing;
    private $ignoreDotFiles;
    private $_usedProperties = [];

    /**
     * Full source path to the file/dir to copy
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function src($value): static
    {
        $this->_usedProperties['src'] = true;
        $this->src = $value;

        return $this;
    }

    /**
     * Destination path relative to the configured build_dir. If null, defaults to the same name as source.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dest($value): static
    {
        $this->_usedProperties['dest'] = true;
        $this->dest = $value;

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

    /**
     * Make the build fail if the source file is missing
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failIfMissing($value): static
    {
        $this->_usedProperties['failIfMissing'] = true;
        $this->failIfMissing = $value;

        return $this;
    }

    /**
     * Whether to ignore or not dotfiles
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function ignoreDotFiles($value): static
    {
        $this->_usedProperties['ignoreDotFiles'] = true;
        $this->ignoreDotFiles = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('src', $value)) {
            $this->_usedProperties['src'] = true;
            $this->src = $value['src'];
            unset($value['src']);
        }

        if (array_key_exists('dest', $value)) {
            $this->_usedProperties['dest'] = true;
            $this->dest = $value['dest'];
            unset($value['dest']);
        }

        if (array_key_exists('excludes', $value)) {
            $this->_usedProperties['excludes'] = true;
            $this->excludes = $value['excludes'];
            unset($value['excludes']);
        }

        if (array_key_exists('fail_if_missing', $value)) {
            $this->_usedProperties['failIfMissing'] = true;
            $this->failIfMissing = $value['fail_if_missing'];
            unset($value['fail_if_missing']);
        }

        if (array_key_exists('ignore_dot_files', $value)) {
            $this->_usedProperties['ignoreDotFiles'] = true;
            $this->ignoreDotFiles = $value['ignore_dot_files'];
            unset($value['ignore_dot_files']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['src'])) {
            $output['src'] = $this->src;
        }
        if (isset($this->_usedProperties['dest'])) {
            $output['dest'] = $this->dest;
        }
        if (isset($this->_usedProperties['excludes'])) {
            $output['excludes'] = $this->excludes;
        }
        if (isset($this->_usedProperties['failIfMissing'])) {
            $output['fail_if_missing'] = $this->failIfMissing;
        }
        if (isset($this->_usedProperties['ignoreDotFiles'])) {
            $output['ignore_dot_files'] = $this->ignoreDotFiles;
        }

        return $output;
    }

}
