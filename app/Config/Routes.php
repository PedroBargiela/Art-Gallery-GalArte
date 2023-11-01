<?php

use App\Controllers\WorksController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->group('exhibitions', function ($routes) {
    $routes->get('/', 'ExhibitionsController::index');
    $routes->get('(:segment)', 'ExhibitionsController::show/$1');
});

$routes->group('artists', function ($routes) {
    $routes->get('/', 'ArtistsController::index');
    $routes->get('list', 'ListController::index');
    $routes->get('(:segment)', 'ArtistsController::show/$1');
});

$routes->group('works', function ($routes) {
    $routes->get('/', 'WorksController::index');
    $routes->get('(:segment)', 'WorksController::show/$1');
});

$routes->post('form/send', 'FormController::send');
