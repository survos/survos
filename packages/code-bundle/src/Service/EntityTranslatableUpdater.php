<?php
declare(strict_types=1);

namespace Survos\CodeBundle\Service;

use PhpParser\Comment\Doc;
use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\Namespace_;
use PhpParser\Node\Stmt\Property;
use PhpParser\Node\Stmt\Use_;
use PhpParser\Node\Stmt\UseUse;
use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter\Standard as Pretty;
use Psr\Log\LoggerInterface;

final class EntityTranslatableUpdater
{
    private Pretty $pp;

    public function __construct(private readonly LoggerInterface $logger)
    {
        $this->pp = new Pretty();
    }

    public function updateEntity(
        string $entityPath,
        string $entityFqcn,
        string $traitFqcn,
        array $fieldNames,
        bool $dryRun = false,
        bool $backup = false
    ): bool {
        $code = @file_get_contents($entityPath);
        if ($code === false) {
            $this->logger->error('Cannot read entity file', ['path' => $entityPath]);
            throw new \RuntimeException("Cannot read $entityPath");
        }

        $parser = (new ParserFactory())->createForHostVersion();
        $ast = $parser->parse($code);
        if (!$ast) {
            $this->logger->error('PhpParser failed to parse entity', ['path' => $entityPath]);
            throw new \RuntimeException("Parse failed for $entityPath");
        }

        $ns = null;  /** @var Namespace_ $ns */
        $class = null; /** @var Class_ $class */
        foreach ($ast as $stmt) {
            if ($stmt instanceof Namespace_) {
                $ns = $stmt;
                foreach ($ns->stmts as $s) {
                    if ($s instanceof Class_) { $class = $s; break 2; }
                }
            }
        }
        if (!$ns || !$class) {
            $this->logger->error('Namespace/class not found', ['path' => $entityPath]);
            throw new \RuntimeException("Namespace/class not found in $entityPath");
        }

        $traitShort = substr($traitFqcn, strrpos($traitFqcn, '\\') + 1);
        $ifaceFqcn  = 'Survos\\BabelBundle\\Contract\\TranslatableResolvedInterface';
        $ifaceShort = 'TranslatableResolvedInterface';

        // Header imports
        $imports = [
            $ifaceFqcn,
            'Survos\\BabelBundle\\Entity\\Traits\\TranslatableHooksTrait',
            $traitFqcn,
        ];
        $addedUses = $this->ensureUses($ns, $imports);

        // Implements: prefer short if imported
        $this->normalizeImplementsToShort($class, $ifaceFqcn, $ifaceShort);

        // Traits inside class: short names
        $addedTraits = [];
        if ($this->ensureTraitUseShort($class, 'TranslatableHooksTrait')) $addedTraits[] = 'TranslatableHooksTrait';
        if ($this->ensureTraitUseShort($class, $traitShort)) $addedTraits[] = $traitShort;

        $removed    = $this->removeConflictingProperties($class, $code, $fieldNames);
        $annotated  = $this->addPropertyAnnotations($class, $fieldNames);

        $this->logger->info('Entity transform summary', compact('addedUses','addedTraits','removed','annotated'));

        $new = $this->pp->prettyPrintFile($ast);
        if ($new === $code) {
            $this->logger->warning('No changes detected (already up-to-date?)', ['entity' => $entityFqcn]);
            return false;
        }

        if ($dryRun) {
            echo "--- original\n".$code."\n+++ updated\n".$new."\n";
            return true;
        }

        if ($backup) { @copy($entityPath, $entityPath.'.bak'); }
        if (@file_put_contents($entityPath, $new) === false) {
            $this->logger->error('Failed to write updated entity', ['path' => $entityPath]);
            throw new \RuntimeException("Failed to write $entityPath");
        }

        $this->logger->info('Entity updated successfully', ['path' => $entityPath]);
        return true;
    }

