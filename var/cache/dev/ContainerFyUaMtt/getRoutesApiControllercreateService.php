<?php

namespace ContainerFyUaMtt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRoutesApiControllercreateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Dh9KbkN.App\Controller\Admin\Api\RoutesApiController::create()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Dh9KbkN.App\\Controller\\Admin\\Api\\RoutesApiController::create()'] = ($container->privates['.service_locator.Dh9KbkN'] ?? $container->load('get_ServiceLocator_Dh9KbkNService'))->withContext('App\\Controller\\Admin\\Api\\RoutesApiController::create()', $container);
    }
}
