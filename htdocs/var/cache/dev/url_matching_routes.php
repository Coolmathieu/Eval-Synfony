<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/citation' => [[['_route' => 'app_citation_index', '_controller' => 'App\\Controller\\CitationController::index'], null, null, null, false, false, null]],
        '/citation/nouvelle' => [[['_route' => 'app_citation_create', '_controller' => 'App\\Controller\\CitationController::create'], null, null, null, false, false, null]],
        '/citatione' => [[['_route' => 'app_citatione', '_controller' => 'App\\Controller\\CitationeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
