<?php

namespace ContainerZKOihSZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CategorieRepository' shared autowired service.
     *
     * @return \App\Repository\CategorieRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CategorieRepository'] = new \App\Repository\CategorieRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
