# GlobalGiving Bundle

A simple bundle that facilitates calling the Global 

```bash
composer require survos/global-giving-bundle
```

Get an API key at https://www.globalgiving.org/dy/v2/user/api/ and add it to your .env.local

```
# .env.local
GLOBAL_GIVING_API_KEY=your-api-key
```

# Calls

Inject the service and make the calls

```php
    #[Route('/featured', name: 'app_list_featured_projects')]
    public function listFeatured(GlobalGivingService $globalGivingService): Response
    {
        $data = $globalGivingService->getFeaturedProjects();
        return $this->render('app/index.html.twig', [
            'projects' => $data['project']
        ]);
    }

```

