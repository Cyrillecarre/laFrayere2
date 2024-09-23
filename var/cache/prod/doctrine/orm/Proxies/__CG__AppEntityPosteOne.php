<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PosteOne extends \App\Entity\PosteOne implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'background_color' => [parent::class, 'background_color', null],
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'end' => [parent::class, 'end', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'isApprouved' => [parent::class, 'isApprouved', null],
        "\0".parent::class."\0".'phoneNumber' => [parent::class, 'phoneNumber', null],
        "\0".parent::class."\0".'start' => [parent::class, 'start', null],
        "\0".parent::class."\0".'title' => [parent::class, 'title', null],
        'background_color' => [parent::class, 'background_color', null],
        'email' => [parent::class, 'email', null],
        'end' => [parent::class, 'end', null],
        'id' => [parent::class, 'id', null],
        'isApprouved' => [parent::class, 'isApprouved', null],
        'phoneNumber' => [parent::class, 'phoneNumber', null],
        'start' => [parent::class, 'start', null],
        'title' => [parent::class, 'title', null],
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