    private function ensureUses(Namespace_ $ns, array $fqcnList): array
    {
        $added = [];
        foreach ($fqcnList as $fq) {
            if ($this->hasUse($ns, $fq)) continue;
            array_unshift($ns->stmts, new Use_([new UseUse(new Name($fq))]));
            $added[] = $fq;
        }
        return $added;
    }
    private function hasUse(Namespace_ $ns, string $fqcn): bool
    {
        foreach ($ns->stmts as $s) {
            if ($s instanceof Use_) foreach ($s->uses as $u) if ($u->name->toString() === $fqcn) return true;
        }
        return false;
    }

    private function normalizeImplementsToShort(Class_ $class, string $ifaceFqcn, string $ifaceShort): void
    {
        // drop FQCN if present
        foreach ($class->implements as $i => $impl) {
            if ($impl->toString() === $ifaceFqcn) {
                unset($class->implements[$i]);
            }
        }
        // ensure short once
        foreach ($class->implements as $impl) {
            if ($impl->toString() === $ifaceShort) return;
        }
        $class->implements[] = new Name($ifaceShort);
    }

    private function ensureTraitUseShort(Class_ $class, string $traitShort): bool
    {
        foreach ($class->stmts as $s) {
            if ($s instanceof Stmt\TraitUse) {
                foreach ($s->traits as $t) {
                    $tShort = substr($t->toString(), strrpos($t->toString(), '\\') + 1);
                    if ($tShort === $traitShort) return false;
                }
            }
        }
        array_unshift($class->stmts, new Stmt\TraitUse([new Name($traitShort)]));
        return true;
    }

    private function removeConflictingProperties(Class_ $class, string $origSource, array $fieldNames): array
    {
        $removed = [];

        foreach ($class->stmts as $idx => $stmt) {
            if (!$stmt instanceof Property) continue;

            $hasTranslatable = false;
            foreach ($stmt->attrGroups as $g) foreach ($g->attrs as $a) {
                $n = $a->name->toString();
                if ($n === 'Translatable' || $n === 'Survos\\BabelBundle\\Attribute\\Translatable') { $hasTranslatable = true; break; }
            }
            if (!$hasTranslatable) continue;

            foreach ($stmt->props as $prop) {
                $name = $prop->name->toString();
                if (!\in_array($name, $fieldNames, true)) continue;

                $stub = "/* Translated field '$name' moved to *TranslationsTrait.\n".
                        "   To revert: remove the trait and uncomment below.\n".
                        "   ".$this->pp->prettyPrint([$stmt])."\n*/";
                $class->stmts[$idx] = new Stmt\Nop([ 'comments' => [ new Doc($stub) ] ]);
                $removed[] = $name;
            }
        }

        // heuristic for hooked blocks (if any existed)
        foreach ($fieldNames as $name) {
            $pattern = '/(#[^\n]*\n\s*)*public\s+[^\$]*\$'.preg_quote($name,'/').'\s*\{.*?\}/s';
            if (preg_match($pattern, $origSource, $m)) {
                $stub = "/* Hooked translated field '$name' moved to *TranslationsTrait.\n".
                        "   To revert: remove the trait and uncomment below.\n".
                        "   ".preg_replace('/\n/', "\n   ", trim($m[0]))."\n*/\n";
                array_unshift($class->stmts, new Stmt\Nop(['comments' => [new Doc($stub)]]));
                $removed[] = $name.' (hook)';
            }
        }
        return $removed;
    }

    private function addPropertyAnnotations(Class_ $class, array $fieldNames): array
    {
        $added = [];
        $doc = $class->getDocComment();
        $lines = $doc ? explode("\n", $doc->getText()) : ["/**", " */"];
        if (trim(end($lines)) !== '*/') $lines[] = ' */';

        foreach ($fieldNames as $field) {
            $annotation = " * @property string|null \$$field [translatable via *TranslationsTrait]";
            if (!in_array($annotation, $lines, true)) {
                array_splice($lines, count($lines)-1, 0, $annotation);
                $added[] = $field;
            }
        }
        $class->setDocComment(new Doc(implode("\n", $lines)));
        return $added;
    }
}
