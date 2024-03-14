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

    // members
    $routes->group('members', ['namespace' => 'App\Modules\Members\Controllers'], function ($routes) {
        $routes->add('index', 'Members::index');
        $routes->add('create', 'Members::create');
    });

    
});

//Writer Group Routes
$routes->group('writer', ['filter' => 'auth'], function ($routes) {
    //Dashboard Route
    $routes->get('/', 'Writer::index');

    // members
    
});
