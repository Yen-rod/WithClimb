<?php

namespace ContainerTOl4FRY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZXwSnHpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zXwSnHp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zXwSnHp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'restaurante' => ['privates', '.errored..service_locator.zXwSnHp.App\\Entity\\Restaurantes', NULL, 'Cannot autowire service ".service_locator.zXwSnHp": it needs an instance of "App\\Entity\\Restaurantes" but this type has been excluded in "config/services.yaml".'],
        ], [
            'restaurante' => 'App\\Entity\\Restaurantes',
        ]);
    }
}
