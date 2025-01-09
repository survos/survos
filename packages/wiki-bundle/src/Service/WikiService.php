<?php

namespace Survos\WikiBundle\Service;

use Survos\WikiBundle\Meta\WikiInterface;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Wikidata\Entity;
use Wikidata\Wikidata;

class WikiService
{
    private Wikidata $wikidata;

    public function __construct(
        private CacheInterface $cache,
        private readonly LoggerInterface $logger,
        private readonly HttpClientInterface $client,
        private readonly int $searchLimit,
        private int $cacheTimeout = 0,
    ) {
        $this->wikidata = new Wikidata();
    }

    public function getCacheTimeout(): int
    {
        return $this->cacheTimeout;
    }

    public function setCacheTimeout(int $cacheTimeout): WikiService
    {
        $this->cacheTimeout = $cacheTimeout;
        return $this;
    }

    public function getCache(): CacheInterface
    {
        return $this->cache;
    }

    public function setCache(CacheInterface $cache): WikiService
    {
        $this->cache = $cache;
        return $this;
    }

    public function getWikidata(): Wikidata
    {
        return $this->wikidata;
    }

    public function setWikidata(Wikidata $wikidata): WikiService
    {
        $this->wikidata = $wikidata;
        return $this;
    }

    public function fetchWikidataPage(?string $code, string $lang = 'en'): ?Entity
    {
        if (is_null($code)) {
            return null;
        }

        $key = $code . $lang;
        $value = $this->cache->get($key, function (ItemInterface $item) use ($code, $lang) {
            $item->expiresAfter($this->cacheTimeout);
            $content = $this->wikidata->get($code, $lang);
            return $content;
        });
        return $value;
    }


    public function searchWikiData(string $query, string $lang = 'en', int $limit = 0)
    {
        $limit = $limit ?: $this->searchLimit;
        $key = sprintf("%s.%s.%s", $query, $lang, $limit);

        $value = $this->cache->get($key, function (ItemInterface $item) use ($query, $lang, $limit) {
            $item->expiresAfter($this->cacheTimeout);
            $results = $this->wikidata->search($query, $lang, $limit);
            return $results;
        });
        return $value;
    }


    public function searchWikiDataHttp(string $q)
    {
//        https://stackoverflow.com/questions/34393884/how-to-get-image-url-property-from-wikidata-item-by-api
        $base = 'https://www.wikidata.org/w/api.php?' .
            'language=es&' .
            'action=query&type=item&format=json&origin=*&limit=4&search=';

        $url = $base . urlencode($q);

        $code = md5($url);

        // hack or ack, move this to a service, so we can use it when loading the database.
        $value = $this->cache->get($code, function (ItemInterface $item) use ($url) {
            $item->expiresAfter(3600 * 24 * 7);
            $content = $this->client->request('GET', $url)->getContent();
            $content = json_decode($content);
            return $content;
        });

        return $value->search;
    }

//https://www.wikidata.org/wiki/Special:EntityData/P105.json
// qCode or pCode
//    public function fetchWikidataPageHttp(string $code)
//    {
//        $value = $this->cache->get($code . 'x', function (ItemInterface $item) use ($code) {
//            $item->expiresAfter(3600 * 24 * 7);
//            $this->searchWikiDataHttp();
//
//
//            $content = $this->client->request('GET', $url)->getContent();
//            $content = json_decode($content);
//            try {
//            } catch (\Exception $exception) {
//                $content = null; // not found?
//            }
//            return $content;
//        });
//        return $value->entities->$code;
//    }


    private function snakValue($claim): mixed
    {
        $snak = $claim->mainsnak;
        $snakType = $snak->snaktype;
        $value = null;
        if ($snakType === 'novalue') {
            return null;
        }
        $datatype = $snak->datatype;

        if ($snakType === 'value') {
            $value = match ($datatype) {
                'commonsMedia' => $snak->datavalue->value,
                'wikibase-item' => $snak->datavalue->value->id,
                default => dd($snak)
            };
        }
        return $value;
    }


    public function findPropertyByName(string $name, WikiInterface $entity): mixed
    {
        $pCode = match ($name) {
            'parentId' => 'P171',
            'taxOn' => 'P105',
            default => null
        };
        return $pCode ? $this->findProperty($entity, $pCode): null;
    }

    // find a property within an entity, e.g. find the image
    public function findProperty(WikiInterface $entity, string $pCode)
    {
        $data = $entity->getWikiData();

//        assert(property_exists($data->claims, $pCode), "$pCode missing in claims " . json_encode(array_keys((array)$data->claims)));
        if (property_exists($data->claims, $pCode)) {
            $claims = $data->claims->$pCode;
            foreach ($claims as $claim) {
                $snak = $this->snakValue($claim);
                return $snak;
            }
        } else {
            return null;
        }
    }


    // fetch the page, return the qqcode
    public function fetchWikipediaPage(string $title, ?WikiInterface $wikiEntity = null): ?string
    {
        $value = null;
        foreach (['en'] as $lang) {
            $url = sprintf('https://%s.wikipedia.org/wiki/%s?action=raw', $lang, $title);
            $key = md5($url);

            $content = $this->cache->get($key, function (ItemInterface $item) use ($url): ?string {
                $item->expiresAfter(3600 * 24 * 2100);
                $this->logger->warning("fetching " . $url);
                try {
                    $content = $this->client->request('GET', $url)->getContent();
                } catch (\Exception) {
                    $content = null; // not found?
                }
                return $content;
            });

            if ($content) {
                if (preg_match('/Taxonbar\|from=([A-Z]\d+)/', $content, $m)) {
                    $from = $m[1];
                    $value = $from;
//                    $wikiEntity->setWikiDataId($from);
//                    $this->logger->notice("Found wikidata", [$from, $value, $url]);
                    break; //
                } else {
//                    $this->logger->warning("No taxonbar " . $title . ' ' . $url);
                }
            }
        }

        return $value;
    }
}
