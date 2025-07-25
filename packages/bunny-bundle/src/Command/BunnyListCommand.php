<?php

namespace Survos\BunnyBundle\Command;

use Knp\Bundle\TimeBundle\DateTimeFormatter;
use Survos\BunnyBundle\Service\BunnyService;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Attribute\Option;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Style\SymfonyStyle;
use ToshY\BunnyNet\Model\Api\Base\StorageZone\ListStorageZones;
use ToshY\BunnyNet\Model\Api\EdgeStorage\BrowseFiles\ListFiles;
use Zenstruck\Bytes;

#[AsCommand('bunny:list', 'list bunny files')]
final class BunnyListCommand extends Command
{

    public function __construct(
        private readonly BunnyService $bunnyService,
        private readonly ?DateTimeFormatter $dateTimeFormatter=null
    )
    {
        parent::__construct();
    }

    public function __invoke(
        SymfonyStyle                                                      $io,
        #[Argument('path name within zone')] string          $path='',
        #[Option('zone name', name: 'zone')] ?string         $zoneName = null,
        #[Option('list the zone names', name: 'zones')] bool $listZones = false,

    ): int
    {
        if ($listZones) {
            // if no zone, we could prompt
            if (!$baseApi = $this->bunnyService->getBaseApi()) {
                $io->error("Listing zones requires a base api key");
                return self::FAILURE;
            }

            $zones = $baseApi->request(new ListStorageZones())->getContents();
            $table = new Table($io);
            $table->setHeaderTitle($zoneName . "/" . $path);
            $headers = ['Name', 'StorageUsed','FilesStored','Id'];
            $table->setHeaders($headers);
            foreach ($zones as $zone) {
                $row = [];
                foreach ($headers as $header) {
                    $row[$header] = $zone[$header];
                }
                $id = $row['Id'];
                $row['Id'] = "<href=https://dash.bunny.net/storage/$id/file-manager>$id</>";

                $table->addRow($row);
            }
            $table->render();
            return self::SUCCESS;
        }

        if (!$zoneName) {
            $zoneName = $this->bunnyService->getStorageZone();
        }
        assert($zoneName, "missing zone name");

        $edgeStorageApi = $this->bunnyService->getEdgeApi($zoneName);
        $list = $edgeStorageApi->request(
            new ListFiles($zoneName, $path)
        )->getContents();


        // @todo: see if https://www.php.net/manual/en/class.numberformatter.php works to remove the dependency
        $table = new Table($io);
        $table->setHeaderTitle($zoneName . "/" . $path);
        $headers = ['ObjectName', 'Path','Length', 'DateCreated', 'Ago'];
        $table->setHeaders($headers);
        foreach ($list as $file) {
            $row = [];
            foreach ($headers as $header) {
                $row[$header] = $file[$header]??null;
            }
            $row['Length'] = Bytes::parse($row['Length']); // "389.79 GB"
            $row['Ago'] = $this->dateTimeFormatter?->formatDiff($file['LastChanged']);
//            $row['Url'] = "<href=https://symfony.com>Symfony Homepage</>";
            $table->addRow($row);
        }
        $table->render();
//        $io->writeln('<href=https://symfony.com>Symfony Homepage</>');

        $io->success(self::class . ' success ' . $zoneName);
        return self::SUCCESS;
    }




}
