<?php

namespace ContainerTOl4FRY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerzonesUpdateOneService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3m6_kIZ.App\Controller\Admin\DashboardController::zonesUpdateOne()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3m6_kIZ.App\\Controller\\Admin\\DashboardController::zonesUpdateOne()'] = ($container->privates['.service_locator.3m6_kIZ'] ?? $container->load('get_ServiceLocator_3m6KIZService'))->withContext('App\\Controller\\Admin\\DashboardController::zonesUpdateOne()', $container);
    }
}
