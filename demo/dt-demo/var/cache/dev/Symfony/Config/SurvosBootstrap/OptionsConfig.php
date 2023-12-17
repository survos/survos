<?php

namespace Symfony\Config\SurvosBootstrap;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OptionsConfig 
{
    private $layoutDirection;
    private $offcanvas;
    private $theme;
    private $allowLogin;
    private $_usedProperties = [];

    /**
     * @default 'vertical'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function layoutDirection($value): static
    {
        $this->_usedProperties['layoutDirection'] = true;
        $this->layoutDirection = $value;

        return $this;
    }

    /**
     * Offcanvas position (top,bottom,start,end
     * @default 'end'
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
     * theme name
     * @default 'bs5'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function theme($value): static
    {
        $this->_usedProperties['theme'] = true;
        $this->theme = $value;

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
        if (array_key_exists('layout_direction', $value)) {
            $this->_usedProperties['layoutDirection'] = true;
            $this->layoutDirection = $value['layout_direction'];
            unset($value['layout_direction']);
        }

        if (array_key_exists('offcanvas', $value)) {
            $this->_usedProperties['offcanvas'] = true;
            $this->offcanvas = $value['offcanvas'];
            unset($value['offcanvas']);
        }

        if (array_key_exists('theme', $value)) {
            $this->_usedProperties['theme'] = true;
            $this->theme = $value['theme'];
            unset($value['theme']);
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
        if (isset($this->_usedProperties['layoutDirection'])) {
            $output['layout_direction'] = $this->layoutDirection;
        }
        if (isset($this->_usedProperties['offcanvas'])) {
            $output['offcanvas'] = $this->offcanvas;
        }
        if (isset($this->_usedProperties['theme'])) {
            $output['theme'] = $this->theme;
        }
        if (isset($this->_usedProperties['allowLogin'])) {
            $output['allow_login'] = $this->allowLogin;
        }

        return $output;
    }

}
