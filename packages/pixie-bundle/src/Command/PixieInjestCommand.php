<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Command;

use Survos\PixieBundle\Entity\Row;
use Survos\PixieBundle\Import\Ingest\JsonIngestor;
use Survos\PixieBundle\Import\Ingest\CsvIngestor;
use Survos\PixieBundle\Service\DtoMapper;        // optional DI
use Survos\PixieBundle\Service\PixieService;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * JSON/NDJSON/CSV → Row importer. Optional DTO normalization via --dto/--dto-class.
 */
#[AsCommand('pixie:injest', 'Import JSON/NDJSON/CSV into Rows (file or directory)')]
final class PixieInjestCommand
{
    public function __construct(
        private readonly PixieService $pixie,
        private readonly JsonIngestor $json,
        private readonly ?CsvIngestor $csv = null,  // optional; autowired if available
        private readonly ?DtoMapper $dtoMapper = null,
    ) {}

    public function __invoke(
        SymfonyStyle $io,
        #[Argument('pixieCode')] string $pixieCode,
        #[Option('file')] ?string $file = null,
        #[Option('dir')] ?string $dir = null,
        #[Option('core')] string $core = 'obj',
        #[Option('pk')] string $pk = 'id',
        #[Option('label-field')] ?string $labelField = null,
        #[Option('dto-class')] ?string $dtoClass = null,      // class name
        #[Option('dto')] ?string $dtoAlias = null,            // alias of dto-class
        #[Option('batch')] int $batch = 1000,
        #[Option('limit')] int $limit = 0,
    ): int {
        // Unify dto option
        $dtoClass = $dtoClass ?? $dtoAlias;

        $ctx   = $this->pixie->getReference($pixieCode); // switches DB + ensure schema
        $owner = $ctx->ownerRef;
        $em    = $ctx->em;

        // Resolve sources (dir supports .json/.jsonl/.csv)
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
                glob(rtrim($dir, '/') . '/*.jsonl') ?: [],
                glob(rtrim($dir, '/') . '/*.csv') ?: []
            );
            if (!$sources) {
                $io->warning("No *.json/*.jsonl/*.csv in $dir");
                return 0;
            }
        }

        $io->title(sprintf(
            'Injest %s core=%s pk=%s dto=%s',
            $pixieCode, $core, $pk, $dtoClass ?? 'none'
        ));
        $coreEntity = $this->pixie->getCore($core, $owner);

        $seen = [];    // de-dupe by PK across sources
        $total = 0;

        foreach ($sources as $path) {
            $i = 0;
            $ext = strtolower(pathinfo($path, \PATHINFO_EXTENSION));
            $io->section(basename($path));

            $iter = match ($ext) {
                'json','jsonl' => $this->json->iterate($path),
                'csv' => $this->requireCsv()->iterate($path, null), // you can pass expected headers if you want
                default => null
            };
            if (!$iter) {
                $io->warning("Skipping unsupported file: $path");
                continue;
            }

            foreach ($iter as $record) {
                if (!\is_array($record)) continue;

                $idWithinCore = (string)($record[$pk] ?? '');
                if ($idWithinCore === '' || isset($seen[$idWithinCore])) {
                    continue;
                }
                $seen[$idWithinCore] = true;

                // Optional DTO normalization
                if ($dtoClass && $this->dtoMapper) {
                    try {
                        $dto  = $this->dtoMapper->mapRecord($record, $dtoClass);
                        $norm = $this->dtoMapper->toArray($dto);
                        $record['_norm'] = $norm;
                    } catch (\Throwable $e) {
                        $io->warning("DTO mapping failed for id=$idWithinCore: ".$e->getMessage());
                    }
                }

                // Upsert Row
                $rowId = Row::RowIdentifier($coreEntity, $idWithinCore);
                /** @var Row $row */
                $row = $ctx->repo(Row::class)->find($rowId) ?? new Row($coreEntity, $idWithinCore);
                if ($row->getId() !== $rowId) {
                    $em->persist($row);
                }

                // Pick label: DTO -> name/title -> generic
                $label = $record['_norm']['label'] ?? ($record['label'] ?? ($record['name'] ?? ($record['title'] ?? null)));
                $row->setLabel($label ?: ("row $core:$idWithinCore"));

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

    private function requireCsv(): CsvIngestor
    {
        if (!$this->csv) {
            throw new \RuntimeException('CsvIngestor service is not available. Install league/csv and wire CsvIngestor.');
        }
        return $this->csv;
    }
}
