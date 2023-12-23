<?php

namespace Survos\ApiGrid\Components;

use ApiPlatform\Doctrine\Orm\State\CollectionProvider;
use Psr\Log\LoggerInterface;
use Survos\ApiGrid\Components\Common\TwigBlocksInterface;
use Survos\ApiGrid\Model\Column;
use Survos\ApiGrid\Service\DatatableService;
use Survos\ApiGrid\State\MeiliSearchStateProvider;
use Survos\ApiGrid\TwigBlocksTrait;
use Survos\InspectionBundle\Services\InspectionService;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Twig\Environment;

#[AsTwigComponent('api_grid', template: '@SurvosApiGrid/components/api_grid.html.twig')]
class ApiGridComponent implements TwigBlocksInterface
{
    use TwigBlocksTrait;

    public function __construct(
        private Environment $twig,
        private LoggerInterface $logger,
        private RequestStack $requestStack,
        private DatatableService $datatableService,
        private InspectionService $inspectionService,
        private UrlGeneratorInterface $urlGenerator,
        public ?string $stimulusController,
        private bool $meili = false,
    ) {
//        if ($stack = $this->requestStack->getCurrentRequest()) {
//            $this->filter = $stack->query->all();
//        }
//        $this->filter = $this->requestStack->getCurrentRequest()?->query->all();
        //        ='@survos/grid-bundle/api_grid';
    }

    public iterable $data;

    public array $columns = [];
    public array $globals = [];
    public array $searchBuilderFields = [];

    public ?string $caller = null;
    public array|object|null $schema = null;

    public ?string $class = null;
    public ?string $index = null; // name of the meili index
    public string $dom='lfrtipP';
    public int $pageLength=50;
    public string $searchPanesDataUrl; // maybe deprecate this?
    public ?string $apiGetCollectionUrl=null;
    public array  $apiGetCollectionParams = [];
    public bool $trans = true;
    public string|bool|null $domain = null;

    public bool $search = true;
    public string $scrollY = '70vh';
    public array $filter = [];
    public bool $useDatatables = true;

    public ?string $source = null;
    public ?string $style = 'spreadsheet';

    public ?string $locale = null; // shouldn't be necessary, but sanity for testing.

    public ?string $path = null;
    public bool $info = false;
    public ?string $tableId = null;
    public string $tableClasses = '';


    public function getLocale(): string
    {
        return $this->requestStack->getParentRequest()->getLocale();
    }

    public function getDefaultColumns(): array
    {
        if ($this->class) {
            $settings = $this->datatableService->getSettingsFromAttributes($this->class);
        } else {
            $settings = []; // really settings should probably be passed in via a json schema or something like that.
        }
        return $settings;
    }
    public function getNormalizedColumns(): iterable
    {
        if ($this->class) {
            if (!$this->index) {
                $this->index =  MeiliSearchStateProvider::getSearchIndexObject($this->class);
            }
        }
        // really we're getting the schema from the PHP Attributes here.

        $settings = $this->getDefaultColumns();
        return $this->datatableService->normalizedColumns($settings, $this->columns, $this->getTwigBlocks());
    }

    public function searchPanesColumns(): int
    {
        $count = 0;
        // count the number, if > 6 we could figured out the best layout
        foreach ($this->normalizedColumns() as $column) {
//            dd($column);
            if ($column->inSearchPane) {
                $count++;
            }
        }
        $count = min($count, 6);
        return $count;
    }

    /**
     * @return array<string, Column>
     */
    public function GridNormalizedColumns(): iterable
    {
        $normalizedColumns = [];
        foreach ($this->columns as $c) {
            if (empty($c)) {
                continue;
            }
            if (is_string($c)) {
                $c = [
                    'name' => $c,
                ];
            }
            assert(is_array($c));
            $column = new Column(...$c);
            if ($column->condition) {
                $normalizedColumns[$column->name] = $column;
            }
        }
        return $normalizedColumns;
    }

    public function mount(string $class, bool $meili=false) // , string $apiGetCollectionUrl,  array  $apiGetCollectionParams = [])
    {
        $urls = $this->inspectionService->getAllUrlsForResource($class);
        $route = $urls[$meili ? MeiliSearchStateProvider::class : CollectionProvider::class];
        if ($meili) {
            $indexName = (new \ReflectionClass($class))->getShortName();
            $params = ['indexName' => $indexName];
            if (!$this->apiGetCollectionUrl) {
                $this->apiGetCollectionUrl =  $this->urlGenerator->generate($route, $params??[]);
            }
        }
        dd($this->inspectionService->getAllUrlsForResource($class));
        return;

        dd($urls, $class, $meili, $route->getPath());
        return;
        dd(func_get_args());;
        dd($this->apiUrl);
    }


}
