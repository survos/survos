<?php

declare(strict_types=1);

namespace Survos\ApiGrid\Filter\MeiliSearch;

use ApiPlatform\Metadata\Exception\PropertyNotFoundException;
use ApiPlatform\Metadata\ResourceClassResolverInterface;
use Survos\ApiGrid\Filter\MeiliSearch\MeilISearchUtilTrait;
use ApiPlatform\Metadata\Exception\ResourceClassNotFoundException;
use ApiPlatform\Metadata\Property\Factory\PropertyMetadataFactoryInterface;
use ApiPlatform\Metadata\Property\Factory\PropertyNameCollectionFactoryInterface;
use Symfony\Component\TypeInfo\Type;
use Symfony\Component\Serializer\NameConverter\NameConverterInterface;

/**
 * Abstract class with helpers for easing the implementation of a filter.
 *
 * @experimental
 *
 */
abstract class AbstractSearchFilter implements FilterInterface
{
    use UtilTrait { getNestedFieldPath as protected; }

    public function __construct(protected PropertyNameCollectionFactoryInterface $propertyNameCollectionFactory,
                                PropertyMetadataFactoryInterface $propertyMetadataFactory,
                                ?ResourceClassResolverInterface $resourceClassResolver=null,
                                protected ?NameConverterInterface $nameConverter = null, protected ?array $properties = null)
    {
        $this->propertyMetadataFactory = $propertyMetadataFactory;
        $this->resourceClassResolver = $resourceClassResolver;
    }

    /**
     * Gets all enabled properties for the given resource class.
     */
    protected function getProperties(string $resourceClass): \Traversable
    {
        if (null !== $this->properties) {
            return yield from array_keys($this->properties);
        }

        try {
            yield from $this->propertyNameCollectionFactory->create($resourceClass);
        } catch (ResourceClassNotFoundException) {
        }
    }

    /**
     * Is the given property enabled?
     */
    protected function hasProperty(string $resourceClass, string $property): bool
    {
        return \in_array($property, iterator_to_array($this->getProperties($resourceClass)), true);
    }

    /**
     * Gets info about the decomposed given property for the given resource class.
     *
     * Returns an array with the following info as values:
     *   - the {@see Type} of the decomposed given property
     *   - is the decomposed given property an association?
     *   - the resource class of the decomposed given property
     *   - the property name of the decomposed given property
     */
    protected function getMetadata(string $resourceClass, string $property): array
    {
        $noop = [null, null, null, null];

        if (!$this->hasProperty($resourceClass, $property)) {
            return $noop;
        }

        $properties = explode('.', $property);
        $totalProperties = \count($properties);
        $currentResourceClass = $resourceClass;
        $hasAssociation = false;
        $currentProperty = null;
        $type = null;

        foreach ($properties as $index => $currentProperty) {
            try {
                $propertyMetadata = $this->propertyMetadataFactory->create($currentResourceClass, $currentProperty);
            } catch (PropertyNotFoundException) {
                return $noop;
            }

            $type = $propertyMetadata->getBuiltinTypes()[0] ?? null;

            if (null === $type) {
                return $noop;
            }

            ++$index;
            $builtinType = $type->getBuiltinType();

            if (Type::object() !== $builtinType && Type::array() !== $builtinType) {
                if ($totalProperties === $index) {
                    break;
                }

                return $noop;
            }

            if ($type->isCollection() && null === $type = $type->getCollectionValueTypes()[0] ?? null) {
                return $noop;
            }

            if (Type::array() === $builtinType && Type::object() !== $type->getBuiltinType()) {
                if ($totalProperties === $index) {
                    break;
                }

                return $noop;
            }

            if (null === $className = $type->getClassName()) {
                return $noop;
            }

            if ($isResourceClass = $this->resourceClassResolver->isResourceClass($className)) {
                $currentResourceClass = $className;
            } elseif ($totalProperties !== $index) {
                return $noop;
            }

            $hasAssociation = $totalProperties === $index && $isResourceClass;
        }

        return [$type, $hasAssociation, $currentResourceClass, $currentProperty];
    }
}
