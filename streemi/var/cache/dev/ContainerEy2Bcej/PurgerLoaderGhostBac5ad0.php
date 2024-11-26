<?php

namespace ContainerEy2Bcej;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'PersisterAwareInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PurgerLoader.php';

class PurgerLoaderGhostBac5ad0 extends \Fidry\AliceDataFixtures\Loader\PurgerLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'defaultPurgeMode' => [parent::class, 'defaultPurgeMode', null],
        "\0".parent::class."\0".'loader' => [parent::class, 'loader', null],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null],
        "\0".parent::class."\0".'purgerFactory' => [parent::class, 'purgerFactory', null],
        'defaultPurgeMode' => [parent::class, 'defaultPurgeMode', null],
        'loader' => [parent::class, 'loader', null],
        'logger' => [parent::class, 'logger', null],
        'purgerFactory' => [parent::class, 'purgerFactory', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PurgerLoaderGhostBac5ad0', false)) {
    \class_alias(__NAMESPACE__.'\\PurgerLoaderGhostBac5ad0', 'PurgerLoaderGhostBac5ad0', false);
}
