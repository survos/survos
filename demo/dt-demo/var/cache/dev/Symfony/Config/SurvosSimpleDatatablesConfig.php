<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosSimpleDatatablesConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $stimulusController;
    private $perPage;
    private $searchable;
    private $fixedHeight;
    private $_usedProperties = [];

    /**
     * @default '@survos/simple-datatables-bundle/table'
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
     * @default 10
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function perPage($value): static
    {
        $this->_usedProperties['perPage'] = true;
        $this->perPage = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function searchable($value): static
    {
        $this->_usedProperties['searchable'] = true;
        $this->searchable = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function fixedHeight($value): static
    {
        $this->_usedProperties['fixedHeight'] = true;
        $this->fixedHeight = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_simple_datatables';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('stimulus_controller', $value)) {
            $this->_usedProperties['stimulusController'] = true;
            $this->stimulusController = $value['stimulus_controller'];
            unset($value['stimulus_controller']);
        }

        if (array_key_exists('per_page', $value)) {
            $this->_usedProperties['perPage'] = true;
            $this->perPage = $value['per_page'];
            unset($value['per_page']);
        }

        if (array_key_exists('searchable', $value)) {
            $this->_usedProperties['searchable'] = true;
            $this->searchable = $value['searchable'];
            unset($value['searchable']);
        }

        if (array_key_exists('fixed_height', $value)) {
            $this->_usedProperties['fixedHeight'] = true;
            $this->fixedHeight = $value['fixed_height'];
            unset($value['fixed_height']);
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
        if (isset($this->_usedProperties['perPage'])) {
            $output['per_page'] = $this->perPage;
        }
        if (isset($this->_usedProperties['searchable'])) {
            $output['searchable'] = $this->searchable;
        }
        if (isset($this->_usedProperties['fixedHeight'])) {
            $output['fixed_height'] = $this->fixedHeight;
        }

        return $output;
    }

}
