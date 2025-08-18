<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Command;

use Survos\PixieBundle\Entity\Row;
use Survos\PixieBundle\Import\Ingest\JsonIngestor;
use Survos\PixieBundle\Service\PixieService;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand('pixie:injest', 'Import normalized JSON into Rows (file or directory)')]
final class PixieInjestCommand
{
    public function __construct(
        private readonly PixieService $pixie,
        private readonly JsonIngestor $json,
    ) {}

    public function __invoke(
        SymfonyStyle $io,
        #[Argument('pixieCode')] string $pixieCode,
        #[Option('file')] ?string $file = null,
        #[Option('dir')] ?string $dir = null,
        #[Option('core')] string $core = 'obj',
        #[Option('pk')] string $pk = 'id',
        #[Option('label-field')] ?string $labelField = null,
        #[Option('batch')] int $batch = 1000,
        #[Option('limit')] int $limit = 0,
    ): int {
        $ctx   = $this->pixie->getReference($pixieCode);
        $owner = $ctx->ownerRef;
        $em    = $ctx->em;

        // Resolve source(s)
        $files = [];
        if ($file) {
            $files = [$file];
        } else {
            $dir ??= getcwd() . "/data/$pixieCode/json";
            if (!is_dir($dir)) {
                $io->error("Directory not found: $dir (pass --file or --dir)");
                return 1;
            }
            $files = array_merge(glob(rtrim($dir, '/') . '/*.json') ?: [], glob(rtrim($dir, '/') . '/*.jsonl') ?: []);
            if (!$files) {
                $io->warning("No *.json or *.jsonl in $dir");
                return 0;
            }
        }

        $io->title("Injest $pixieCode core=$core pk=$pk");
        $coreEntity = $this->pixie->getCore($core, $owner);

        $total = 0;
        foreach ($files as $path) {
            $io->section(basename($path));
            $i = 0;

            foreach ($this->json->iterate($path) as $record) {
                assert(is_array($record), "record is not an array " . json_encode($record));
                if (!is_array($record)) { continue; }
                $idWithinCore = (string)($record[$pk] ?? null);
                assert($idWithinCore);
                if ($idWithinCore === '') { continue; }

                $rowId = Row::RowIdentifier($coreEntity, $idWithinCore);

                /** @var Row $row */
                if ($row = $em->getRepository(Row::class)->find($rowId)) {
                    $row = new Row($coreEntity, $idWithinCore);
                    $em->persist($row);
                }

                // Prefer label from --label-field, else common keys
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

                // property access (PHP 8.4)
                if (property_exists($row, 'label')) { $row->label = $label ?? ("row $core:$idWithinCore"); }
                if (property_exists($row, 'data'))  { $row->data  = $record; }

                if ((++$i % $batch) === 0) {
                    $em->flush();
                    $em->clear();
                }
                if ($limit && $i >= $limit) { break; }
            }

            $em->flush();
            $total += $i;
            $io->writeln("Imported $i rows from " . basename($path));
        }

        $io->success("Done. Imported $total rows to core=$core.");
        return 0;
    }
}
