<?php

namespace ContainerUK4x4yz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Txy0xBzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Txy0xBz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Txy0xBz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'nationalite' => ['privates', '.errored..service_locator.Txy0xBz.App\\Entity\\Nationalite', NULL, 'Cannot autowire service ".service_locator.Txy0xBz": it needs an instance of "App\\Entity\\Nationalite" but this type has been excluded in "config/services.yaml".'],
        ], [
            'nationalite' => 'App\\Entity\\Nationalite',
        ]);
    }
}
