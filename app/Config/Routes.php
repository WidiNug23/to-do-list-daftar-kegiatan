<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'TaskController::index');
$routes->post('/add', 'TaskController::add');
$routes->get('/edit/(:num)', 'TaskController::edit/$1');
$routes->post('/update/(:num)', 'TaskController::update/$1');
$routes->get('/delete/(:num)', 'TaskController::delete/$1');
$routes->get('/complete/(:num)', 'TaskController::complete/$1');
$routes->get('/completed', 'TaskController::completedTasks');
