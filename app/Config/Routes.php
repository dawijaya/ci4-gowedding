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
