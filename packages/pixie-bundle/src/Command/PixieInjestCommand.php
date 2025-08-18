<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Command;

use Survos\PixieBundle\Entity\Row;
use Survos\PixieBundle\Import\Ingest\JsonIngestor;
use Survos\PixieBundle\Service\DtoMapper;                 // <- PixieBundle mapper
use Survos\PixieBundle\Service\PixieService;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * JSON/NDJSON → Row importer. Optional DTO normalization via --dto-class.
 */
#[AsCommand('pixie:injest', 'Import normalized JSON into Rows (file or directory)')]
final class PixieInjestCommand
{
    public function __construct(
        private readonly PixieService $pixie,
        private readonly JsonIngestor $json,
        private readonly ?DtoMapper $dtoMapper = null,   // optional; autowired if service available
    ) {}

    public function __invoke(
        SymfonyStyle $io,
        #[Argument('pixieCode')] string $pixieCode,
        #[Option('file')] ?string $file = null,
        #[Option('dir')] ?string $dir = null,
        #[Option('core')] string $core = 'obj',
        #[Option('pk')] string $pk = 'id',
        #[Option('label-field')] ?string $labelField = null,
        #[Option('dto-class')] ?string $dtoClass = null, // e.g. Survos\PixieBundle\Dto\Cleveland\Obj
        #[Option('batch')] int $batch = 1000,
        #[Option('limit')] int $limit = 0,
    ): int {
        $ctx   = $this->pixie->getReference($pixieCode); // switches DB + ensure schema
        $owner = $ctx->ownerRef;
        $em    = $ctx->em;

        // Resolve sources
        $sources = [];
        if ($file) {
            $sources = [$file];
        } else {
            $dir ??= getcwd() . "/data/$pixieCode/json";
            if (!is_dir($dir)) {
                $io->error("Directory not found: $dir (pass --file or --dir)");
                return 1;
            }
            $sources = array_merge(
                glob(rtrim($dir, '/') . '/*.json') ?: [],
                glob(rtrim($dir, '/') . '/*.jsonl') ?: []
            );
            if (!$sources) {
                $io->warning("No *.json or *.jsonl in $dir");
                return 0;
            }
        }

        $io->title("Injest $pixieCode core=$core pk=$pk dto=" . ($dtoClass ?? 'none'));
        $coreEntity = $this->pixie->getCore($core, $owner);

        $total = 0;
        foreach ($sources as $path) {
            $io->section(basename($path));
            $i = 0;

            foreach ($this->json->iterate($path) as $record) {
                if (!is_array($record)) continue;
                $idWithinCore = (string)($record[$pk] ?? '');
                if ($idWithinCore === '') continue;

                $rowId = Row::RowIdentifier($coreEntity, $idWithinCore);
                /** @var Row $row */
                $row = $em->getRepository(Row::class)->find($rowId) ?? new Row($coreEntity, $idWithinCore);
                if ($row->getId() !== $rowId) {
                    $em->persist($row);
                }

                // Label
                $label = null;
                if ($labelField && isset($record[$labelField])) {
                    $label = (string)$record[$labelField];
                } else {
                    foreach (['label','name','title'] as $lf) {
                        if (isset($record[$lf]) && is_string($record[$lf]) && $record[$lf] !== '') {
                            $label = $record[$lf];
                            break;
                        }
                    }
                }
                $row->setLabel($label ?? ("row $core:$idWithinCore"));

                // Optional DTO normalization
                if ($dtoClass && $this->dtoMapper) {
                    try {
                        $dto  = $this->dtoMapper->mapRecord($record, $dtoClass);
                        $norm = $this->dtoMapper->toArray($dto);
                        $record['_norm'] = $norm; // keep original + normalized
                    } catch (\Throwable $e) {
                        $io->warning("DTO mapping failed for id=$idWithinCore: ".$e->getMessage());
                    }
                }

                $row->setData($record);

                if ((++$i % $batch) === 0) {
                    $em->flush();
                    $em->clear();
                }
                if ($limit && $i >= $limit) break;
            }

            $em->flush();
            $total += $i;
            $io->writeln("Imported $i from " . basename($path));
        }

        $io->success("Done. Imported $total rows to core=$core.");
        return 0;
    }
}
