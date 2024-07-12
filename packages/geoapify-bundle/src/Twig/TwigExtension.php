<?php

namespace Survos\GeoapifyBundle\Twig;

// we probably don't need this, as we can use the https://github.com/zenstruck/twig-service-bundle to inject the calls to GeoapifyService

use Survos\GeoapifyBundle\Service\GeoapifyService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    public function __construct(private GeoapifyService $geoapifyService)
    {
    }

    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, add ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/3.x/advanced.html#automatic-escaping
        ];
    }

    public function getFunctions(): array
    {
        return [
        ];
    }
}
