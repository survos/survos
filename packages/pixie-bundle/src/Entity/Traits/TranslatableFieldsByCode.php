<?php
namespace Survos\PixieBundle\Entity\Traits;

use Survos\PixieBundle\Entity\Str;

/**
 * Store per-field Str codes, expose translated strings via hooks.
 * Backing field: array<string fieldName => string strCode>
 */
trait TranslatableFieldsByCode
{
    // Map: fieldName => str.code
    private array $str_code_map = []; // NOT mapped; persist however you prefer (JSON column or dedicated columns)

    // Injected by postLoad resolver (see listener below)
    private array $_resolved_strings = []; // fieldName => translated string

    /**
     * Called by your importer when you parse source text:
     *   $row->bindTranslatable('title', $strEntity); // sets code map
     */
    public function bindTranslatable(string $field, Str $str): void
    {
        $this->str_code_map[$field] = $str->code;
    }

    /**
     * PostLoad listener sets these after bulk-resolving codes → strings for current locale
     */
    public function __setResolvedString(string $field, ?string $value): void
    {
        $this->_resolved_strings[$field] = $value ?? '';
    }

    /**
     * Property hook pattern for any field, e.g. in your entity add:
     *   public string $title { get => $this->translated('title'); set => $this->setSourceAndBind('title', $value, $srcLocale); }
     * For *source* writes during import only.
     */
    protected function translated(string $field): string
    {
        return $this->_resolved_strings[$field] ?? '';
    }

    /**
     * Helper used by importer only: capture source text, create/update Str, store code.
     * You already have this flow in your import; wire this where convenient.
     */
    protected function setSourceAndBind(callable $ensureStr, string $field, string $sourceText, string $srcLocale): void
    {
        // $ensureStr(string $text, string $srcLocale) : Str   (factory/service you own)
        $str = $ensureStr($sourceText, $srcLocale);
        $this->bindTranslatable($field, $str);
        // note: actual text shown at read-time comes from postLoad resolver
    }

    // Optional: expose raw code for debugging
    public function getStrCodeFor(string $field): ?string
    {
        return $this->str_code_map[$field] ?? null;
    }
}
