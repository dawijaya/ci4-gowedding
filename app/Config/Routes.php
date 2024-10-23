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
$routes->get('/home', 'Home::index');
$routes->get('acara', 'acara::index');
$routes->get('acara/add', 'acara::create');
$routes->post('acara', 'acara::store');
$routes->get('acara/edit/(:num)', 'acara::edit/$1');
$routes->put('acara/(:any)', 'acara::update/$1');
$routes->delete('acara/(:segment)', 'acara::destroy/$1');
$routes->get('auth/login', 'Auth::login');
$routes->get('login', 'Auth::login');
$routes->post('auth/loginProcess', 'Auth::loginProcess');
$routes->get('auth/logout', 'Auth::logout');

$routes->get('groups/trash', 'Groups::trash');
$routes->get('groups/restore/(:any)', 'Groups::restore/$1');
$routes->get('groups/restore', 'Groups::restore');
$routes->delete('groups/delete2/(:any)', 'Groups::delete2/$1 ');
$routes->delete('groups/delete2', 'Groups::delete2');
$routes->presenter('groups', ['filter' => 'isLoggedIn']);

$routes->resource('contacts', ['filter' => 'isLoggedIn']);
