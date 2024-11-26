<?php

namespace ContainerEy2Bcej;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'SimpleLoader.php';

class SimpleLoaderGhost5a58aa3 extends \Fidry\AliceDataFixtures\Loader\SimpleLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'filesLoader' => [parent::class, 'filesLoader', null],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null],
        'filesLoader' => [parent::class, 'filesLoader', null],
        'logger' => [parent::class, 'logger', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('SimpleLoaderGhost5a58aa3', false)) {
    \class_alias(__NAMESPACE__.'\\SimpleLoaderGhost5a58aa3', 'SimpleLoaderGhost5a58aa3', false);
}
