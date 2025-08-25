<?php
declare(strict_types=1);

namespace Survos\BabelBundle\Runtime;

/**
 * Process/request-scoped translation runtime used by property hooks.
 *
 * Initialize once per request/CLI:
 *   BabelRuntime::init($translator, $locale, 'en');
 *
 * Then in hooks:
 *   $hash = BabelRuntime::hash($text, $src, $context);
 *   $txt  = BabelRuntime::lookup($hash, BabelRuntime::getLocale()) ?? $text;
 */
final class BabelRuntime
{
    private static ?string $locale = null;
    private static string $fallback = 'en';

    /** @var null|callable(string $text, string $srcLocale, ?string $context): string */
    private static $hashFn = null;

    // ---- init / setters -----------------------------------------------------

    public static function init(?string $locale, string $fallback = 'en', ?callable $hashFn = null): void
    {
        self::$locale     = $locale;
        self::$fallback   = $fallback;
        self::$hashFn     = $hashFn;
    }


    public static function setLocale(?string $locale): void
    {
        self::$locale = $locale;
    }

    public static function setFallback(string $fallback): void
    {
        self::$fallback = $fallback;
    }

    public static function setHashFn(?callable $hashFn): void
    {
        self::$hashFn = $hashFn;
    }

    // ---- getters ------------------------------------------------------------

    public static function getLocale(): ?string
    {
        return self::$locale;
    }

    public static function fallback(): string
    {
        return self::$fallback;
    }

    // ---- core ops -----------------------------------------------------------

    /**
     * Compute a deterministic key for a source string.
     * Default: xxh3 of "src\0context\0text".
     */
    public static function hash(string $text, string $srcLocale, ?string $context = null): string
    {
        if (self::$hashFn) {
            /** @var callable $fn */
            $fn = self::$hashFn;
            return $fn($text, $srcLocale, $context);
        }
        return \hash('xxh3', $srcLocale . "\0" . (string)($context ?? '') . "\0" . $text);
    }

    /**
     * Translator-agnostic lookup: we try a few common method names on your TranslatorInterface impl.
     */
// src/Runtime/BabelRuntime.php
    public static function lookup(string $hash, string $locale): ?string
    {
        // No runtime engine calls here. Hydration will set resolved values;
        // returning null makes the property hook fall back to the backing text.
        return null;
    }
}
