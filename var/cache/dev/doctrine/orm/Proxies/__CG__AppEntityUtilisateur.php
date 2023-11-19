<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Utilisateur extends \App\Entity\Utilisateur implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'cVCandidats' => [parent::class, 'cVCandidats', null],
        "\0".parent::class."\0".'cvCandidatNote' => [parent::class, 'cvCandidatNote', null],
        "\0".parent::class."\0".'date_de_naissance' => [parent::class, 'date_de_naissance', null],
        "\0".parent::class."\0".'employe' => [parent::class, 'employe', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'mail' => [parent::class, 'mail', null],
        "\0".parent::class."\0".'mot_de_passe' => [parent::class, 'mot_de_passe', null],
        "\0".parent::class."\0".'nom_utilisateur' => [parent::class, 'nom_utilisateur', null],
        "\0".parent::class."\0".'prenom_utilisateur' => [parent::class, 'prenom_utilisateur', null],
        "\0".parent::class."\0".'roles' => [parent::class, 'roles', null],
        'cVCandidats' => [parent::class, 'cVCandidats', null],
        'cvCandidatNote' => [parent::class, 'cvCandidatNote', null],
        'date_de_naissance' => [parent::class, 'date_de_naissance', null],
        'employe' => [parent::class, 'employe', null],
        'id' => [parent::class, 'id', null],
        'mail' => [parent::class, 'mail', null],
        'mot_de_passe' => [parent::class, 'mot_de_passe', null],
        'nom_utilisateur' => [parent::class, 'nom_utilisateur', null],
        'prenom_utilisateur' => [parent::class, 'prenom_utilisateur', null],
        'roles' => [parent::class, 'roles', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
