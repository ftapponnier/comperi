<?php

namespace ContainerVIhxTCa;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExceptionListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\ExceptionListener'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\ExceptionListener(false, ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), ($container->privates['twig'] ?? $container->getTwigService()));
    }
}