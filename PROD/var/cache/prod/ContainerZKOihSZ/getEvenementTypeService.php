<?php

namespace ContainerZKOihSZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEvenementTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\EvenementType' shared autowired service.
     *
     * @return \App\Form\EvenementType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\EvenementType'] = new \App\Form\EvenementType();
    }
}