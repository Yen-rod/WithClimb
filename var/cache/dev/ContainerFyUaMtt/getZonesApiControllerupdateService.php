<?php

namespace ContainerFyUaMtt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getZonesApiControllerupdateService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.47TaMP_.App\Controller\Admin\Api\ZonesApiController::update()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.47TaMP_.App\\Controller\\Admin\\Api\\ZonesApiController::update()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'zona' => ['privates', '.errored..service_locator.47TaMP_.App\\Entity\\Zonas', NULL, 'Cannot autowire service ".service_locator.47TaMP_": it needs an instance of "App\\Entity\\Zonas" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'zona' => 'App\\Entity\\Zonas',
            'entityManager' => '?',
            'validator' => '?',
        ]))->withContext('App\\Controller\\Admin\\Api\\ZonesApiController::update()', $container);
    }
}
