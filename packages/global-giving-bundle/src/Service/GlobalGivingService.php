<?php

declare(strict_types=1);

namespace Survos\GlobalGivingBundle\Service;

use Symfony\Component\Cache\CacheItem;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GlobalGivingService
{
    public const BASE_URI = 'https://api.globalgiving.org/api/public/projectservice/';

    public function __construct(
        private HttpClientInterface $httpClient,
        private CacheInterface $cache,
        private readonly ?string $apiKey = null
    ) {
    }

    public function fetch(string $path, array $params = [], string $key=null): iterable
    {
//        public const BASE_URI = 'https://api.globalgiving.org/api/public/projectservice/all/projects?api_key=YOUR_API_KEY&nextProjectId=354";
        $params['api_key'] = $this->apiKey;

        $md5 = md5($path .  json_encode($params));
        $data = $this->cache->get($md5, fn(CacheItem $item) =>
            $this->httpClient->request('GET', self::BASE_URI . $path, [
                'query' => $params,
                'headers' => [
                    'Accept' => 'application/json',
                ]])->toArray());
        return $key ? $data[$key] : $data;
    }

    // /api/public/projectservice/all/projects/ids?api_key=YOUR_API_KEY
    // https://www.globalgiving.org/api/methods/get-all-projects-ids/
    public function getAllProjectsIds(array $params = [])
    {
        $path = 'all/projects/ids';
        return $this->fetch($path, $params, 'projects');
    }

    //
    public function getFeaturedProjects(array $params = [])
    {
        $path = 'featured/projects';
        return $this->fetch($path, $params, 'projects');
    }


    // curl -H "Accept: application/xml" -H "Content-Type: application/xml" -X GET "https://api.globalgiving.org/api/public/projectservice/projects/1883?api_key=YOUR_API_KEY"
    public function getProject(string|int $projectId, array $params = [])
    {
        $path = 'projects/' . $projectId;
        return $this->fetch($path, $params, 'project');
    }

}
