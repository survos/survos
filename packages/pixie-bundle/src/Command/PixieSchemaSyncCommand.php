<?php
namespace Survos\PixieBundle\Command;

use Survos\PixieBundle\Schema\YamlSchemaSynchronizer;
use Survos\PixieBundle\Service\PixieService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand('pixie:schema:sync', 'Compile survos_pixie YAML to Pixie DB schema')]
final class PixieSchemaSyncCommand
{
    public function __construct(
        private readonly PixieService            $pixie,
        private readonly YamlSchemaSynchronizer  $sync,
    ) {}

    public function __invoke(
        SymfonyStyle $io,
        #[Argument('pixieCode')] string $pixieCode
    ): int
    {
        $ctx    = $this->pixie->getReference($pixieCode);
        $config = $ctx->config;
        $this->sync->sync($pixieCode, $config, schemaVersion: 'v1');

        $io->success("Schema compiled to DB for {$pixieCode}");
        return 0;
    }
}
