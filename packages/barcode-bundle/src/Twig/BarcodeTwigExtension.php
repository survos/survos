<?php

namespace Survos\BarcodeBundle\Twig;

use Picqer\Barcode\BarcodeGenerator;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorSVG;
use Survos\BarcodeBundle\Service\BarcodeService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class BarcodeTwigExtension extends AbstractExtension
{
    public function __construct(
        private BarcodeService $barcodeService,
        private int $widthFactor,
        private int $height,
        private string $foregroundColor
    ) {
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('barcode', [$this, 'barcode'], [
                'is_safe' => ['html'],
            ]),
        ];
    }
    public function getFunctions(): array
    {
        return [
            new TwigFunction('barcode', [$this, 'barcode'], ['is_safe' => ['html'],
            ]),
        ];
    }

    public function barcode(string $value, ?int $widthFactor = null, ?int $height = null, ?string $foregroundColor = null, string $type = BarcodeGenerator::TYPE_CODE_128, string $generatorClass = BarcodeGeneratorSVG::class ): string
    {
        if (!class_exists($generatorClass)) {
            $generatorClass = $this->barcodeService->getGeneratorClass($generatorClass);
        }
        /** @var BarcodeGeneratorSVG|BarcodeGeneratorPNG $generator */
        $generator = new $generatorClass();
        $barcodeData = $generator->getBarcode(
            barcode: $value,
            type: $type,
            widthFactor: $widthFactor ?? $this->widthFactor,
            height: $height ?? $this->height,
            // hack for array / string issue https://github.com/picqer/php-barcode-generator/issues/172
            foregroundColor: $this->barcodeService->getImageFormat($generatorClass) ? [0,0,0] : $foregroundColor ?? $this->foregroundColor
        );
        if ($this->barcodeService->getImageFormat($generatorClass)) {
            $barcodeData = base64_encode($barcodeData);
        }
        return $barcodeData;
    }

}
