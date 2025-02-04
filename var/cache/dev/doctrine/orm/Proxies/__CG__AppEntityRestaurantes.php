<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Restaurantes extends \App\Entity\Restaurantes implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'comentarios' => [parent::class, 'comentarios', null],
        "\0".parent::class."\0".'contacto' => [parent::class, 'contacto', null],
        "\0".parent::class."\0".'descripcion' => [parent::class, 'descripcion', null],
        "\0".parent::class."\0".'fotoPrincipal' => [parent::class, 'fotoPrincipal', null],
        "\0".parent::class."\0".'fotos' => [parent::class, 'fotos', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nombre' => [parent::class, 'nombre', null],
        "\0".parent::class."\0".'ubicacion' => [parent::class, 'ubicacion', null],
        "\0".parent::class."\0".'zonaRestaurante' => [parent::class, 'zonaRestaurante', null],
        'comentarios' => [parent::class, 'comentarios', null],
        'contacto' => [parent::class, 'contacto', null],
        'descripcion' => [parent::class, 'descripcion', null],
        'fotoPrincipal' => [parent::class, 'fotoPrincipal', null],
        'fotos' => [parent::class, 'fotos', null],
        'id' => [parent::class, 'id', null],
        'nombre' => [parent::class, 'nombre', null],
        'ubicacion' => [parent::class, 'ubicacion', null],
        'zonaRestaurante' => [parent::class, 'zonaRestaurante', null],
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
