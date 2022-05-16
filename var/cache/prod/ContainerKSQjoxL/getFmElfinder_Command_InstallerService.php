<?php

namespace ContainerKSQjoxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFmElfinder_Command_InstallerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'fm_elfinder.command.installer' shared service.
     *
     * @return \FM\ElfinderBundle\Command\ElFinderInstallerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['fm_elfinder.command.installer'] = $instance = new \FM\ElfinderBundle\Command\ElFinderInstallerCommand(($container->privates['filesystem'] ?? ($container->privates['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));

        $instance->setName('elfinder:install');

        return $instance;
    }
}
