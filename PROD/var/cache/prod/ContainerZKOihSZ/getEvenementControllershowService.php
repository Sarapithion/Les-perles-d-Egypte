<?php

namespace ContainerZKOihSZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementControllershowService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.fcxQIzM.App\Controller\EvenementController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fcxQIzM.App\\Controller\\EvenementController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'evenement' => ['privates', '.errored..service_locator.fcxQIzM.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.fcxQIzM": it needs an instance of "App\\Entity\\Evenement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'evenement' => 'App\\Entity\\Evenement',
        ]))->withContext('App\\Controller\\EvenementController::show()', $container);
    }
}
