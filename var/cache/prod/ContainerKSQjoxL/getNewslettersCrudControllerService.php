<?php

namespace ContainerKSQjoxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewslettersCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\NewslettersCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\NewslettersCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\NewslettersCrudController'] = $instance = new \App\Controller\Admin\NewslettersCrudController();

        $instance->setContainer(($container->privates['.service_locator.GymbEAg'] ?? $container->load('get_ServiceLocator_GymbEAgService'))->withContext('App\\Controller\\Admin\\NewslettersCrudController', $container));

        return $instance;
    }
}
