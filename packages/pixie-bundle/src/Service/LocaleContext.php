<?php
// src/Service/LocaleContext.php

declare(strict_types=1);

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Translation\LocaleSwitcher;
use Symfony\Contracts\Translation\LocaleAwareInterface;

final class LocaleContext
{
    private string $current;

    /**
     * @param LocaleAwareInterface|null $translator Any LocaleAware service (translator is fine)
     * @param LocaleSwitcher|null $switcher Optional; if available, it switches all LocaleAware services
     * @param string $default '%kernel.default_locale%'
     * @param string[] $enabled '%kernel.enabled_locales%'
     */
    public function __construct(
        private ?LocaleSwitcher $switcher = null,
        #[Autowire(service: 'translator', lazy: true)] private ?LocaleAwareInterface $translator = null,
        #[Autowire('%kernel.default_locale%')] private string $default = 'en',
        #[Autowire('%kernel.enabled_locales%')] private array $enabled = [],
    ) {
        $this->current = $this->default;
        \Locale::setDefault($this->current);
        if ($this->switcher) {
            $this->switcher->setLocale($this->current);
        } elseif ($this->translator) {
            $this->translator->setLocale($this->current);
        }
    }

    public function get(): string
    {
        return $this->current;
    }

    public function set(string $locale): void
    {
        $locale = $this->normalize($locale);
        $this->assertSupported($locale);

        $this->current = $locale;
        \Locale::setDefault($locale);

        if ($this->switcher) {
            $this->switcher->setLocale($locale);   // affects all LocaleAware services
        } elseif ($this->translator) {
            $this->translator->setLocale($locale); // at least keep the translator in sync
        }
    }

    /**
     * Temporarily switch locale for the duration of $callback.
     * Restores the previous locale even if an exception is thrown.
     *
     * @template T
     * @param callable():T $callback
     * @return T
     */
    public function run(string $locale, callable $callback): mixed
    {
        $locale = $this->normalize($locale);
        $this->assertSupported($locale);

        if ($this->switcher) {
            return $this->switcher->runWithLocale($locale, $callback);
        }

        $prev = $this->get();
        $this->set($locale);
        try {
            return $callback();
        } finally {
            $this->set($prev);
        }
    }

    private function normalize(string $locale): string
    {
        // allow "es_MX" input; normalize to "es-MX"
        return str_replace('_', '-', trim($locale));
    }

    private function assertSupported(string $locale): void
    {
        if ($this->enabled && !in_array($locale, $this->enabled, true)) {
            throw new \InvalidArgumentException(sprintf(
                'Unsupported locale "%s". Allowed: %s',
                $locale, implode(', ', $this->enabled)
            ));
        }
    }
}
