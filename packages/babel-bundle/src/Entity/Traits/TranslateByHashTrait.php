<?php
declare(strict_types=1);

namespace Survos\BabelBundle\Entity\Traits;

use Survos\BabelBundle\Service\TranslationStore;

/**
 * Optional, no-DI adapter for entities to resolve a translation by hash.
 * Wire once (static) from kernel boot / a small listener.
 */
trait TranslateByHashTrait
{
    private static ?TranslationStore $_trStore = null;
    private static ?string $_trLocale = null;

    public static function setTranslationStore(?TranslationStore $s): void
    {
        self::$_trStore = $s;
    }

    public static function setTranslationLocale(?string $locale): void
    {
        self::$_trLocale = $locale;
    }

    /** Used by TranslatableHooksTrait lazy path (if listener didn't prefill). */
    public function translateHash(string $hash): ?string
    {
        $locale = self::$_trLocale ?? 'en';
        return self::$_trStore?->get($hash, $locale);
    }
}
