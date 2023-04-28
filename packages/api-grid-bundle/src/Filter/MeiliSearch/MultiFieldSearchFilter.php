<?php

namespace Survos\ApiGrid\Filter\MeiliSearch;

use Survos\ApiGrid\Filter\MeiliSearch\FilterInterface;
use ApiPlatform\Api\ResourceClassResolverInterface;
use ApiPlatform\Doctrine\Orm\Filter\AbstractFilter;
use ApiPlatform\Doctrine\Orm\Util\QueryNameGeneratorInterface;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\Metadata\Property\Factory\PropertyMetadataFactoryInterface;
use ApiPlatform\Metadata\Property\Factory\PropertyNameCollectionFactoryInterface;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;
use ApiPlatform\Exception\InvalidArgumentException;

/**
 * Selects entities where each search term is found somewhere
 * in at least one of the specified properties.
 * Search terms must be separated by spaces.
 * Search is case-insensitive.
 * All specified properties type must be string.
 * @package App\Filter
 */
class MultiFieldSearchFilter  extends AbstractSearchFilter implements FilterInterface
{
    public function __construct(PropertyNameCollectionFactoryInterface $propertyNameCollectionFactory, PropertyMetadataFactoryInterface $propertyMetadataFactory, ResourceClassResolverInterface $resourceClassResolver, ?NameConverterInterface $nameConverter = null, private string  $searchParameterName = 'search', ?array $properties = null)
    {
        parent::__construct($propertyNameCollectionFactory, $propertyMetadataFactory, $resourceClassResolver, $nameConverter, $properties);
    }

    public function apply(array $clauseBody, string $resourceClass, ?Operation $operation = null, array $context = []): array {

        dd($context);
        $words = explode(' ', $value);
        foreach ($words as $word) {
            if (empty($word)) {
                continue;
            }
            $this->addWhere($queryBuilder, $word, $queryNameGenerator->generateParameterName($property));
        }
        if(isset($context['filters']['attributes'])) {
            $filterAttributes = "";
            foreach($context['filters']['attributes'] as $attribute) {
                $filterAttributes .= " ".str_replace(",", " ", $attribute)." AND";
            }
            $clauseBody['filter'] = rtrim($filterAttributes, "AND");
        }

        if(isset($context['filters']['searchBuilder'])) {
            $filter = isset($clauseBody['filter'])? $clauseBody['filter'] :"";

            $searchBuilder = $context['filters']['searchBuilder'];
            if(isset($searchBuilder['logic']) && isset($searchBuilder['criteria'])) {
                $dataTablefilter = $this->criteria($searchBuilder['logic'], $searchBuilder['criteria']);
                $clauseBody['filter'] = ($filter != "")?$filter." AND ".$dataTablefilter:$filter.$dataTablefilter;
            }
        }

        return $clauseBody;
    }


    public function getDescription(string $resourceClass): array
    {
        $props = $this->properties;
        if (null === $props) {
            throw new \InvalidArgumentException('Properties must be specified');
        }
        return [
            $this->searchParameterName => [
                'property' => implode(', ', array_keys($props)),
                'type' => 'string',
                'required' => false,
                'swagger' => [
                    'description' => 'Selects entities where each search term is found somewhere in at least one of the specified properties',
                ],
            ],
        ];
    }
}
