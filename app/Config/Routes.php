<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('exhibitions', 'ExhibitionsController::index');
$routes->get('exhibitions/exhibition1', 'Exhibitions\Exhibition1Controller::index');
