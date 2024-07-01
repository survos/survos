<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosKeyValueConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $directory;
    private $extension;
    private $configDirectory;
    private $_usedProperties = [];

    /**
     * where to store the pixy db files
     * @default './data'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function directory($value): static
    {
        $this->_usedProperties['directory'] = true;
        $this->directory = $value;

        return $this;
    }

    /**
     * the pixy db extension
     * @default '.pixy.db'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function extension($value): static
    {
        $this->_usedProperties['extension'] = true;
        $this->extension = $value;

        return $this;
    }

    /**
     * location of .pixy.yaml config files
     * @default './pixy'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function configDirectory($value): static
    {
        $this->_usedProperties['configDirectory'] = true;
        $this->configDirectory = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_key_value';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('directory', $value)) {
            $this->_usedProperties['directory'] = true;
            $this->directory = $value['directory'];
            unset($value['directory']);
        }

        if (array_key_exists('extension', $value)) {
            $this->_usedProperties['extension'] = true;
            $this->extension = $value['extension'];
            unset($value['extension']);
        }

        if (array_key_exists('config_directory', $value)) {
            $this->_usedProperties['configDirectory'] = true;
            $this->configDirectory = $value['config_directory'];
            unset($value['config_directory']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['directory'])) {
            $output['directory'] = $this->directory;
        }
        if (isset($this->_usedProperties['extension'])) {
            $output['extension'] = $this->extension;
        }
        if (isset($this->_usedProperties['configDirectory'])) {
            $output['config_directory'] = $this->configDirectory;
        }

        return $output;
    }

}
