<?php

namespace ContainerSDgf5RH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AB9nIPhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aB9nIPh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aB9nIPh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.aB9nIPh.App\\Entity\\Newsletters\\Users', NULL, 'Cannot autowire service ".service_locator.aB9nIPh": it references class "App\\Entity\\Newsletters\\Users" but no such service exists.'],
        ], [
            'em' => '?',
            'user' => 'App\\Entity\\Newsletters\\Users',
        ]);
    }
}
