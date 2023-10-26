<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->group('exhibitions', function ($routes) {
    $routes->get('/', 'ExhibitionsController::index');
    $routes->get('exhibition1', 'Exhibitions\Exhibition1Controller::index');
    $routes->get('exhibition2', 'Exhibitions\Exhibition2Controller::index');
    $routes->get('exhibition3', 'Exhibitions\Exhibition3Controller::index');
    $routes->get('exhibition4', 'Exhibitions\Exhibition4Controller::index');
    $routes->get('exhibition5', 'Exhibitions\Exhibition5Controller::index');
});

$routes->group('artists', function ($routes) {
    $routes->get('/', 'ArtistsController::index');
    $routes->get('list', 'ListController::index');
});
