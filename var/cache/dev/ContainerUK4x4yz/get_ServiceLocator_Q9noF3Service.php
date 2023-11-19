<?php

namespace ContainerUK4x4yz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Q9noF3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.q9noF3_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.q9noF3_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'employeRepository' => ['privates', 'App\\Repository\\EmployeRepository', 'getEmployeRepositoryService', true],
            'heureSuplementaireRepository' => ['privates', 'App\\Repository\\HeureSuplementaireRepository', 'getHeureSuplementaireRepositoryService', true],
        ], [
            'employeRepository' => 'App\\Repository\\EmployeRepository',
            'heureSuplementaireRepository' => 'App\\Repository\\HeureSuplementaireRepository',
        ]);
    }
}
