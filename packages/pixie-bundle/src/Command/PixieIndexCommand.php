<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Command;

use Survos\PixieBundle\Entity\Row;
use Survos\PixieBundle\Service\LocaleContext;
use Survos\PixieBundle\Service\MeiliIndexer;
use Survos\PixieBundle\Service\MeiliService;
use Survos\PixieBundle\Service\PixieDocumentProjector;
use Survos\PixieBundle\Service\PixieService;
use Survos\PixieBundle\Util\IndexNameResolver;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand('pixie:index', 'Project Rows and index to Meili (prints settings first)')]
final class PixieIndexCommand
{
    public function __construct(
        private readonly PixieService $pixie,
        private readonly PixieDocumentProjector $projector,
        private readonly MeiliService $meili,
        private readonly MeiliIndexer $indexer,
        private readonly LocaleContext $locale,
    ) {}

    public function __invoke(
        SymfonyStyle $io,
        #[Argument('pixieCode')] string $pixieCode,
        #[Option('core')] string $core = 'obj',
        #[Option('locale')] string $loc = 'es',
        #[Option('batch')] int $batch = 500,
        #[Option('limit')] int $limit = 0,
        #[Option('offset')] int $offset = 0,
    ): int {
        $this->locale->set($loc);

        $ctx   = $this->pixie->getReference($pixieCode);
        $owner = $ctx->ownerRef;
        $coreE = $this->pixie->getCore($core, $owner);

        $index = IndexNameResolver::name($pixieCode, $core, $loc);

        $io->title("Meili index: $index");
        $settings = $this->meili->getSettings($index);
        if ($settings === null) {
            $io->warning("Index missing. Creating '$index' (pk=id).");
            $this->meili->ensureIndex($index, 'id');
        } else {
            $io->writeln(json_encode($settings, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }

        $rows = $ctx->repo(Row::class)->findBy(['core' => $coreE], ['id' => 'ASC'], $limit ?: null, $offset);

        $docs = [];
        $i = 0;
        foreach ($rows as $row) {
            $docs[] = $this->projector->project($ctx, $row, $loc);
            if ((++$i % $batch) === 0) {
                $this->indexer->indexDocs($index, $docs);
                $docs = [];
            }
        }
        if ($docs) {
            $this->indexer->indexDocs($index, $docs);
        }

        $io->success("Indexed $i rows into $index.");
        return 0;
    }
}
