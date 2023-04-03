<?php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ImportService{
public function __construct(
    private ParameterBagInterface $bag
)
{

}

    public function importMuseums(int $limit = 0): array
    {
        // from https://sic.gob.mx/datos.php?table=museo
        $json = file_get_contents($this->bag->get('kernel.project_dir') . '/data/mexican_museums.json');
        $data = json_decode($json);
        foreach ($data as $museumData) {

            dd($museumData);
        }
        return $data;
    }




}

