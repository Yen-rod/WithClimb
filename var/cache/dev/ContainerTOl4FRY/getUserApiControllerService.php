<?php

namespace ContainerTOl4FRY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserApiControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\Api\UserApiController' shared autowired service.
     *
     * @return \App\Controller\Admin\Api\UserApiController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'UserApiController.php';

        $container->services['App\\Controller\\Admin\\Api\\UserApiController'] = $instance = new \App\Controller\Admin\Api\UserApiController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container)), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->privates['App\\Service\\FileUploader'] ?? $container->load('getFileUploaderService')));

        $instance->setContainer(($container->privates['.service_locator.rMO7Ull'] ?? $container->load('get_ServiceLocator_RMO7UllService'))->withContext('App\\Controller\\Admin\\Api\\UserApiController', $container));

        return $instance;
    }
}
