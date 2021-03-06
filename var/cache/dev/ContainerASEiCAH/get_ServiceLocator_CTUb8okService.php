<?php

namespace ContainerASEiCAH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CTUb8okService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CTUb8ok' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CTUb8ok'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'plat' => ['privates', '.errored..service_locator.CTUb8ok.App\\Entity\\Plat', NULL, 'Cannot autowire service ".service_locator.CTUb8ok": it references class "App\\Entity\\Plat" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'plat' => 'App\\Entity\\Plat',
        ]);
    }
}
