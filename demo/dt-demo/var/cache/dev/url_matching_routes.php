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
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/simple' => [[['_route' => 'app_simple', '_controller' => 'App\\Controller\\AppController::simple'], null, null, null, false, false, null]],
        '/grid' => [[['_route' => 'app_grid', '_controller' => 'App\\Controller\\AppController::grid'], null, null, null, false, false, null]],
        '/congress/crud_index' => [[['_route' => 'congress_crud_index', '_controller' => 'App\\Controller\\CongressController::crud'], null, ['GET' => 0], null, false, false, null]],
        '/congress/simple_datatables' => [[['_route' => 'app_congress_simple_datatables', '_controller' => 'App\\Controller\\CongressController::simple_datatables'], null, ['GET' => 0], null, false, false, null]],
        '/congress/grid' => [[['_route' => 'app_congress_grid', '_controller' => 'App\\Controller\\CongressController::grid'], null, ['GET' => 0], null, false, false, null]],
        '/congress/api_grid' => [[['_route' => 'congress_api_grid', '_controller' => 'App\\Controller\\CongressController::api_grid'], null, ['GET' => 0], null, false, false, null]],
        '/congress/new' => [[['_route' => 'app_congress_new', '_controller' => 'App\\Controller\\CongressController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/credit' => [[['_route' => 'app_credit', '_controller' => 'App\\Controller\\CreditController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/term/crud' => [[['_route' => 'app_term_crud_index', '_controller' => 'App\\Controller\\TermCrudController::crud_index'], null, ['GET' => 0], null, true, false, null]],
        '/term/crud/new' => [[['_route' => 'app_term_crud_new', '_controller' => 'App\\Controller\\TermCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/term/crud/browse' => [[['_route' => 'app_termcrud_index', '_controller' => 'App\\Controller\\TermCrudController::index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|errors/([^/]++)(?'
                            .'|(*:173)'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:211)'
                        .')'
                        .'|officials(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:258)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:284)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:322)'
                            .')'
                        .')'
                        .'|terms(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:366)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:392)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:430)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:469)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:508)'
                    .'|wdt/([^/]++)(*:528)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:570)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:607)'
                                .'|router(*:621)'
                                .'|exception(?'
                                    .'|(*:641)'
                                    .'|\\.css(*:654)'
                                .')'
                            .')'
                            .'|(*:664)'
                        .')'
                    .')'
                .')'
                .'|/congress/([^/]++)(?'
                    .'|(*:696)'
                    .'|/edit(*:709)'
                    .'|(*:717)'
                .')'
                .'|/term/crud/([^/]++)(?'
                    .'|(*:748)'
                    .'|/edit(*:761)'
                    .'|(*:769)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        173 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        211 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        258 => [[['_route' => '_api_/officials/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Official', '_api_operation_name' => '_api_/officials/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        284 => [
            [['_route' => '_api_/officials{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Official', '_api_operation_name' => '_api_/officials{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/officials{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Official', '_api_operation_name' => '_api_/officials{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        322 => [
            [['_route' => '_api_/officials/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Official', '_api_operation_name' => '_api_/officials/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/officials/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Official', '_api_operation_name' => '_api_/officials/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/officials/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Official', '_api_operation_name' => '_api_/officials/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        366 => [[['_route' => '_api_/terms/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        392 => [
            [['_route' => '_api_/terms{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/terms{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        430 => [
            [['_route' => '_api_/terms/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/terms/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/terms/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        469 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        508 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        528 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        570 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        607 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        621 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        641 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        654 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        664 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        696 => [[['_route' => 'app_congress_show', '_controller' => 'App\\Controller\\CongressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        709 => [[['_route' => 'app_congress_edit', '_controller' => 'App\\Controller\\CongressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        717 => [[['_route' => 'app_congress_delete', '_controller' => 'App\\Controller\\CongressController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        748 => [[['_route' => 'app_term_crud_show', '_controller' => 'App\\Controller\\TermCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        761 => [[['_route' => 'app_term_crud_edit', '_controller' => 'App\\Controller\\TermCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        769 => [
            [['_route' => 'app_term_crud_delete', '_controller' => 'App\\Controller\\TermCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
