<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SurvosHtmlPrettifyConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $indentationCharacter;
    private $_usedProperties = [];

    /**
     * @default '    '
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function indentationCharacter($value): static
    {
        $this->_usedProperties['indentationCharacter'] = true;
        $this->indentationCharacter = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'survos_html_prettify';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('indentation_character', $value)) {
            $this->_usedProperties['indentationCharacter'] = true;
            $this->indentationCharacter = $value['indentation_character'];
            unset($value['indentation_character']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['indentationCharacter'])) {
            $output['indentation_character'] = $this->indentationCharacter;
        }

        return $output;
    }

}
