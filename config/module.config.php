<?php
namespace Stagem\ZfcAdmin;

return [
    'assetic_configuration' => require 'assets.config.php',

    // mvc
    'router' => require 'routes.mvc.config.php',

    // middleware
    //'routes' => require 'routes.middleware.config.php',
    'routes' => require 'routes.slim.config.php',

    'actions' => [
        'admin' => __NAMESPACE__
    ],

    // mvc
    'controllers' => [
        'invokables' => [
            'index' => Controller\HomeController::class,
        ],
    ],

    // mvc
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout/default.phtml',
            'layout/ajax' => __DIR__ . '/../view/layout/ajax.phtml',
            'widget/breadcrumb' => __DIR__ . '/../view/widget/breadcrumb.phtml',
            'widget/flashMessages' => __DIR__ . '/../view/widget/flashMessages.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __NAMESPACE__ => __DIR__ . '/../view',
        ],
    ],

    // middleware
    'templates' => [
        'paths' => [
            'admin-admin'  => [__DIR__ . '/../view/admin'],
            'layout' => [__DIR__ . '/../view/layout'],
            'widget' => [__DIR__ . '/../view/widget'],
        ],
    ],
];