<?php

namespace ContainerJkRcFVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UZgV0I4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uZgV0I4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uZgV0I4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'heureSuplementaireRepository' => ['privates', 'App\\Repository\\HeureSuplementaireRepository', 'getHeureSuplementaireRepositoryService', true],
        ], [
            'entityManager' => '?',
            'heureSuplementaireRepository' => 'App\\Repository\\HeureSuplementaireRepository',
        ]);
    }
}
