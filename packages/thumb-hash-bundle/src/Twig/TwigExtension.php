<?php

namespace Survos\ThumbHashBundle\Twig;

use Thumbhash\Thumbhash;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{

    public function __construct(private array $config=[]) {
    }

    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, add ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/3.x/advanced.html#automatic-escaping
            new TwigFilter('blurUrl', fn(?string $s): ?string =>
            $s ? Thumbhash::toDataURL(Thumbhash::convertStringToHash($s)): null )
        ];
    }

    public function getFunctions(): array
    {
        return [
            // uses the data,
            new TwigFunction('blurDataToUrl', fn(?array $hash) => $hash ? Thumbhash::toDataURL($hash): null)
//            new TwigFunction('function_name', [::class, 'doSomething']),
        ];
    }
}
