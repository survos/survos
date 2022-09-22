<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\ComposerJsonManipulator\ValueObject\ComposerJsonManipulatorConfig;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->import(ComposerJsonManipulatorConfig::FILE_PATH);
};
