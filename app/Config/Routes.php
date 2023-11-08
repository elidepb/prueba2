<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('canchas', 'Canchas::index');
$routes->get('canchas/(:num)', 'Canchas::show/$1');

