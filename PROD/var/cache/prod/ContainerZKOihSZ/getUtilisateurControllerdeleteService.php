<?php

namespace ContainerZKOihSZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisateurControllerdeleteService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.LVPv12D.App\Controller\UtilisateurController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LVPv12D.App\\Controller\\UtilisateurController::delete()'] = ($container->privates['.service_locator.LVPv12D'] ?? $container->load('get_ServiceLocator_LVPv12DService'))->withContext('App\\Controller\\UtilisateurController::delete()', $container);
    }
}
