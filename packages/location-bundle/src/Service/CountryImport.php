<?php


namespace Survos\LocationBundle\Service;


use Survos\LocationBundle\Entity\Location;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;
use GuzzleHttp\Promise\Promise;
use SplFileObject;
use Survos\LocationBundle\Service\ImportInterface;

/**
 * Class CountryImport
 * @author Chris Bednarczyk <chris@tourradar.com>
 * @package Survos\LocationBundle\Import
 */
class CountryImport implements ImportInterface
{

    /**
     * @var EntityManager
     */
    protected $em;

    public function __construct(ManagerRegistry $registry)
    {
        // since we don't know EM is associated with the Location table, pass in the registry instead.
        $this->em = $registry->getManagerForClass(Location::class);
    }


    /**
     * @param string $filePath
     * @param callable|null $progress
     * @return bool
     * @author Chris Bednarczyk <chris@tourradar.com>
     */
    public function import($filePath, ?callable $progress = null): bool
    {
        assert(is_file($filePath), $filePath);
        $file = new SplFileObject($filePath);
        $file->setFlags(SplFileObject::READ_CSV | SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);
        $file->setCsvControl("\t");
        $file->seek(PHP_INT_MAX);
        $max = $file->key();
        $file->seek(1); //skip header

        $countryRepo = $this->em->getRepository("BordeuxGeoNameBundle:Country");

        $pos = 0;

        $this->em
            ->getConnection()
            ->beginTransaction();

        foreach ($file as $row) {
            $row = array_map('trim',$row);

            if(count($row) < 17){
                continue;
            }

            list(
                $iso,
                $iso3,
                $isoNumeric,
                $fips,
                $name,
                $capital,
                $area,
                $population,
                $continent,
                $tld,
                $currency,
                $currencyName,
                $phone,
                $postalFormat,
                $postalRegex,
                $languages,
                $geoNameId,
                $neighbours
                ) = $row;


            if(!is_numeric($geoNameId)){
                continue;
            }


            $object = $countryRepo->find($geoNameId) ?: new Country($geoNameId);
            $object->setId($geoNameId);
            $object->setIso($iso);
            $object->setIso3($iso3);
            $object->setIsoNumeric($isoNumeric);
            $object->setFips($fips ?: null);
            $object->setName($name ?: null);
            $object->setCapital($capital ?: null);
            $object->setArea($area ?: 0);
            $object->setPopulation($population ?: 0);
            $object->setTld($tld ?: null);
            $object->setCurrency($currency ?: null);
            $object->setCurrencyName($currencyName ?: null);
            $phone = explode(" and ", $phone ?: "");
            $phone = reset($phone);
            $phone = preg_replace('/\D/', '', $phone);
            $object->setPhonePrefix($phone ?: null);
            $object->setPostalFormat($postalFormat ?: null);
            $object->setPostalRegex($postalRegex ?: null);
            $object->setLanguages(explode(",", $languages) ?: null);
            $object->setGeoName(
                $this->em->getRepository("BordeuxGeoNameBundle:GeoName")
                ->find($geoNameId)
            );


            $this->em->persist($object);

            is_callable($progress) && $progress(($pos++) / $max);

            if($pos % 100){
                $this->em->flush();
                $this->em->clear();
            }
        }

        $this->em->flush();
        $this->em->clear();

        $this->em
            ->commit();


        $geoNameTableName = $this->em
            ->getClassMetadata("BordeuxGeoNameBundle:GeoName")
            ->getTableName();

        $countryTableName = $this->em
            ->getClassMetadata("BordeuxGeoNameBundle:Country")
            ->getTableName();

        $sql = <<<UpdateSelect
            UPDATE
                {$geoNameTableName} 
            SET
                country_id = (
                    SELECT 
                        id
                    FROM
                        {$countryTableName} _c
                    WHERE
                       _c.iso = {$geoNameTableName}.country_code
                    LIMIT 1
                )
UpdateSelect;

        $this->em
            ->getConnection()
            ->executeStatement($sql);


        return true;
    }

}
