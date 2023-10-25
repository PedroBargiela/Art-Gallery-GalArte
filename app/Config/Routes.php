<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('exhibitions', 'ExhibitionsController::index');
$routes->get('exhibitions/exhibition1', 'Exhibitions\Exhibition1Controller::index');
$routes->get('exhibitions/exhibition2', 'Exhibitions\Exhibition2Controller::index');
$routes->get('exhibitions/exhibition3', 'Exhibitions\Exhibition3Controller::index');
$routes->get('exhibitions/exhibition4', 'Exhibitions\Exhibition4Controller::index');
$routes->get('exhibitions/exhibition5', 'Exhibitions\Exhibition5Controller::index');
