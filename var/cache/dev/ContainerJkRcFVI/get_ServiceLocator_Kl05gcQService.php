<?php

namespace ContainerJkRcFVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kl05gcQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kl05gcQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kl05gcQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'adresseRepository' => ['privates', 'App\\Repository\\AdresseRepository', 'getAdresseRepositoryService', true],
            'cVRequirementsRepository' => ['privates', 'App\\Repository\\CVRequirementsRepository', 'getCVRequirementsRepositoryService', true],
            'diplomeRepository' => ['privates', 'App\\Repository\\DiplomeRepository', 'getDiplomeRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'experienceRepository' => ['privates', 'App\\Repository\\ExperienceRepository', 'getExperienceRepositoryService', true],
            'utilisateurRepository' => ['privates', 'App\\Repository\\UtilisateurRepository', 'getUtilisateurRepositoryService', true],
        ], [
            'adresseRepository' => 'App\\Repository\\AdresseRepository',
            'cVRequirementsRepository' => 'App\\Repository\\CVRequirementsRepository',
            'diplomeRepository' => 'App\\Repository\\DiplomeRepository',
            'entityManager' => '?',
            'experienceRepository' => 'App\\Repository\\ExperienceRepository',
            'utilisateurRepository' => 'App\\Repository\\UtilisateurRepository',
        ]);
    }
}
