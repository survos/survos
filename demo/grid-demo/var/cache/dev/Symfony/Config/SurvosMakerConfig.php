<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosMakerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $templatePath;
    private $vendor;
    private $bundleName;
    private $relativeBundlePath;
    private $_usedProperties = [];

    /**
     * @default '/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/maker-bundle/src/../templates/skeleton/'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function templatePath($value): static
    {
        $this->_usedProperties['templatePath'] = true;
        $this->templatePath = $value;

        return $this;
    }

    /**
     * @default 'Survos'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function vendor($value): static
    {
        $this->_usedProperties['vendor'] = true;
        $this->vendor = $value;

        return $this;
    }

    /**
     * @default 'FooBundle'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bundleName($value): static
    {
        $this->_usedProperties['bundleName'] = true;
        $this->bundleName = $value;

        return $this;
    }

    /**
     * @default 'packages'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function relativeBundlePath($value): static
    {
        $this->_usedProperties['relativeBundlePath'] = true;
        $this->relativeBundlePath = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_maker';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('template_path', $value)) {
            $this->_usedProperties['templatePath'] = true;
            $this->templatePath = $value['template_path'];
            unset($value['template_path']);
        }

        if (array_key_exists('vendor', $value)) {
            $this->_usedProperties['vendor'] = true;
            $this->vendor = $value['vendor'];
            unset($value['vendor']);
        }

        if (array_key_exists('bundle_name', $value)) {
            $this->_usedProperties['bundleName'] = true;
            $this->bundleName = $value['bundle_name'];
            unset($value['bundle_name']);
        }

        if (array_key_exists('relative_bundle_path', $value)) {
            $this->_usedProperties['relativeBundlePath'] = true;
            $this->relativeBundlePath = $value['relative_bundle_path'];
            unset($value['relative_bundle_path']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['templatePath'])) {
            $output['template_path'] = $this->templatePath;
        }
        if (isset($this->_usedProperties['vendor'])) {
            $output['vendor'] = $this->vendor;
        }
        if (isset($this->_usedProperties['bundleName'])) {
            $output['bundle_name'] = $this->bundleName;
        }
        if (isset($this->_usedProperties['relativeBundlePath'])) {
            $output['relative_bundle_path'] = $this->relativeBundlePath;
        }

        return $output;
    }

}
