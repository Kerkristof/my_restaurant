<?php

namespace Container47xsyVg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlatTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PlatType' shared autowired service.
     *
     * @return \App\Form\PlatType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PlatType.php';

        return $container->privates['App\\Form\\PlatType'] = new \App\Form\PlatType();
    }
}
