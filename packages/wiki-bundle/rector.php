<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromAssignsRector;
use Rector\Set\ValueObject\SetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src'
    ])
    // uncomment to reach your current PHP version
    ->withPhpSets(php82: true)
    ->withSets([
        SetList::TYPE_DECLARATION,
    ])
    ->withRules([
        TypedPropertyFromAssignsRector::class,
        AddVoidReturnTypeWhereNoReturnRector::class,
    ]);
