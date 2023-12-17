<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Stenope'.\DIRECTORY_SEPARATOR.'CopyConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Stenope'.\DIRECTORY_SEPARATOR.'ProviderConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Stenope'.\DIRECTORY_SEPARATOR.'ResolveLinkConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Stenope'.\DIRECTORY_SEPARATOR.'ProcessorsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StenopeConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $buildDir;
    private $sharedHtmlCrawlers;
    private $copy;
    private $providers;
    private $resolveLinks;
    private $processors;
    private $_usedProperties = [];

    /**
     * The directory where to build the static version of the app
     * @default '%kernel.project_dir%/build'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function buildDir($value): static
    {
        $this->_usedProperties['buildDir'] = true;
        $this->buildDir = $value;

        return $this;
    }

    /**
     * Activate the sharing of HTML crawlers for better performances.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sharedHtmlCrawlers($value): static
    {
        $this->_usedProperties['sharedHtmlCrawlers'] = true;
        $this->sharedHtmlCrawlers = $value;

        return $this;
    }

    /**
     * @template TValue
     * @param TValue $value
     * @example "%kernel.project_dir%\/public\/build"
     * @example "%kernel.project_dir%\/public\/robots.txt"
     * @example {"src":"%kernel.project_dir%\/public\/some-file-or-dir","dest":"to-another-dest-name","excludes":["*.php","*.map"],"fail_if_missing":"false","ignore_dot_files":"false"}
     * @default [{"src":"%kernel.project_dir%\/public","dest":".","fail_if_missing":true,"ignore_dot_files":true,"excludes":["*.php"]}]
     * @return \Symfony\Config\Stenope\CopyConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Stenope\CopyConfig : static)
     */
    public function copy(array $value = []): \Symfony\Config\Stenope\CopyConfig|static
    {
        $this->_usedProperties['copy'] = true;
        if (!\is_array($value)) {
            $this->copy[] = $value;

            return $this;
        }

        return $this->copy[] = new \Symfony\Config\Stenope\CopyConfig($value);
    }

    /**
     * @template TValue
     * @param TValue $value
     * @example "%kernel.project_dir%\/content\/recipes"
     * @example {"#type":"files # (default)","path":"%kernel.project_dir%\/content\/recipes","patterns":"*.md"}
     * @example {"type":"custom_type","your-custom-key":"your-value"}
     * @return \Symfony\Config\Stenope\ProviderConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Stenope\ProviderConfig : static)
     */
    public function provider(string $class, mixed $value = []): \Symfony\Config\Stenope\ProviderConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['providers'] = true;
            $this->providers[$class] = $value;

            return $this;
        }

        if (!isset($this->providers[$class]) || !$this->providers[$class] instanceof \Symfony\Config\Stenope\ProviderConfig) {
            $this->_usedProperties['providers'] = true;
            $this->providers[$class] = new \Symfony\Config\Stenope\ProviderConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "provider()" has already been initialized. You cannot pass values the second time you call provider().');
        }

        return $this->providers[$class];
    }

    /**
     * Indicates of to resolve a content type when a link to it is encountered inside anotehr content
     * @example {"route":"show_recipe","slug":"recipe"}
    */
    public function resolveLink(string $class, array $value = []): \Symfony\Config\Stenope\ResolveLinkConfig
    {
        if (!isset($this->resolveLinks[$class])) {
            $this->_usedProperties['resolveLinks'] = true;
            $this->resolveLinks[$class] = new \Symfony\Config\Stenope\ResolveLinkConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resolveLink()" has already been initialized. You cannot pass values the second time you call resolveLink().');
        }

        return $this->resolveLinks[$class];
    }

    /**
     * Built-in processors configuration. Disable to unregister all of the preconfigured processors.
     * @default {"enabled":true,"content_property":"content","slug":{"enabled":true,"property":"slug"},"assets":{"enabled":true},"resolve_content_links":{"enabled":true},"external_links":{"enabled":true},"anchors":{"enabled":true,"selector":"h1, h2, h3, h4, h5"},"html_title":{"enabled":true,"property":"title"},"html_elements_ids":{"enabled":true},"code_highlight":{"enabled":true},"toc":{"enabled":true,"property":"tableOfContent","min_depth":2,"max_depth":6},"last_modified":{"enabled":true,"property":"lastModified","git":{"enabled":true,"path":"git"}}}
    */
    public function processors(array $value = []): \Symfony\Config\Stenope\ProcessorsConfig
    {
        if (null === $this->processors) {
            $this->_usedProperties['processors'] = true;
            $this->processors = new \Symfony\Config\Stenope\ProcessorsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "processors()" has already been initialized. You cannot pass values the second time you call processors().');
        }

        return $this->processors;
    }

    public function getExtensionAlias(): string
    {
        return 'stenope';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('build_dir', $value)) {
            $this->_usedProperties['buildDir'] = true;
            $this->buildDir = $value['build_dir'];
            unset($value['build_dir']);
        }

        if (array_key_exists('shared_html_crawlers', $value)) {
            $this->_usedProperties['sharedHtmlCrawlers'] = true;
            $this->sharedHtmlCrawlers = $value['shared_html_crawlers'];
            unset($value['shared_html_crawlers']);
        }

        if (array_key_exists('copy', $value)) {
            $this->_usedProperties['copy'] = true;
            $this->copy = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Stenope\CopyConfig($v) : $v, $value['copy']);
            unset($value['copy']);
        }

        if (array_key_exists('providers', $value)) {
            $this->_usedProperties['providers'] = true;
            $this->providers = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Stenope\ProviderConfig($v) : $v, $value['providers']);
            unset($value['providers']);
        }

        if (array_key_exists('resolve_links', $value)) {
            $this->_usedProperties['resolveLinks'] = true;
            $this->resolveLinks = array_map(fn ($v) => new \Symfony\Config\Stenope\ResolveLinkConfig($v), $value['resolve_links']);
            unset($value['resolve_links']);
        }

        if (array_key_exists('processors', $value)) {
            $this->_usedProperties['processors'] = true;
            $this->processors = new \Symfony\Config\Stenope\ProcessorsConfig($value['processors']);
            unset($value['processors']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['buildDir'])) {
            $output['build_dir'] = $this->buildDir;
        }
        if (isset($this->_usedProperties['sharedHtmlCrawlers'])) {
            $output['shared_html_crawlers'] = $this->sharedHtmlCrawlers;
        }
        if (isset($this->_usedProperties['copy'])) {
            $output['copy'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Stenope\CopyConfig ? $v->toArray() : $v, $this->copy);
        }
        if (isset($this->_usedProperties['providers'])) {
            $output['providers'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Stenope\ProviderConfig ? $v->toArray() : $v, $this->providers);
        }
        if (isset($this->_usedProperties['resolveLinks'])) {
            $output['resolve_links'] = array_map(fn ($v) => $v->toArray(), $this->resolveLinks);
        }
        if (isset($this->_usedProperties['processors'])) {
            $output['processors'] = $this->processors->toArray();
        }

        return $output;
    }

}
