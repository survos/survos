<?php

//$finder = (new PhpCsFixer\Finder())
//    ->in(__DIR__)
//    ->exclude('var')
//;
//

$finder = PhpCsFixer\Finder::create()
    ->in([__DIR__ . '/packages/'])
    ;

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->setRules([
        'nullable_type_declaration_for_default_null_value' => true,
//        '@Symfony' => true,
    ]);


