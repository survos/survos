<?php

namespace App\Controller;

use League\Csv\Reader;
use Survos\KeyValueBundle\Service\KeyValueService;
use Survos\KeyValueBundle\Service\PixyImportService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Yaml\Yaml;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

#[Route('/pixy')]
class PixyController extends AbstractController
{

    public function __construct(
        private ParameterBagInterface $bag,
        #[Autowire('%data_dir%')] private string $dataDir,
        private KeyValueService $keyValueService) {

    }
    private function getPixyDbName(string $pixyName): string
    {

        //
//        return $this->dataDir .
        return $this->bag->get('data_dir') . "/$pixyName.pixy";
    }

    private function getPixyConf(string $pixyName): ?string
    {
        $dirs = [
            $this->bag->get('data_dir'),
            $this->bag->get('kernel.project_dir') . "/config/packages/pixy/",
        ];
        foreach ($dirs as $dir) {
            $fn = $dir . "/$pixyName.yaml";
            if (file_exists($fn)) {
                return $fn;
            }
        }
        return null;
    }
    #[Route('/{pixyName}', name: 'pixy_homepage')]
    public function home(ChartBuilderInterface $chartBuilder,
                         string $pixyName,
    #[MapQueryParameter] int $limit = 5
    ): Response
    {
        $pixyDbName = $this->getPixyDbName($pixyName);
        if (!file_exists($pixyDbName)) {
            dd("Import $pixyDbName first");
        }
        $firstRecords = [];

        $kv = $this->keyValueService->getStorageBox($pixyDbName);
        foreach ($kv->getTables() as $tableName) {
            $firstRecords[$tableName] = $kv->iterate($tableName)->current();
            foreach ($kv->getIndexes($tableName) as $indexName) {
                $labels =  [];
                $values = [];
                $counts = $kv->getCounts($indexName, $tableName, $limit);
                foreach ($counts as $count) {
                    $labels[] = $count['value']; // the property name
                    $values[] = $count['count'];
                    $colors[] = sprintf('rgb(%d, %d, %d)',
                        rand(0,255),
                        rand(0,255),
                        rand(0,255)
                    );
                }
                $chart = $chartBuilder->createChart(
                    str_contains($indexName, 'year') ? Chart::TYPE_LINE :
                    Chart::TYPE_PIE
                );

                $chart->setData([
                    'labels' => $labels,
                    'datasets' => [
                        [
                            'label' => $indexName . "/$tableName",
                            'backgroundColor' => $colors,
                            'borderColor' => 'rgb(255, 99, 132)',
                            'data' => $values,
                        ],
                    ],
                ]);

                $charts[$tableName][$indexName] = $chart;
            }
        }




        return $this->render('pixy/graphs.html.twig', [
            'kv' => $kv, // avoidable?/
            'firstRecords' => $firstRecords,
            'charts' => $charts,
        ]);

    }
    #[Route('/import/{pixyName}', name: 'pixy_import')]
    public function import(KeyValueService $keyValueService,
                           PixyImportService $pixyImportService,
                           string $pixyName,
                           #[MapQueryParameter] int $limit = 0,
    ): Response
    {
        // get the conf file from the configured directories (from the bundle)

        // cache wget "https://github.com/MuseumofModernArt/collection/raw/main/Artists.csv"   ?
        if ($configFilename = $this->getPixyConf($pixyName)) {
            $config = Yaml::parseFile($configFilename);
        } else {
            $config = [
                'dir' => "$pixyName"
            ];
        }
        $pixyDbName = $this->getPixyDbName($pixyName);
        $pixyImportService->import($config, $pixyDbName, limit: $limit);
        return $this->redirectToRoute('pixy_homepage', [
            'pixyName' => $pixyName
        ]);

        dd();




        $tables = ['tables'];
        foreach ($tables as $tableName => $tableData) {
            $tablesToCreate[$tableName] = $tableData['indexes'];
        }
        $kv = $keyValueService->getStorageBox($pixyDbName, $tablesToCreate);
//        dd($pixyDbName, $configFilename, $tablesToCreate);

        foreach ($tables as $tableName => $tableData) {
        $kv->map($tableData['rules'], [$tableName]);
        $kv->select($tableName);

            $fn = $this->dataDir . '/moma/' . ucfirst($tableName) . 's.csv';
            assert(file_exists($fn), $fn);
            // pixydb? phixy.db?
            $csv = Reader::createFromPath($fn, 'r');
            $csv->setHeaderOffset(0); //set the CSV header offset

            $headers = $kv->mapHeader($csv->getHeader());
            $kv->beginTransaction();
            assert(count($headers) == count(array_unique($headers)), json_encode($headers));
            foreach ($csv->getRecords($headers) as $idx => $row) {
                $kv->set($row);
//                if ($idx > 100) break;
//            dd($kv->get($row['id']));
//            dump($row); break;
            }
            $kv->commit();
            foreach ($kv->iterate() as $key => $row) {
                dump($key, $row); break;
            }
        }

        return $this->redirectToRoute('pixy_homepage');
    }
}
