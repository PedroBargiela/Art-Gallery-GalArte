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

$routes->get('/contact', 'ContactController::index');

$routes->group('login_register', function ($routes) {
    $routes->get('/', 'Login_RegistrerController::index');
    $routes->post('login', 'Login_RegistrerController::login');
    $routes->post('register', 'Login_RegistrerController::register');
});

//service('auth')->routes($routes);

$routes->group('auth', function ($routes) {
    $routes->get('/', 'AuthController::index');
    $routes->get('register', 'AuthController::register');
    $routes->post('save', 'AuthController::save');
    $routes->post('check', 'AuthController::check');
    $routes->get('logout', 'AuthController::logout');
    $routes->get('forgot_password', 'AuthController::forgot_password');
    $routes->post('send_reset_link', 'AuthController::send_reset_link');
    $routes->get('reset_password', 'AuthController::reset_password');
    $routes->post('update_password', 'AuthController::update_password');
});

$routes->group('dashboard', function ($routes) {
    $routes->get('/', 'DashboardController::index');
    $routes->get('profile', 'DashboardController::profile');
});

$routes->group('', ['filter' => 'AuthCheck'], function ($routes) {
    //Añadir todas las rutas protegidas por este filtro
    $routes->get('/dashboard', 'DashboardController::index');
    $routes->get('/dashboard/profile', 'DashboardController::profile');
});

$routes->group('', ['filter' => 'AlreadyLoggedIn'], function ($routes) {
    $routes->get('/auth', 'AuthController::index');
    $routes->get('/auth/register', 'AuthController::register');
});
