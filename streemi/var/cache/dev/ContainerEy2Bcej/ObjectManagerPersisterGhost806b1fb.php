<?php

namespace ContainerEy2Bcej;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'PersisterInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persister'.\DIRECTORY_SEPARATOR.'ObjectManagerPersister.php';

class ObjectManagerPersisterGhost806b1fb extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Persister\ObjectManagerPersister implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'metadataToRestore' => [parent::class, 'metadataToRestore', null],
        "\0".parent::class."\0".'objectChecked' => [parent::class, 'objectChecked', null],
        "\0".parent::class."\0".'objectManager' => [parent::class, 'objectManager', null],
        "\0".parent::class."\0".'persistableClasses' => [parent::class, 'persistableClasses', null],
        "\0".parent::class."\0".'unitOfWorkPersistersReflection' => [parent::class, 'unitOfWorkPersistersReflection', null],
        'metadataToRestore' => [parent::class, 'metadataToRestore', null],
        'objectChecked' => [parent::class, 'objectChecked', null],
        'objectManager' => [parent::class, 'objectManager', null],
        'persistableClasses' => [parent::class, 'persistableClasses', null],
        'unitOfWorkPersistersReflection' => [parent::class, 'unitOfWorkPersistersReflection', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ObjectManagerPersisterGhost806b1fb', false)) {
    \class_alias(__NAMESPACE__.'\\ObjectManagerPersisterGhost806b1fb', 'ObjectManagerPersisterGhost806b1fb', false);
}
