<?php

namespace ContainerZKOihSZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticleControllerdeleteService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.AazXZCq.App\Controller\ArticleController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AazXZCq.App\\Controller\\ArticleController::delete()'] = ($container->privates['.service_locator.AazXZCq'] ?? $container->load('get_ServiceLocator_AazXZCqService'))->withContext('App\\Controller\\ArticleController::delete()', $container);
    }
}