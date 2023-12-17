<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'SurvosBootstrap'.\DIRECTORY_SEPARATOR.'RoutesConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'SurvosBootstrap'.\DIRECTORY_SEPARATOR.'OptionsConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosBootstrapConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $routes;
    private $options;
    private $menuOptions;
    private $_usedProperties = [];

    /**
     * @default {"home":"app_homepage","login":"app_login","homepage":"app_homepage","logout":"app_logout","offcanvas":"app_settings","register":"app_register"}
    */
    public function routes(array $value = []): \Symfony\Config\SurvosBootstrap\RoutesConfig
    {
        if (null === $this->routes) {
            $this->_usedProperties['routes'] = true;
            $this->routes = new \Symfony\Config\SurvosBootstrap\RoutesConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "routes()" has already been initialized. You cannot pass values the second time you call routes().');
        }

        return $this->routes;
    }

    /**
     * @default {"layout_direction":"vertical","offcanvas":"end","theme":"bs5","allow_login":false}
    */
    public function options(array $value = []): \Symfony\Config\SurvosBootstrap\OptionsConfig
    {
        if (null === $this->options) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\SurvosBootstrap\OptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "options()" has already been initialized. You cannot pass values the second time you call options().');
        }

        return $this->options;
    }

    /**
     * @return $this
     */
    public function menuOptions(string $name, mixed $value): static
    {
        $this->_usedProperties['menuOptions'] = true;
        $this->menuOptions[$name] = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_bootstrap';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('routes', $value)) {
            $this->_usedProperties['routes'] = true;
            $this->routes = new \Symfony\Config\SurvosBootstrap\RoutesConfig($value['routes']);
            unset($value['routes']);
        }

        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = new \Symfony\Config\SurvosBootstrap\OptionsConfig($value['options']);
            unset($value['options']);
        }

        if (array_key_exists('menu_options', $value)) {
            $this->_usedProperties['menuOptions'] = true;
            $this->menuOptions = $value['menu_options'];
            unset($value['menu_options']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['routes'])) {
            $output['routes'] = $this->routes->toArray();
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options->toArray();
        }
        if (isset($this->_usedProperties['menuOptions'])) {
            $output['menu_options'] = $this->menuOptions;
        }

        return $output;
    }

}
