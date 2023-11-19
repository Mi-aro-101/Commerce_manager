<?php

namespace ContainerJkRcFVI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0EvholuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0Evholu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0Evholu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'cVRequirementsRepository' => ['privates', 'App\\Repository\\CVRequirementsRepository', 'getCVRequirementsRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reponseSectionRepository' => ['privates', 'App\\Repository\\ReponseSectionRepository', 'getReponseSectionRepositoryService', true],
            'sectionRepository' => ['privates', 'App\\Repository\\SectionRepository', 'getSectionRepositoryService', true],
            'testAptitudeRepository' => ['privates', 'App\\Repository\\TestAptitudeRepository', 'getTestAptitudeRepositoryService', true],
        ], [
            'cVRequirementsRepository' => 'App\\Repository\\CVRequirementsRepository',
            'entityManager' => '?',
            'reponseSectionRepository' => 'App\\Repository\\ReponseSectionRepository',
            'sectionRepository' => 'App\\Repository\\SectionRepository',
            'testAptitudeRepository' => 'App\\Repository\\TestAptitudeRepository',
        ]);
    }
}
