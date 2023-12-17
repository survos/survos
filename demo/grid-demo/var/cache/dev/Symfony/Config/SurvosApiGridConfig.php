<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosApiGridConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $stimulusController;
    private $widthFactor;
    private $height;
    private $foregroundColor;
    private $_usedProperties = [];

    /**
     * @default '@survos/api-grid-bundle/api_grid'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function stimulusController($value): static
    {
        $this->_usedProperties['stimulusController'] = true;
        $this->stimulusController = $value;

        return $this;
    }

    /**
     * @default 2
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function widthFactor($value): static
    {
        $this->_usedProperties['widthFactor'] = true;
        $this->widthFactor = $value;

        return $this;
    }

    /**
     * @default 30
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function height($value): static
    {
        $this->_usedProperties['height'] = true;
        $this->height = $value;

        return $this;
    }

    /**
     * @default 'green'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function foregroundColor($value): static
    {
        $this->_usedProperties['foregroundColor'] = true;
        $this->foregroundColor = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_api_grid';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('stimulus_controller', $value)) {
            $this->_usedProperties['stimulusController'] = true;
            $this->stimulusController = $value['stimulus_controller'];
            unset($value['stimulus_controller']);
        }

        if (array_key_exists('widthFactor', $value)) {
            $this->_usedProperties['widthFactor'] = true;
            $this->widthFactor = $value['widthFactor'];
            unset($value['widthFactor']);
        }

        if (array_key_exists('height', $value)) {
            $this->_usedProperties['height'] = true;
            $this->height = $value['height'];
            unset($value['height']);
        }

        if (array_key_exists('foregroundColor', $value)) {
            $this->_usedProperties['foregroundColor'] = true;
            $this->foregroundColor = $value['foregroundColor'];
            unset($value['foregroundColor']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['stimulusController'])) {
            $output['stimulus_controller'] = $this->stimulusController;
        }
        if (isset($this->_usedProperties['widthFactor'])) {
            $output['widthFactor'] = $this->widthFactor;
        }
        if (isset($this->_usedProperties['height'])) {
            $output['height'] = $this->height;
        }
        if (isset($this->_usedProperties['foregroundColor'])) {
            $output['foregroundColor'] = $this->foregroundColor;
        }

        return $output;
    }

}
