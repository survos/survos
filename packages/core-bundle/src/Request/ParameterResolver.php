<?php

namespace Survos\CoreBundle\Request;

use Doctrine\ORM\EntityManagerInterface;
use Survos\CoreBundle\Entity\RouteParametersInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use function Symfony\Component\String\u;

// use Zenstruck\Metadata; maybe someday

class ParameterResolver implements ValueResolverInterface
{
    public function __construct(
        // it's possible that core-bundle is included in a project (like noise) with no entity manager)
        private ?EntityManagerInterface $entityManager=null
    )
    {
    }


    /**
     * @return array<mixed>
     */
    public function resolve(Request $request, ArgumentMetadata $argument): array
    {
        if (!$this->entityManager) {
            return [];
        }
        // keep track of the history in case there's multiple params, e.g. {state}/{city}
        static $history = [];
        // get the argument type (e.g. BookingId)
        $argumentType = $argument->getType();

        if (!is_subclass_of($argumentType, RouteParametersInterface::class)) {
            return [];
        }

        $lookupParams = [];
        if (method_exists($argument, 'getUniqueIdentifiers')) {
            // @todo: use the method...
            $lookupParams = $argument->getUniqueIdentifiers();
//                assert(false, $argumentType . " should declare a UNIQUE_PARAMETERS constant");
        } else {
            if (defined($const=$argumentType.'::UNIQUE_PARAMETERS')) {
                foreach (constant($const) as $param => $getter) {
                    if (class_exists($getter)) {
                        // hack!!
                        $entityParam = u($param)->before('Id')->toString();
                        $lookupParams[$entityParam] = $history[$param];
                    } else {
                        if ($value = $request->attributes->get($param)) {
                            $lookupParams[$getter] = $value;
                        }
                    }
                }
            }
        }


        if (!empty($lookupParams)) {
            $em = $this->entityManager;
            $conn = $em->getConnection();
            $repository = $this->entityManager->getRepository($argumentType);
//            dump($lookupParams, $this->entityManager, $conn, $argument, $argumentType, $repository, $repository::class);
            if (count($lookupParams) > 1) dd($lookupParams);
            if ($entity = $repository->findOneBy($lookupParams)) {
                $history[$param] = $entity;
                return [$entity];
            } else {
                assert(false, "Missing $argumentType parameter");
//                dd(missingEntity: $lookupParams);
            }
        }
        return [];
    }
}
