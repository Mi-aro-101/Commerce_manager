<?php

namespace ContainerJkRcFVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAdresseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AdresseController' shared autowired service.
     *
     * @return \App\Controller\AdresseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AdresseController.php';

        $container->services['App\\Controller\\AdresseController'] = $instance = new \App\Controller\AdresseController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\AdresseController', $container));

        return $instance;
    }
}
