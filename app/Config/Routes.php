<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('create-db', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('GoWedding')) {
        echo 'Database created!';
    }
});
$routes->get('/', 'Home::index');
$routes->get('acara', 'acara::index');
$routes->get('acara/add', 'acara::create');
$routes->post('acara', 'acara::store');
$routes->get('acara/edit/(:num)', 'acara::edit/$1');
$routes->put('acara/(:any)', 'acara::update/$1');
$routes->delete('acara/(:segment)', 'acara::destroy/$1');
