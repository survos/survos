<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosScraperConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $dir;
    private $prefix;
    private $sqliteFilename;
    private $_usedProperties = [];

    /**
     * @default '/tmp/cache'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dir($value): static
    {
        $this->_usedProperties['dir'] = true;
        $this->dir = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function prefix($value): static
    {
        $this->_usedProperties['prefix'] = true;
        $this->prefix = $value;

        return $this;
    }

    /**
     * @default 'scraper.sqlite'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sqliteFilename($value): static
    {
        $this->_usedProperties['sqliteFilename'] = true;
        $this->sqliteFilename = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_scraper';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('dir', $value)) {
            $this->_usedProperties['dir'] = true;
            $this->dir = $value['dir'];
            unset($value['dir']);
        }

        if (array_key_exists('prefix', $value)) {
            $this->_usedProperties['prefix'] = true;
            $this->prefix = $value['prefix'];
            unset($value['prefix']);
        }

        if (array_key_exists('sqliteFilename', $value)) {
            $this->_usedProperties['sqliteFilename'] = true;
            $this->sqliteFilename = $value['sqliteFilename'];
            unset($value['sqliteFilename']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['dir'])) {
            $output['dir'] = $this->dir;
        }
        if (isset($this->_usedProperties['prefix'])) {
            $output['prefix'] = $this->prefix;
        }
        if (isset($this->_usedProperties['sqliteFilename'])) {
            $output['sqliteFilename'] = $this->sqliteFilename;
        }

        return $output;
    }

}
