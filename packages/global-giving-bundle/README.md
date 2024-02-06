# GlobalGiving Bundle

A simple bundle that facilitates calling the Global Giving API from a Symfony application.

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

Note: There are only a handful of calls available to the API now.  I'm hoping to get an OpenAPI spec from GlobalGiving.org to make development of this bundle easier and more reliable.
