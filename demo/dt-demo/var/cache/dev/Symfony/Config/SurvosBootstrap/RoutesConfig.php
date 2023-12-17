<?php

namespace Symfony\Config\SurvosBootstrap;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RoutesConfig 
{
    private $home;
    private $login;
    private $homepage;
    private $logout;
    private $offcanvas;
    private $register;
    private $_usedProperties = [];

    /**
     * name of the homepage route
     * @default 'app_homepage'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function home($value): static
    {
        $this->_usedProperties['home'] = true;
        $this->home = $value;

        return $this;
    }

    /**
     * name of the login
     * @default 'app_login'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function login($value): static
    {
        $this->_usedProperties['login'] = true;
        $this->login = $value;

        return $this;
    }

    /**
     * name of the home routes
     * @default 'app_homepage'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function homepage($value): static
    {
        $this->_usedProperties['homepage'] = true;
        $this->homepage = $value;

        return $this;
    }

    /**
     * name of the logout route
     * @default 'app_logout'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logout($value): static
    {
        $this->_usedProperties['logout'] = true;
        $this->logout = $value;

        return $this;
    }

    /**
     * name of the offcanvas route (e.g. a settings sidebar)
     * @default 'app_settings'
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
     * name of the register route
     * @default 'app_register'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function register($value): static
    {
        $this->_usedProperties['register'] = true;
        $this->register = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('home', $value)) {
            $this->_usedProperties['home'] = true;
            $this->home = $value['home'];
            unset($value['home']);
        }

        if (array_key_exists('login', $value)) {
            $this->_usedProperties['login'] = true;
            $this->login = $value['login'];
            unset($value['login']);
        }

        if (array_key_exists('homepage', $value)) {
            $this->_usedProperties['homepage'] = true;
            $this->homepage = $value['homepage'];
            unset($value['homepage']);
        }

        if (array_key_exists('logout', $value)) {
            $this->_usedProperties['logout'] = true;
            $this->logout = $value['logout'];
            unset($value['logout']);
        }

        if (array_key_exists('offcanvas', $value)) {
            $this->_usedProperties['offcanvas'] = true;
            $this->offcanvas = $value['offcanvas'];
            unset($value['offcanvas']);
        }

        if (array_key_exists('register', $value)) {
            $this->_usedProperties['register'] = true;
            $this->register = $value['register'];
            unset($value['register']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['home'])) {
            $output['home'] = $this->home;
        }
        if (isset($this->_usedProperties['login'])) {
            $output['login'] = $this->login;
        }
        if (isset($this->_usedProperties['homepage'])) {
            $output['homepage'] = $this->homepage;
        }
        if (isset($this->_usedProperties['logout'])) {
            $output['logout'] = $this->logout;
        }
        if (isset($this->_usedProperties['offcanvas'])) {
            $output['offcanvas'] = $this->offcanvas;
        }
        if (isset($this->_usedProperties['register'])) {
            $output['register'] = $this->register;
        }

        return $output;
    }

}
