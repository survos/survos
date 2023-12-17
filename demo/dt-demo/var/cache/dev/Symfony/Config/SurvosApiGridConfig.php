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
    private $meiliHost;
    private $meiliKey;
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
     * @default 'http://127.0.0.1:7700'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function meiliHost($value): static
    {
        $this->_usedProperties['meiliHost'] = true;
        $this->meiliHost = $value;

        return $this;
    }

    /**
     * @default 'masterKey'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function meiliKey($value): static
    {
        $this->_usedProperties['meiliKey'] = true;
        $this->meiliKey = $value;

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

        if (array_key_exists('meiliHost', $value)) {
            $this->_usedProperties['meiliHost'] = true;
            $this->meiliHost = $value['meiliHost'];
            unset($value['meiliHost']);
        }

        if (array_key_exists('meiliKey', $value)) {
            $this->_usedProperties['meiliKey'] = true;
            $this->meiliKey = $value['meiliKey'];
            unset($value['meiliKey']);
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
        if (isset($this->_usedProperties['meiliHost'])) {
            $output['meiliHost'] = $this->meiliHost;
        }
        if (isset($this->_usedProperties['meiliKey'])) {
            $output['meiliKey'] = $this->meiliKey;
        }

        return $output;
    }

}
