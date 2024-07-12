<?php

declare(strict_types=1);

namespace Survos\GeoapifyBundle\Service;

use Symfony\Component\Cache\CacheItem;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeoapifyService
{
    public function __construct(
        private ?string $apiKey=null,
        private ?CacheInterface $cache=null,
        private ?HttpClientInterface $httpClient=null
    )
    {
    }

    public function reverseGeocode(float|string $lat, float|string $lng): ?array
    {
        $key = sprintf('%s-%s', $lat, $lng);
        return $this->cache
            ? $this->cache->get($key, fn(CacheItem $item) => $this->reverseApiCall($lat, $lng))
            : $this->reverseApiCall($lat, $lng);
    }

    public function reverseApiCall(float|string $lat, float|string $lng): ?array
    {
        // https://myprojects.geoapify.com/api/SaXR1ujolOktGdYjGwMW/keys
        $url = sprintf('https://api.geoapify.com/v1/geocode/reverse?lat=%s&lon=%s&apiKey=%s', $lat, $lng, $this->apiKey);
        if ($this->httpClient) {
            $request = $this->httpClient->request('GET', $url);
            $statusCode = $request->getStatusCode();
            if ($statusCode === 200) {
                return $request->toArray();
            }
        } else {
            // or use curl?
            return json_decode(file_get_contents($url), true);
        }
        // handle exceptions?
        return null;
//        $data = $json['data']; // json_decode($json, true);
//        return $data['features'][0]['properties'];
    }

}
