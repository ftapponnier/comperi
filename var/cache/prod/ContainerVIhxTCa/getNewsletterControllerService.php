<?php

namespace ContainerVIhxTCa;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsletterControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\NewsletterController' shared autowired service.
     *
     * @return \App\Controller\NewsletterController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\NewsletterController'] = $instance = new \App\Controller\NewsletterController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\NewsletterController', $container));

        return $instance;
    }
}
