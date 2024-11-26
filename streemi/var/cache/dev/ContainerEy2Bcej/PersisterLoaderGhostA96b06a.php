<?php

namespace ContainerEy2Bcej;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'PersisterAwareInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'PersisterLoader.php';

class PersisterLoaderGhostA96b06a extends \Fidry\AliceDataFixtures\Loader\PersisterLoader implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'loader' => [parent::class, 'loader', null],
        "\0".parent::class."\0".'logger' => [parent::class, 'logger', null],
        "\0".parent::class."\0".'persister' => [parent::class, 'persister', null],
        "\0".parent::class."\0".'processors' => [parent::class, 'processors', null],
        'loader' => [parent::class, 'loader', null],
        'logger' => [parent::class, 'logger', null],
        'persister' => [parent::class, 'persister', null],
        'processors' => [parent::class, 'processors', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PersisterLoaderGhostA96b06a', false)) {
    \class_alias(__NAMESPACE__.'\\PersisterLoaderGhostA96b06a', 'PersisterLoaderGhostA96b06a', false);
}
