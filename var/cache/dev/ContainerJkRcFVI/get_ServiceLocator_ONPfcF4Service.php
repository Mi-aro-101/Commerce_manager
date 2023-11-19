<?php

namespace ContainerJkRcFVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ONPfcF4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oNPfcF4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oNPfcF4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'adresseRepository' => ['privates', 'App\\Repository\\AdresseRepository', 'getAdresseRepositoryService', true],
            'diplomeRepository' => ['privates', 'App\\Repository\\DiplomeRepository', 'getDiplomeRepositoryService', true],
            'domaineRepository' => ['privates', 'App\\Repository\\DomaineRepository', 'getDomaineRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'experienceRepository' => ['privates', 'App\\Repository\\ExperienceRepository', 'getExperienceRepositoryService', true],
            'matrimonialeRepository' => ['privates', 'App\\Repository\\MatrimonialeRepository', 'getMatrimonialeRepositoryService', true],
            'nationaliteRepository' => ['privates', 'App\\Repository\\NationaliteRepository', 'getNationaliteRepositoryService', true],
            'serviceRepository' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService', true],
            'sexeRepository' => ['privates', 'App\\Repository\\SexeRepository', 'getSexeRepositoryService', true],
        ], [
            'adresseRepository' => 'App\\Repository\\AdresseRepository',
            'diplomeRepository' => 'App\\Repository\\DiplomeRepository',
            'domaineRepository' => 'App\\Repository\\DomaineRepository',
            'entityManager' => '?',
            'experienceRepository' => 'App\\Repository\\ExperienceRepository',
            'matrimonialeRepository' => 'App\\Repository\\MatrimonialeRepository',
            'nationaliteRepository' => 'App\\Repository\\NationaliteRepository',
            'serviceRepository' => 'App\\Repository\\ServiceRepository',
            'sexeRepository' => 'App\\Repository\\SexeRepository',
        ]);
    }
}
