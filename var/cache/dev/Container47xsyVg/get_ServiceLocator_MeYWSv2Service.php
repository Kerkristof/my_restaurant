<?php

namespace Container47xsyVg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MeYWSv2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.meYWSv2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.meYWSv2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.meYWSv2.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.meYWSv2": it references class "App\\Entity\\Users" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\Users',
        ]);
    }
}
