<?php

namespace ContainerHPJxHrb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementControllereditService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private '.service_locator.kPqlqjf.App\Controller\EvenementController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.kPqlqjf'] ?? $container->load('get_ServiceLocator_KPqlqjfService'));

        if (isset($container->privates['.service_locator.kPqlqjf.App\\Controller\\EvenementController::edit()'])) {
            return $container->privates['.service_locator.kPqlqjf.App\\Controller\\EvenementController::edit()'];
        }

        return $container->privates['.service_locator.kPqlqjf.App\\Controller\\EvenementController::edit()'] = $a->withContext('App\\Controller\\EvenementController::edit()', $container);
    }
}
