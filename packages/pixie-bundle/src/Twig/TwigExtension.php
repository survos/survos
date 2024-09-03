<?php

namespace Survos\PixieBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    public function __construct(private array $config)
    {
    }

    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, add ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/3.x/advanced.html#automatic-escaping
            new TwigFilter('file_exists', fn (string $s) => file_exists($s)),
            new TwigFilter('json_decode', fn (string $s, bool $asArray=true) => json_decode($s, $asArray)),
            new TwigFilter('urlize', fn($x, $target='blank', string $label=null) =>
            filter_var($x, FILTER_VALIDATE_URL)
                ? sprintf('<a target="%s" href="%s">%s</a>', $target, $x, $label ?: $x)
                : $x, [
                'is_safe' => ['html'],
            ]),

        ];
    }

    public function getFunctions(): array
    {
        return [
//            new TwigFunction('function_name', [::class, 'doSomething']),
        ];
    }
}
