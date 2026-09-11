<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/citation' => [[['_route' => 'app_citation_index', '_controller' => 'App\\Controller\\CitationController::index'], null, null, null, false, false, null]],
        '/citation/new' => [[['_route' => 'app_citation_new', '_controller' => 'App\\Controller\\CitationController::new'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/delete/([^/]++)(*:58)'
                .'|/(\\d+)(*:71)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        58 => [[['_route' => 'app_citation_delete', '_controller' => 'App\\Controller\\CitationController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        71 => [
            [['_route' => 'app_citation_show', '_controller' => 'App\\Controller\\CitationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
