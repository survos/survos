<?php
declare(strict_types=1);

namespace Survos\PixieBundle\Schema;

use Survos\PixieBundle\Entity\CoreDefinition;
use Survos\PixieBundle\Entity\FieldDefinition;
use Survos\PixieBundle\Model\Config;
use Survos\PixieBundle\Service\PixieService;

final class YamlSchemaSynchronizer
{
    public function __construct(private readonly PixieService $pixie) {}

    public function sync(string $owner, Config $config, string $schemaVersion = 'v1'): void
    {
        $ctx = $this->pixie->getReference($owner);
        $em  = $ctx->em;

        $coreRepo  = $ctx->repo(CoreDefinition::class);
        $fieldRepo = $ctx->repo(FieldDefinition::class);

        foreach ($config->getTables() as $core => $table) {
            $pk  = $table->getPkName() ?? 'id';

            /** @var CoreDefinition|null $def */
            $def = $coreRepo->findOneBy(['ownerCode' => $owner, 'core' => $core]);
            if (!$def) {
                $def = new CoreDefinition(
                    id: null,
                    ownerCode: $owner,
                    core: $core,
                    pk: $pk,
                    schemaVersion: $schemaVersion
                );
            } else {
                $def->schemaVersion = $schemaVersion;
            }
            $em->persist($def);

            $trans = array_flip($table->getTranslatable() ?? []);
            $pos   = 0;

            foreach (($table->getProperties() ?? []) as $prop) {
                [$name, $type] = self::split($prop);
                [$kind, $target, $delim] = self::toKind($type);
                if (\in_array($name, ['label','name'], true)) { $kind = 'label'; }

                /** @var FieldDefinition|null $fd */
                $fd = $fieldRepo->findOneBy(['ownerCode' => $owner, 'core' => $core, 'incomingHeader' => $name]);
                if ($fd) {
                    $fd->code         = $name;
                    $fd->kind         = $kind;
                    $fd->targetCore   = $target;
                    $fd->delim        = $delim;
                    $fd->translatable = isset($trans[$name]);
                    $fd->position     = $pos++;
                } else {
                    $fd = new FieldDefinition(
                        id: null,
                        ownerCode: $owner,
                        core: $core,
                        incomingHeader: $name,
                        code: $name,
                        kind: $kind,
                        targetCore: $target,
                        delim: $delim,
                        translatable: isset($trans[$name]),
                        position: $pos++
                    );
                }
                $em->persist($fd);
            }
        }
        $em->flush();
    }

    private static function split(string $spec): array
    {
        $p = explode(':', $spec, 2);
        return [$p[0], $p[1] ?? 'text'];
    }

    private static function toKind(string $t): array
    {
        $t = trim($t);
        if (str_starts_with($t, 'rel.'))  return ['relation_one',  substr($t, 4), null];
        if (str_starts_with($t, 'list.')) return ['relation_many', preg_replace('#^list\.([^\[]+).*$#', '$1', $t), '|'];
        return $t === 'array' ? ['json_array', null, '|'] : ['json_scalar', null, null];
    }
}
