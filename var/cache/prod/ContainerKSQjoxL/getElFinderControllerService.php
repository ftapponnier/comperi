<?php

namespace ContainerKSQjoxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getElFinderControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'FM\ElfinderBundle\Controller\ElFinderController' shared service.
     *
     * @return \FM\ElfinderBundle\Controller\ElFinderController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['FM\\ElfinderBundle\\Controller\\ElFinderController'] = new \FM\ElfinderBundle\Controller\ElFinderController(($container->privates['twig'] ?? $container->getTwigService()), $container->parameters['fm_elfinder']);
    }
}
