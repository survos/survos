<?php

namespace App\Controller;

use Jefs42\LibreTranslate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;

class AppController extends AbstractController
{
    #[Route('/{target}', name: 'app_homepage')]
    public function home(
        LibreTranslate $libreTranslate,
        CacheInterface $cache,
        string         $target = 'es'): Response
    {
        $url = 'https://saurav.tech/NewsAPI/top-headlines/category/health/in.json';
        $data = $cache->get(md5($url), fn(CacheItem $item) => json_decode(file_get_contents($url)));

        $translations = [];
        foreach ($data->articles as $idx => $article) {
            $translations[] = $cache->get(md5($article->title).$target,
                fn(CacheItem $cacheItem) => $libreTranslate->Translate($article->title, target: $target)
            );
        }

        return $this->render('app/index.html.twig', [
            'headlines' => $data,
            'translations' => $translations,
            'languages' => $libreTranslate->Languages()
        ]);
    }
}
