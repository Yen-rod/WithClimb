<?php

namespace ContainerFyUaMtt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhotosApiControlleruploadService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IIIjvIW.App\Controller\Admin\Api\PhotosApiController::upload()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IIIjvIW.App\\Controller\\Admin\\Api\\PhotosApiController::upload()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'em' => '?',
            'slugger' => '?',
        ]))->withContext('App\\Controller\\Admin\\Api\\PhotosApiController::upload()', $container);
    }
}
