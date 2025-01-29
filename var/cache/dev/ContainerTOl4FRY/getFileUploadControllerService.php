<?php

namespace ContainerTOl4FRY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileUploadControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\Api\FileUploadController' shared autowired service.
     *
     * @return \App\Controller\Admin\Api\FileUploadController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'FileUploadController.php';

        $container->services['App\\Controller\\Admin\\Api\\FileUploadController'] = $instance = new \App\Controller\Admin\Api\FileUploadController(($container->privates['App\\Service\\FileUploader'] ?? $container->load('getFileUploaderService')));

        $instance->setContainer(($container->privates['.service_locator.rMO7Ull'] ?? $container->load('get_ServiceLocator_RMO7UllService'))->withContext('App\\Controller\\Admin\\Api\\FileUploadController', $container));

        return $instance;
    }
}
