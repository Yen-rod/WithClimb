<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Zonas extends \App\Entity\Zonas implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'bloques' => [parent::class, 'bloques', null],
        "\0".parent::class."\0".'descripcion' => [parent::class, 'descripcion', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nombre' => [parent::class, 'nombre', null],
        "\0".parent::class."\0".'restaurantes' => [parent::class, 'restaurantes', null],
        "\0".parent::class."\0".'totalAscensos' => [parent::class, 'totalAscensos', null],
        "\0".parent::class."\0".'ubicacion' => [parent::class, 'ubicacion', null],
        'bloques' => [parent::class, 'bloques', null],
        'descripcion' => [parent::class, 'descripcion', null],
        'id' => [parent::class, 'id', null],
        'nombre' => [parent::class, 'nombre', null],
        'restaurantes' => [parent::class, 'restaurantes', null],
        'totalAscensos' => [parent::class, 'totalAscensos', null],
        'ubicacion' => [parent::class, 'ubicacion', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
