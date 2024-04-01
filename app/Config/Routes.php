<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);

//Admin Group Routes
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    //Dashboard Route
    $routes->get('/', 'Admin::index');
    $routes->add('modules', 'AdminController::modules');

    //User Groups
    $routes->group('groups', ['namespace' => 'App\Modules\Groups\Controllers'], function ($routes) {
        $routes->add('add', 'Administrator::create');
    });

    //Users Management
    $routes->group('users', ['namespace' => 'App\Modules\Users\Controllers'], function ($routes) {
        $routes->add('/', 'Administrator::index');
        $routes->add('add', 'Administrator::add');
    });

    //Areas of specialization
    $routes->group('specializations', ['namespace' => 'App\Modules\Specializations\Controllers'], function ($routes) {
        $routes->add('add', 'Administrator::create');
        $routes->add('edit', 'Administrator::edit');
    });

    //Programming Languages
    $routes->group('languages', ['namespace' => 'App\Modules\Languages\Controllers'], function ($routes) {
        $routes->add('add', 'Administrator::create');
        $routes->add('edit', 'Administrator::edit');
        $routes->add('getFrameworks/(:any)', 'Administrator::getFrameworks/$1');
        $routes->add('addframework', 'Administrator::addframework');
    });
    
});

//Writer Group Routes
$routes->group('techie', ['filter' => 'auth'], function ($routes) {
    //Dashboard Route
    $routes->get('/', 'Writer::index');

    //Profile Management update_profile
    $routes->group('profile', ['namespace' => 'App\Modules\Writers\Controllers'], function ($routes) {
        $routes->add('/', 'Writer::index');
        $routes->add('update', 'Writer::update_profile');
    });

    //Order Routes
    $routes->group('orders', ['namespace' => 'App\Modules\Orders\Controllers','filter' => 'restrict'], function ($routes) {
        $routes->add('/', 'Writer::index');
        $routes->add('bid', 'Writer::bid');

    });

});

//Customer Group Routes
$routes->group('customer', ['filter' => 'auth'], function ($routes) {
    //Dashboard Route
    $routes->get('/', 'Writer::customer');
});
