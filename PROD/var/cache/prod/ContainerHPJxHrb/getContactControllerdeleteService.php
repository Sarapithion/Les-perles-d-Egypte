<?php

namespace ContainerHPJxHrb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllerdeleteService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private '.service_locator.s4o4C8..App\Controller\ContactController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s4o4C8..App\\Controller\\ContactController::delete()'] = ($container->privates['.service_locator.s4o4C8.'] ?? $container->load('get_ServiceLocator_S4o4C8_Service'))->withContext('App\\Controller\\ContactController::delete()', $container);
    }
}