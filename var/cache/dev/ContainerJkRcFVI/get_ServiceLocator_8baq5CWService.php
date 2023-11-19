<?php

namespace ContainerJkRcFVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8baq5CWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8baq5CW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8baq5CW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'testAptitude' => ['privates', '.errored..service_locator.8baq5CW.App\\Entity\\TestAptitude', NULL, 'Cannot autowire service ".service_locator.8baq5CW": it needs an instance of "App\\Entity\\TestAptitude" but this type has been excluded in "config/services.yaml".'],
        ], [
            'testAptitude' => 'App\\Entity\\TestAptitude',
        ]);
    }
}
