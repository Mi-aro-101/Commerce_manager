<?php

namespace ContainerJkRcFVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZJoOOFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZJoOO_f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZJoOO_f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'diplomeRepository' => ['privates', 'App\\Repository\\DiplomeRepository', 'getDiplomeRepositoryService', true],
        ], [
            'diplomeRepository' => 'App\\Repository\\DiplomeRepository',
        ]);
    }
}
