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
 * JSON/NDJSON/CSV → Row importer.
 * Stores:
 *   - Row->raw  = original record
 *   - Row->data = normalized DTO output (or original if no DTO)
 */
#[AsCommand('pixie:injest', 'Import JSON/NDJSON/CSV into Rows (file or directory)')]
final class PixieInjestCommand
{
    public function __construct(
        private readonly PixieService $pixie,
        private readonly JsonIngestor $json,
        private readonly ?CsvIngestor $csv = null,
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
        #[Option('dto-class')] ?string $dtoClass = null,
        #[Option('dto')] ?string $dtoAlias = null,    // alias of dto-class
        #[Option('batch')] int $batch = 1000,
        #[Option('limit')] int $limit = 0,
    ): int {
        $dtoClass = $dtoClass ?? $dtoAlias;

        $ctx   = $this->pixie->getReference($pixieCode); // switch DB + ensure schema
        $owner = $ctx->ownerRef;
        $em    = $ctx->em;

        // Resolve sources (dir picks up .json/.jsonl/.csv)
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
                'csv' => $this->requireCsv()->iterate($path, null),
                default => null
            };
            if (!$iter) {
                $io->warning("Skipping unsupported file: $path");
                continue;
            }

            foreach ($iter as $record) {
                if (!\is_array($record)) continue;

                // PK
                $idWithinCore = (string)($record[$pk] ?? '');
                if ($idWithinCore === '' || isset($seen[$idWithinCore])) {
                    continue;
                }
                $seen[$idWithinCore] = true;

                // Normalize via DTO (or fall back to original)
                $normalized = $record;
                if ($dtoClass && $this->dtoMapper) {
                    try {
                        $dto  = $this->dtoMapper->mapRecord($record, $dtoClass);
                        $normalized = $this->dtoMapper->toArray($dto);
                    } catch (\Throwable $e) {
                        $io->warning("DTO mapping failed for id=$idWithinCore: ".$e->getMessage());
                    }
                }

                // Upsert Row (preferred style)
                $rowId = Row::RowIdentifier($coreEntity, $idWithinCore);
                /** @var Row|null $row */
                if (!$row = $ctx->repo(Row::class)->find($rowId)) {
                    $row = new Row($coreEntity, $idWithinCore);
                    $em->persist($row);
                }

                // Label (prefer normalized label/name/title, then fallback)
                $label = $normalized['label'] ?? ($normalized['name'] ?? ($normalized['title'] ?? null));
                if (!$label && $labelField && isset($record[$labelField])) {
                    $label = (string)$record[$labelField];
                }
                $row->setLabel($label ?: ("row $core:$idWithinCore"));

                // Store raw and normalized
                // NOTE: Row has a public $raw property in your model; if not, add a setRaw().
                $row->raw = $record;            // original for debugging
                $row->setData($normalized);     // normalized for runtime

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
            throw new \RuntimeException('CsvIngestor not available. Install league/csv and wire CsvIngestor.');
        }
        return $this->csv;
    }
}
