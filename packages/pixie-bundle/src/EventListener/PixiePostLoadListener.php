<?php
// packages/pixie-bundle/src/EventListener/PixiePostLoadListener.php

declare(strict_types=1);

namespace Survos\PixieBundle\EventListener;

use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\PostLoadEventArgs;
use Psr\Log\LoggerInterface;
use Survos\PixieBundle\Entity\Row;
use Survos\PixieBundle\Entity\Str;
use Survos\PixieBundle\Entity\StrTranslation;
use Survos\PixieBundle\Model\PixieContext;
use Survos\PixieBundle\Repository\StrRepository;
use Survos\PixieBundle\Repository\StrTranslationRepository;
use Survos\PixieBundle\Service\PixieService;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;

/**
 * Step 1:
 * - Filter to only Survos\PixieBundle\* entities
 * - Resolve $ctx so we can later iterate translatable fields from $ctx->config
 */
#[AsDoctrineListener(event: Events::postLoad)]
final class PixiePostLoadListener
{
    private const PIXIE_NS_PREFIX = 'Survos\\PixieBundle\\';

    public function __construct(
        private readonly PixieService $pixieService,
        private readonly RequestStack $requestStack,
        private PropertyAccessorInterface $propertyAccessor,
        private readonly ?LoggerInterface $logger = null,
    ) {}

    public function postLoad(PostLoadEventArgs $args): void
    {
        // if this is the CLI, don't do anything.  @todo: get from an arg.
        if (!$this->requestStack->getCurrentRequest()) {
            return;
        }
        $locale = $this->requestStack->getCurrentRequest()->getLocale();
        $entity = $args->getObject();
        // 1) Only process entities that belong to the Pixie bundle namespace
        $class = $entity::class;
        if (!str_starts_with($class, self::PIXIE_NS_PREFIX)) {
            return;
        }

        // for now, we only want rows, later we may want category and relations
        if (!in_array($class, [Row::class])) {
            return;
        }

        /** @var StrRepository $strRepository */
        $strRepository = $args->getObjectManager()->getRepository(Str::class);
        /** @var StrTranslationRepository $translationRepository */
        $translationRepository = $args->getObjectManager()->getRepository(StrTranslation::class);
        assert($translationRepository::class === StrTranslationRepository::class, $translationRepository::class . " is not StrTranslationRepository ");



        // PixieContextResolver (constructor-inject RequestStack)
//        $req = $this->requestStack->getCurrentRequest();
//        $codeFromRoute = $req?->attributes->get('pixieCode') ?? $req?->query->get('pixieCode');

        // 2) Resolve the Pixie ctx for this entity
        $ctx = $this->pixieService->getReference($this->pixieService->currentPixieCode);

        /** @var Row $entity */
        $table = $ctx->config->getTable($entity->getCoreCode());
        $values = [];
        $lang = null; // there must be a better way to get this!
        foreach ($table->getTranslatable() as $field) {
            if (!$this->propertyAccessor->isReadable($entity, $field)) {
                continue;
            }
            if ($value = $this->propertyAccessor->getValue($entity, $field)) {
                $lang = substr($value, 3, 2); // zero-based index
                /** @var Str $str */
                if ($str = $strRepository->find($value)) {
                    if ($lang === $locale) {
                        $newValue = $str->original??null;
                    } else {
                        $newValue = $str->t[$locale]??$str->original;
//                    dd($str->t);
//                    if ($translation = $translationRepository->fetchOne($value, $locale)) {
//                        dd($translation);
//                    }
                    }
                    // the problem is that if this entity gets saved, we're hosed.
                    $this->propertyAccessor->setValue($entity, $field, $newValue);

                }
                $values[] = $value;
            }
        }
//        if (count($values)) {
//            if ($lang === $locale ) {
//                // get the Str
//            } else {
//                // get the translations
//            }
//            $strs = $strRepository->findBy(['code' => $values]);
//            dd($values, $strs);
//        }
//
//        foreach ($table->getTranslatable() as $field) {
//            $actualText = $strs[$field] ?? null;
//            $this->propertyAccessor->setValue($entity, $field, $actualText)) {
//                $lang = substr($value, 3, 2); // zero-based index
//                $values[] = $value;
//            }
//        }

//        dd($entity, $ctx, $table, $values);
        if (!$ctx) {
            // Optional debug — keep quiet in prod
            $this->logger?->debug('PixiePostLoad: no ctx resolved', ['class' => $class]);
            return;
        }

        // 3) (Next step) you’ll iterate $ctx->config['translatable'] (or similar)
        //    and replace raw values with Str/StrTranslation references.
        //    For step one we only fetch ctx and prove we can access its config:


        // No mutation yet — that’s step two.
    }

    private function resolveCtx(object $entity): ?PixieContext
    {
        // Prefer a resolver that can decide based on entity instance/class, request, etc.
        // Adjust to your actual API (e.g., selectConfig, contextFor, etc.)
        // Examples you might already have:
        //   $ctx = $this->pixieService->contextFor($entity);
        //   $ctx = $this->pixieService->selectConfig($pixieCodeFromEntity);
        // Here we assume a flexible resolver:
        return $this->pixieService->contextFor($entity);
    }
}
