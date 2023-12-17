<?php

namespace Symfony\Config\Stenope;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'SlugConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'AssetsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'ResolveContentLinksConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'ExternalLinksConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'AnchorsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'HtmlTitleConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'HtmlElementsIdsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'CodeHighlightConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'TocConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Processors'.\DIRECTORY_SEPARATOR.'LastModifiedConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ProcessorsConfig 
{
    private $enabled;
    private $contentProperty;
    private $slug;
    private $assets;
    private $resolveContentLinks;
    private $externalLinks;
    private $anchors;
    private $htmlTitle;
    private $htmlElementsIds;
    private $codeHighlight;
    private $toc;
    private $lastModified;
    private $_usedProperties = [];

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;

        return $this;
    }

    /**
     * Key used by default by every processors to access and modify the main text of your contents
     * @default 'content'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function contentProperty($value): static
    {
        $this->_usedProperties['contentProperty'] = true;
        $this->contentProperty = $value;

        return $this;
    }

    /**
     * @default {"enabled":true,"property":"slug"}
    */
    public function slug(array $value = []): \Symfony\Config\Stenope\Processors\SlugConfig
    {
        if (null === $this->slug) {
            $this->_usedProperties['slug'] = true;
            $this->slug = new \Symfony\Config\Stenope\Processors\SlugConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "slug()" has already been initialized. You cannot pass values the second time you call slug().');
        }

        return $this->slug;
    }

    /**
     * Attempt to resolve local assets URLs using the Asset component for images and links. See AssetsProcessor.
     * @default {"enabled":true}
    */
    public function assets(array $value = []): \Symfony\Config\Stenope\Processors\AssetsConfig
    {
        if (null === $this->assets) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\Stenope\Processors\AssetsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "assets()" has already been initialized. You cannot pass values the second time you call assets().');
        }

        return $this->assets;
    }

    /**
     * Attempt to resolve relative links between contents using the route declared in config. See ResolveContentLinksProcessor.
     * @default {"enabled":true}
    */
    public function resolveContentLinks(array $value = []): \Symfony\Config\Stenope\Processors\ResolveContentLinksConfig
    {
        if (null === $this->resolveContentLinks) {
            $this->_usedProperties['resolveContentLinks'] = true;
            $this->resolveContentLinks = new \Symfony\Config\Stenope\Processors\ResolveContentLinksConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "resolveContentLinks()" has already been initialized. You cannot pass values the second time you call resolveContentLinks().');
        }

        return $this->resolveContentLinks;
    }

    /**
     * Automatically add target="_blank" to external links. See HtmlExternalLinksProcessor.
     * @default {"enabled":true}
    */
    public function externalLinks(array $value = []): \Symfony\Config\Stenope\Processors\ExternalLinksConfig
    {
        if (null === $this->externalLinks) {
            $this->_usedProperties['externalLinks'] = true;
            $this->externalLinks = new \Symfony\Config\Stenope\Processors\ExternalLinksConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "externalLinks()" has already been initialized. You cannot pass values the second time you call externalLinks().');
        }

        return $this->externalLinks;
    }

    /**
     * Automatically add anchor links to elements with an id. See HtmlAnchorProcessor.
     * @default {"enabled":true,"selector":"h1, h2, h3, h4, h5"}
    */
    public function anchors(array $value = []): \Symfony\Config\Stenope\Processors\AnchorsConfig
    {
        if (null === $this->anchors) {
            $this->_usedProperties['anchors'] = true;
            $this->anchors = new \Symfony\Config\Stenope\Processors\AnchorsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "anchors()" has already been initialized. You cannot pass values the second time you call anchors().');
        }

        return $this->anchors;
    }

    /**
     * Extract a content title from a HTML property by using the first available h1 tag. See ExtractTitleFromHtmlContentProcessor.
     * @default {"enabled":true,"property":"title"}
    */
    public function htmlTitle(array $value = []): \Symfony\Config\Stenope\Processors\HtmlTitleConfig
    {
        if (null === $this->htmlTitle) {
            $this->_usedProperties['htmlTitle'] = true;
            $this->htmlTitle = new \Symfony\Config\Stenope\Processors\HtmlTitleConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "htmlTitle()" has already been initialized. You cannot pass values the second time you call htmlTitle().');
        }

        return $this->htmlTitle;
    }

    /**
     * Add ids to titles, images and other HTML elements in the content. See HtmlIdProcessor.
     * @default {"enabled":true}
    */
    public function htmlElementsIds(array $value = []): \Symfony\Config\Stenope\Processors\HtmlElementsIdsConfig
    {
        if (null === $this->htmlElementsIds) {
            $this->_usedProperties['htmlElementsIds'] = true;
            $this->htmlElementsIds = new \Symfony\Config\Stenope\Processors\HtmlElementsIdsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "htmlElementsIds()" has already been initialized. You cannot pass values the second time you call htmlElementsIds().');
        }

        return $this->htmlElementsIds;
    }

    /**
     * Enabled the syntax highlighting for code blocks using Prism.js. See CodeHighlightProcessor.
     * @default {"enabled":true}
    */
    public function codeHighlight(array $value = []): \Symfony\Config\Stenope\Processors\CodeHighlightConfig
    {
        if (null === $this->codeHighlight) {
            $this->_usedProperties['codeHighlight'] = true;
            $this->codeHighlight = new \Symfony\Config\Stenope\Processors\CodeHighlightConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "codeHighlight()" has already been initialized. You cannot pass values the second time you call codeHighlight().');
        }

        return $this->codeHighlight;
    }

    /**
     * Build a table of content from the HTML titles. See TableOfContentProcessor.
     * @default {"enabled":true,"property":"tableOfContent","min_depth":2,"max_depth":6}
    */
    public function toc(array $value = []): \Symfony\Config\Stenope\Processors\TocConfig
    {
        if (null === $this->toc) {
            $this->_usedProperties['toc'] = true;
            $this->toc = new \Symfony\Config\Stenope\Processors\TocConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "toc()" has already been initialized. You cannot pass values the second time you call toc().');
        }

        return $this->toc;
    }

    /**
     * Attempt to fetch and populate the last modified date to a property. See LastModifiedProcessor.
     * @default {"enabled":true,"property":"lastModified","git":{"enabled":true,"path":"git"}}
    */
    public function lastModified(array $value = []): \Symfony\Config\Stenope\Processors\LastModifiedConfig
    {
        if (null === $this->lastModified) {
            $this->_usedProperties['lastModified'] = true;
            $this->lastModified = new \Symfony\Config\Stenope\Processors\LastModifiedConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "lastModified()" has already been initialized. You cannot pass values the second time you call lastModified().');
        }

        return $this->lastModified;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }

        if (array_key_exists('content_property', $value)) {
            $this->_usedProperties['contentProperty'] = true;
            $this->contentProperty = $value['content_property'];
            unset($value['content_property']);
        }

        if (array_key_exists('slug', $value)) {
            $this->_usedProperties['slug'] = true;
            $this->slug = new \Symfony\Config\Stenope\Processors\SlugConfig($value['slug']);
            unset($value['slug']);
        }

        if (array_key_exists('assets', $value)) {
            $this->_usedProperties['assets'] = true;
            $this->assets = new \Symfony\Config\Stenope\Processors\AssetsConfig($value['assets']);
            unset($value['assets']);
        }

        if (array_key_exists('resolve_content_links', $value)) {
            $this->_usedProperties['resolveContentLinks'] = true;
            $this->resolveContentLinks = new \Symfony\Config\Stenope\Processors\ResolveContentLinksConfig($value['resolve_content_links']);
            unset($value['resolve_content_links']);
        }

        if (array_key_exists('external_links', $value)) {
            $this->_usedProperties['externalLinks'] = true;
            $this->externalLinks = new \Symfony\Config\Stenope\Processors\ExternalLinksConfig($value['external_links']);
            unset($value['external_links']);
        }

        if (array_key_exists('anchors', $value)) {
            $this->_usedProperties['anchors'] = true;
            $this->anchors = new \Symfony\Config\Stenope\Processors\AnchorsConfig($value['anchors']);
            unset($value['anchors']);
        }

        if (array_key_exists('html_title', $value)) {
            $this->_usedProperties['htmlTitle'] = true;
            $this->htmlTitle = new \Symfony\Config\Stenope\Processors\HtmlTitleConfig($value['html_title']);
            unset($value['html_title']);
        }

        if (array_key_exists('html_elements_ids', $value)) {
            $this->_usedProperties['htmlElementsIds'] = true;
            $this->htmlElementsIds = new \Symfony\Config\Stenope\Processors\HtmlElementsIdsConfig($value['html_elements_ids']);
            unset($value['html_elements_ids']);
        }

        if (array_key_exists('code_highlight', $value)) {
            $this->_usedProperties['codeHighlight'] = true;
            $this->codeHighlight = new \Symfony\Config\Stenope\Processors\CodeHighlightConfig($value['code_highlight']);
            unset($value['code_highlight']);
        }

        if (array_key_exists('toc', $value)) {
            $this->_usedProperties['toc'] = true;
            $this->toc = new \Symfony\Config\Stenope\Processors\TocConfig($value['toc']);
            unset($value['toc']);
        }

        if (array_key_exists('last_modified', $value)) {
            $this->_usedProperties['lastModified'] = true;
            $this->lastModified = new \Symfony\Config\Stenope\Processors\LastModifiedConfig($value['last_modified']);
            unset($value['last_modified']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['contentProperty'])) {
            $output['content_property'] = $this->contentProperty;
        }
        if (isset($this->_usedProperties['slug'])) {
            $output['slug'] = $this->slug->toArray();
        }
        if (isset($this->_usedProperties['assets'])) {
            $output['assets'] = $this->assets->toArray();
        }
        if (isset($this->_usedProperties['resolveContentLinks'])) {
            $output['resolve_content_links'] = $this->resolveContentLinks->toArray();
        }
        if (isset($this->_usedProperties['externalLinks'])) {
            $output['external_links'] = $this->externalLinks->toArray();
        }
        if (isset($this->_usedProperties['anchors'])) {
            $output['anchors'] = $this->anchors->toArray();
        }
        if (isset($this->_usedProperties['htmlTitle'])) {
            $output['html_title'] = $this->htmlTitle->toArray();
        }
        if (isset($this->_usedProperties['htmlElementsIds'])) {
            $output['html_elements_ids'] = $this->htmlElementsIds->toArray();
        }
        if (isset($this->_usedProperties['codeHighlight'])) {
            $output['code_highlight'] = $this->codeHighlight->toArray();
        }
        if (isset($this->_usedProperties['toc'])) {
            $output['toc'] = $this->toc->toArray();
        }
        if (isset($this->_usedProperties['lastModified'])) {
            $output['last_modified'] = $this->lastModified->toArray();
        }

        return $output;
    }

}
