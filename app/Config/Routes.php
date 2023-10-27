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
    $routes->get('artist1', 'Artists\Artist1Controller::index');
    $routes->get('artist2', 'Artists\Artist2Controller::index');
    $routes->get('artist3', 'Artists\Artist3Controller::index');
    $routes->get('artist4', 'Artists\Artist4Controller::index');
    $routes->get('artist5', 'Artists\Artist5Controller::index');
    $routes->get('artist6', 'Artists\Artist6Controller::index');
    $routes->get('artist7', 'Artists\Artist7Controller::index');
    $routes->get('artist8', 'Artists\Artist8Controller::index');
    $routes->get('artist9', 'Artists\Artist9Controller::index');
    $routes->get('artist10', 'Artists\Artist10Controller::index');
});
