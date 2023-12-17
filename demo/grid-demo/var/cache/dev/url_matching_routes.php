<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/commands' => [[['_route' => 'survos_commands', '_controller' => ['Survos\\CommandBundle\\Controller\\CommandController', 'commands']], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_apage', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/congress' => [[['_route' => 'app_congress_index', '_controller' => 'App\\Controller\\CongressController::index'], null, ['GET' => 0], null, true, false, null]],
        '/congress/browse' => [[['_route' => 'app_congress_browse', '_controller' => 'App\\Controller\\CongressController::browse'], null, ['GET' => 0], null, false, false, null]],
        '/congress/new' => [[['_route' => 'app_congress_new', '_controller' => 'App\\Controller\\CongressController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|co(?'
                                .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:153)'
                                .'|untries(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:197)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:223)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:261)'
                                    .')'
                                .')'
                            .')'
                            .'|errors/([^/]++)(?'
                                .'|(*:290)'
                            .')'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:328)'
                            .')'
                            .'|officials(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:375)'
                                .'|(?:\\.([^/]++))?(*:398)'
                            .')'
                            .'|terms(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:441)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:467)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:505)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/run\\-command/([^/]++)(*:543)'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:579)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:618)'
                    .'|wdt/([^/]++)(*:638)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:680)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:717)'
                                .'|router(*:731)'
                                .'|exception(?'
                                    .'|(*:751)'
                                    .'|\\.css(*:764)'
                                .')'
                            .')'
                            .'|(*:774)'
                        .')'
                    .')'
                .')'
                .'|/congress/([^/]++)(?'
                    .'|(*:806)'
                    .'|/edit(*:819)'
                    .'|(*:827)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        153 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        197 => [[['_route' => '_api_/countries/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Country', '_api_operation_name' => '_api_/countries/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        223 => [
            [['_route' => '_api_/countries{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Country', '_api_operation_name' => '_api_/countries{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/countries{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Country', '_api_operation_name' => '_api_/countries{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        261 => [
            [['_route' => '_api_/countries/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Country', '_api_operation_name' => '_api_/countries/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/countries/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Country', '_api_operation_name' => '_api_/countries/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/countries/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Country', '_api_operation_name' => '_api_/countries/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        290 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        328 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        375 => [[['_route' => '_api_/officials/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Official', '_api_operation_name' => '_api_/officials/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => '_api_/officials{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Official', '_api_operation_name' => '_api_/officials{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        441 => [[['_route' => '_api_/terms/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        467 => [
            [['_route' => '_api_/terms{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/terms{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        505 => [
            [['_route' => '_api_/terms/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/terms/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/terms/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Term', '_api_operation_name' => '_api_/terms/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        543 => [[['_route' => 'survos_command', '_controller' => ['Survos\\CommandBundle\\Controller\\CommandController', 'runCommand']], ['commandName'], null, null, false, true, null]],
        579 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        618 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        638 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        680 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        717 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        731 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        751 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        764 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        774 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        806 => [[['_route' => 'app_congress_show', '_controller' => 'App\\Controller\\CongressController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        819 => [[['_route' => 'app_congress_edit', '_controller' => 'App\\Controller\\CongressController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        827 => [
            [['_route' => 'app_congress_delete', '_controller' => 'App\\Controller\\CongressController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
