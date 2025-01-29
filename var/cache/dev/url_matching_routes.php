<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/ascensos/user/list' => [[['_route' => 'api_ascensos_user', '_controller' => 'App\\Controller\\Admin\\Api\\ClimbsApiController::getUserAscensos'], null, ['GET' => 0], null, false, false, null]],
        '/api/comments/create' => [[['_route' => 'api_comment_create', '_controller' => 'App\\Controller\\Admin\\Api\\CommentsApiController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/upload/temp' => [[['_route' => 'upload_temp', '_controller' => 'App\\Controller\\Admin\\Api\\FileUploadController::uploadTemp'], null, ['POST' => 0], null, false, false, null]],
        '/api/upload/temp/revert' => [[['_route' => 'revert_upload', '_controller' => 'App\\Controller\\Admin\\Api\\FileUploadController::revertUpload'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/photos/upload' => [[['_route' => 'api_photo_upload', '_controller' => 'App\\Controller\\Admin\\Api\\PhotosApiController::upload'], null, ['POST' => 0], null, false, false, null]],
        '/api/restaurants/list' => [[['_route' => 'restaurants_list', '_controller' => 'App\\Controller\\Admin\\Api\\RestaurantsApiController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/restaurants/create' => [[['_route' => 'restaurants_create', '_controller' => 'App\\Controller\\Admin\\Api\\RestaurantsApiController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/routes/create' => [[['_route' => 'routes_create', '_controller' => 'App\\Controller\\Admin\\Api\\RoutesApiController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/routes/list' => [[['_route' => 'routes_list', '_controller' => 'App\\Controller\\Admin\\Api\\RoutesApiController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/search/global' => [[['_route' => 'api_global_search', '_controller' => 'App\\Controller\\Admin\\Api\\SearchController::globalSearch'], null, ['GET' => 0], null, false, false, null]],
        '/api/users/profile' => [
            [['_route' => 'api_user_profile', '_controller' => 'App\\Controller\\Admin\\Api\\UserApiController::getProfile'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_user_profile_update', '_controller' => 'App\\Controller\\Admin\\Api\\UserApiController::updateProfile'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/users/profile/avatar' => [[['_route' => 'api_user_avatar_update', '_controller' => 'App\\Controller\\Admin\\Api\\UserApiController::updateAvatar'], null, ['POST' => 0], null, false, false, null]],
        '/api/zones/create' => [[['_route' => 'zones_create', '_controller' => 'App\\Controller\\Admin\\Api\\ZonesApiController::createZone'], null, ['POST' => 0], null, false, false, null]],
        '/api/zones/list' => [[['_route' => 'zones_list', '_controller' => 'App\\Controller\\Admin\\Api\\ZonesApiController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/zones/blocks/list' => [[['_route' => 'blocks_list', '_controller' => 'App\\Controller\\Admin\\Api\\ZonesApiController::listBlocks'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::dashboard'], null, null, null, false, false, null]],
        '/admin/zones/list' => [[['_route' => 'admin_zones', '_controller' => 'App\\Controller\\Admin\\DashboardController::zones'], null, ['GET' => 0], null, false, false, null]],
        '/admin/zones/create' => [[['_route' => 'admin_zones_create', '_controller' => 'App\\Controller\\Admin\\DashboardController::zonesCreateOne'], null, ['GET' => 0], null, false, false, null]],
        '/admin/restaurants/list' => [[['_route' => 'admin_restaurants', '_controller' => 'App\\Controller\\Admin\\DashboardController::restaurants'], null, ['GET' => 0], null, false, false, null]],
        '/admin/restaurants/create' => [[['_route' => 'admin_restaurants_create', '_controller' => 'App\\Controller\\Admin\\DashboardController::restaurantsCreateOne'], null, ['GET' => 0], null, false, false, null]],
        '/admin/routes/create' => [[['_route' => 'admin_routes_create', '_controller' => 'App\\Controller\\Admin\\DashboardController::routesCreateOne'], null, ['GET' => 0], null, false, false, null]],
        '/admin/routes/list' => [[['_route' => 'admin_routes', '_controller' => 'App\\Controller\\Admin\\DashboardController::routes'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/registro' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register/success' => [[['_route' => 'app_register_success', '_controller' => 'App\\Controller\\RegistrationController::registerSuccess'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/security' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/usuarios/ascensos' => [[['_route' => 'app_users_climbs', '_controller' => 'App\\Controller\\UsersController::climbs'], null, null, null, false, false, null]],
        '/usuarios/perfil' => [[['_route' => 'app_users_profile', '_controller' => 'App\\Controller\\UsersController::profile'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|pi/(?'
                        .'|ascensos/register/([^/]++)(*:239)'
                        .'|comments/(?'
                            .'|via/([^/]++)(*:271)'
                            .'|restaurant/(?'
                                .'|([^/]++)(*:301)'
                                .'|create(*:315)'
                            .')'
                        .')'
                        .'|photos/(?'
                            .'|via/([^/]++)(*:347)'
                            .'|restaurant/([^/]++)(*:374)'
                        .')'
                        .'|r(?'
                            .'|estaurants/(?'
                                .'|([^/]++)(?'
                                    .'|(*:412)'
                                .')'
                                .'|details/([^/]++)(*:437)'
                            .')'
                            .'|outes/(?'
                                .'|([^/]++)(*:463)'
                                .'|details/([^/]++)(*:487)'
                                .'|([^/]++)(*:503)'
                            .')'
                        .')'
                        .'|zones/(?'
                            .'|([^/]++)(*:530)'
                            .'|details/([^/]++)(*:554)'
                            .'|([^/]++)(*:570)'
                            .'|bloque/([^/]++)(*:593)'
                            .'|search(*:607)'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|zones/(?'
                            .'|view/([^/]++)(*:647)'
                            .'|update/([^/]++)(*:670)'
                        .')'
                        .'|r(?'
                            .'|estaurants/(?'
                                .'|update/([^/]++)(*:712)'
                                .'|view/([^/]++)(*:733)'
                            .')'
                            .'|outes/(?'
                                .'|view/([^/]++)(*:764)'
                                .'|update/([^/]++)(*:787)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/usuarios/(?'
                    .'|vias/([^/]++)(*:825)'
                    .'|restaurantes/([^/]++)(*:854)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        239 => [[['_route' => 'api_ascenso_register', '_controller' => 'App\\Controller\\Admin\\Api\\ClimbsApiController::register'], ['id'], ['POST' => 0], null, false, true, null]],
        271 => [[['_route' => 'api_comments_via', '_controller' => 'App\\Controller\\Admin\\Api\\CommentsApiController::getViaComments'], ['id'], ['GET' => 0], null, false, true, null]],
        301 => [[['_route' => 'api_comments_restaurant', '_controller' => 'App\\Controller\\Admin\\Api\\CommentsApiController::getRestaurantComments'], ['id'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'api_restaurant_comment_create', '_controller' => 'App\\Controller\\Admin\\Api\\CommentsApiController::createRestaurantComment'], [], ['POST' => 0], null, false, false, null]],
        347 => [[['_route' => 'api_photos_via', '_controller' => 'App\\Controller\\Admin\\Api\\PhotosApiController::getRoutePhotos'], ['id'], ['GET' => 0], null, false, true, null]],
        374 => [[['_route' => 'api_photos_restaurant', '_controller' => 'App\\Controller\\Admin\\Api\\PhotosApiController::getRestaurantPhotos'], ['id'], ['GET' => 0], null, false, true, null]],
        412 => [
            [['_route' => 'restaurants_update', '_controller' => 'App\\Controller\\Admin\\Api\\RestaurantsApiController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'restaurants_delete', '_controller' => 'App\\Controller\\Admin\\Api\\RestaurantsApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        437 => [[['_route' => 'api_restaurant_detail', '_controller' => 'App\\Controller\\Admin\\Api\\RestaurantsApiController::getRestaurantDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        463 => [[['_route' => 'routes_delete', '_controller' => 'App\\Controller\\Admin\\Api\\RoutesApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        487 => [[['_route' => 'api_route_detail', '_controller' => 'App\\Controller\\Admin\\Api\\RoutesApiController::getRouteDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        503 => [[['_route' => 'routes_update', '_controller' => 'App\\Controller\\Admin\\Api\\RoutesApiController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        530 => [[['_route' => 'zones_delete', '_controller' => 'App\\Controller\\Admin\\Api\\ZonesApiController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        554 => [[['_route' => 'api_zona_detail', '_controller' => 'App\\Controller\\Admin\\Api\\ZonesApiController::getZonaDetail'], ['id'], ['GET' => 0], null, false, true, null]],
        570 => [[['_route' => 'update', '_controller' => 'App\\Controller\\Admin\\Api\\ZonesApiController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        593 => [[['_route' => 'bloque_delete', '_controller' => 'App\\Controller\\Admin\\Api\\ZonesApiController::deleteBloque'], ['id'], ['DELETE' => 0], null, false, true, null]],
        607 => [[['_route' => 'zones_search', '_controller' => 'App\\Controller\\Admin\\Api\\ZonesApiController::search'], [], ['GET' => 0], null, false, false, null]],
        647 => [[['_route' => 'admin_zones_view', '_controller' => 'App\\Controller\\Admin\\DashboardController::zonesViewOne'], ['id'], ['GET' => 0], null, false, true, null]],
        670 => [[['_route' => 'admin_zones_update', '_controller' => 'App\\Controller\\Admin\\DashboardController::zonesUpdateOne'], ['id'], ['GET' => 0], null, false, true, null]],
        712 => [[['_route' => 'admin_restaurants_update', '_controller' => 'App\\Controller\\Admin\\DashboardController::restaurantsUpdateOne'], ['id'], ['GET' => 0], null, false, true, null]],
        733 => [[['_route' => 'admin_restaurants_view', '_controller' => 'App\\Controller\\Admin\\DashboardController::restaurantsViewOne'], ['id'], ['GET' => 0], null, false, true, null]],
        764 => [[['_route' => 'admin_routes_view', '_controller' => 'App\\Controller\\Admin\\DashboardController::routesViewOne'], ['id'], ['GET' => 0], null, false, true, null]],
        787 => [[['_route' => 'admin_routes_update', '_controller' => 'App\\Controller\\Admin\\DashboardController::routesUpdateOne'], ['id'], ['GET' => 0], null, false, true, null]],
        825 => [[['_route' => 'app_users_routes', '_controller' => 'App\\Controller\\UsersController::routes'], ['id'], null, null, false, true, null]],
        854 => [
            [['_route' => 'app_users_restaurants', '_controller' => 'App\\Controller\\UsersController::restaurants'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
