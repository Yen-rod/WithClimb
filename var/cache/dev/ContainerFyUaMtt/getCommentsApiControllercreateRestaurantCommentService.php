<?php

namespace ContainerFyUaMtt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentsApiControllercreateRestaurantCommentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TWxDQA4.App\Controller\Admin\Api\CommentsApiController::createRestaurantComment()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TWxDQA4.App\\Controller\\Admin\\Api\\CommentsApiController::createRestaurantComment()'] = ($container->privates['.service_locator.TWxDQA4'] ?? $container->load('get_ServiceLocator_TWxDQA4Service'))->withContext('App\\Controller\\Admin\\Api\\CommentsApiController::createRestaurantComment()', $container);
    }
}
