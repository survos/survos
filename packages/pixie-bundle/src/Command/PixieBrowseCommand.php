<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Command;

use Survos\PixieBundle\Entity\Row;
use Survos\PixieBundle\Service\LocaleContext;
use Survos\PixieBundle\Service\PixieDocumentProjector;
use Survos\PixieBundle\Service\PixieService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand('pixie:browse', 'Preview populated, translated core rows as JSON (what will go to Meili)')]
final class PixieBrowseCommand
{
    public function __construct(
        private readonly PixieService $pixie,
        private readonly PixieDocumentProjector $projector,
        private readonly LocaleContext $locale
    ) {}

    public function __invoke(
        SymfonyStyle $io,
        #[Argument('pixieCode')] string $pixieCode,
        #[Argument('core')] string $core,
        #[Option('locale')] string $loc = 'en',
        #[Option('limit')] int $limit = 25,
        #[Option('offset')] int $offset = 0,
        #[Option('pretty')] bool $pretty = true,
        #[Option('ids')] ?string $ids = null
    ): int {
        $this->locale->set($loc); $io->note('Locale set to '.$this->locale->get());

        $ctx   = $this->pixie->getReference($pixieCode);
        $owner = $ctx->ownerRef;
        $coreE = $this->pixie->getCore($core, $owner);

        if ($ids) {
            $rows = [];
            foreach (array_filter(array_map('trim', explode(',', $ids))) as $within) {
                $rowId = Row::RowIdentifier($coreE, $within);
                $r = $ctx->find(Row::class, $rowId);
                if ($r) { $rows[] = $r; }
            }
        } else {
            $rows = $ctx->repo(Row::class)->findBy(['core' => $coreE], ['id' => 'ASC'], $limit, $offset);
        }

        if (!$rows) { $io->writeln('[]'); return 0; }

        foreach ($rows as $row) {
            $doc = $this->projector->project($ctx, $row, $loc);
            $json = json_encode($doc, $pretty ? JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES : 0);
            $io->writeln($json);
            if ($pretty) { $io->newLine(); }
        }

        return 0;
    }
}
