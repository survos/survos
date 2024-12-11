<?php

namespace Survos\MobileBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    public function __construct()
    {
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('basename', [$this, 'basename'])
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('ons_metadata',
                fn(string $_self, string $type, array $extra = []) => array_merge($extra, [
                        'type' => $type,
                        'templateId' => $this->basename($_self),
                    ]
                )),
        ];
    }

    public function basename(string $_self): string
    {
        return basename($_self, '.html.twig');
    }
}
