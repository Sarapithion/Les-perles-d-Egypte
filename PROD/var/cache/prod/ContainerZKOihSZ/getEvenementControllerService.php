<?php

namespace ContainerZKOihSZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\EvenementController' shared autowired service.
     *
     * @return \App\Controller\EvenementController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\EvenementController'] = $instance = new \App\Controller\EvenementController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\EvenementController', $container));

        return $instance;
    }
}