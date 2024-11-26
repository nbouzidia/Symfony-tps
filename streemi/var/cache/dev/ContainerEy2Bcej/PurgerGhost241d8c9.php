<?php

namespace ContainerEy2Bcej;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'PurgerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'PurgerFactoryInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'nelmio'.\DIRECTORY_SEPARATOR.'alice'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'IsAServiceTrait.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'theofidry'.\DIRECTORY_SEPARATOR.'alice-data-fixtures'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Purger'.\DIRECTORY_SEPARATOR.'Purger.php';

class PurgerGhost241d8c9 extends \Fidry\AliceDataFixtures\Bridge\Doctrine\Purger\Purger implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'manager' => [parent::class, 'manager', null],
        "\0".parent::class."\0".'purgeMode' => [parent::class, 'purgeMode', null],
        "\0".parent::class."\0".'purger' => [parent::class, 'purger', null],
        'manager' => [parent::class, 'manager', null],
        'purgeMode' => [parent::class, 'purgeMode', null],
        'purger' => [parent::class, 'purger', null],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('PurgerGhost241d8c9', false)) {
    \class_alias(__NAMESPACE__.'\\PurgerGhost241d8c9', 'PurgerGhost241d8c9', false);
}
