<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//roles
$routes->get('/roles', 'RolesController::index');
$routes->get('/roles/create', 'RolesController::create');
$routes->post('/roles/store', 'RolesController::store');
$routes->get('/roles/edit/(:num)', 'RolesController::edit/$1');
$routes->post('/roles/update', 'RolesController::update');
$routes->get('/roles/delete/(:num)', 'RolesController::delete/$1');
