<?php

namespace ContainerHPJxHrb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KPqlqjfService extends App_KernelProdDebugContainer
{
    /**
     * Gets the private '.service_locator.kPqlqjf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kPqlqjf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'evenement' => ['privates', '.errored..service_locator.kPqlqjf.App\\Entity\\Evenement', NULL, 'Cannot autowire service ".service_locator.kPqlqjf": it needs an instance of "App\\Entity\\Evenement" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'evenement' => 'App\\Entity\\Evenement',
            'entityManager' => '?',
        ]);
    }
}