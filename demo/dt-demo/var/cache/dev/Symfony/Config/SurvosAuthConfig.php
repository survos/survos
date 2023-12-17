<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosAuthConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $userProvider;
    private $userClass;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userProvider($value): static
    {
        $this->_usedProperties['userProvider'] = true;
        $this->userProvider = $value;

        return $this;
    }

    /**
     * @default 'App\\Entity\\User'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function userClass($value): static
    {
        $this->_usedProperties['userClass'] = true;
        $this->userClass = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_auth';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('user_provider', $value)) {
            $this->_usedProperties['userProvider'] = true;
            $this->userProvider = $value['user_provider'];
            unset($value['user_provider']);
        }

        if (array_key_exists('user_class', $value)) {
            $this->_usedProperties['userClass'] = true;
            $this->userClass = $value['user_class'];
            unset($value['user_class']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['userProvider'])) {
            $output['user_provider'] = $this->userProvider;
        }
        if (isset($this->_usedProperties['userClass'])) {
            $output['user_class'] = $this->userClass;
        }

        return $output;
    }

}
