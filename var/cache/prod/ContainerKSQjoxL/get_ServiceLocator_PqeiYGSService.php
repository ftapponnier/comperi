<?php

namespace ContainerKSQjoxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PqeiYGSService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.pqeiYGS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pqeiYGS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eventDispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
            'httpKernel' => ['services', 'http_kernel', 'getHttpKernelService', false],
            'loader' => ['services', 'fm_elfinder.loader', 'getFmElfinder_LoaderService', true],
        ], [
            'eventDispatcher' => '?',
            'httpKernel' => '?',
            'loader' => '?',
        ]);
    }
}
