<?php

namespace ContainerKSQjoxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_491rxCdService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.491rxCd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.491rxCd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'newsletter' => ['privates', '.errored..service_locator.491rxCd.App\\Entity\\Newsletters\\Newsletters', NULL, 'Cannot autowire service ".service_locator.491rxCd": it references class "App\\Entity\\Newsletters\\Newsletters" but no such service exists.'],
            'user' => ['privates', '.errored..service_locator.491rxCd.App\\Entity\\Newsletters\\Users', NULL, 'Cannot autowire service ".service_locator.491rxCd": it references class "App\\Entity\\Newsletters\\Users" but no such service exists.'],
        ], [
            'em' => '?',
            'newsletter' => 'App\\Entity\\Newsletters\\Newsletters',
            'user' => 'App\\Entity\\Newsletters\\Users',
        ]);
    }
}
