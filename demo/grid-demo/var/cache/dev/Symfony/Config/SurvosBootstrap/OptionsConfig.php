<?php

namespace Symfony\Config\SurvosBootstrap;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $offcanvas;
    private $allowLogin;
    private $_usedProperties = [];

    /**
     * Offcanvas position (top,bottom,start,end
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function offcanvas($value): static
    {
        $this->_usedProperties['offcanvas'] = true;
        $this->offcanvas = $value;

        return $this;
    }

    /**
     * Login route exists
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowLogin($value): static
    {
        $this->_usedProperties['allowLogin'] = true;
        $this->allowLogin = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('offcanvas', $value)) {
            $this->_usedProperties['offcanvas'] = true;
            $this->offcanvas = $value['offcanvas'];
            unset($value['offcanvas']);
        }

        if (array_key_exists('allow_login', $value)) {
            $this->_usedProperties['allowLogin'] = true;
            $this->allowLogin = $value['allow_login'];
            unset($value['allow_login']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['offcanvas'])) {
            $output['offcanvas'] = $this->offcanvas;
        }
        if (isset($this->_usedProperties['allowLogin'])) {
            $output['allow_login'] = $this->allowLogin;
        }

        return $output;
    }

}
