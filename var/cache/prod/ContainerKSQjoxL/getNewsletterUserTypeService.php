<?php

namespace ContainerKSQjoxL;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNewsletterUserTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\NewsletterUserType' shared autowired service.
     *
     * @return \App\Form\NewsletterUserType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\NewsletterUserType'] = new \App\Form\NewsletterUserType();
    }
}