<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use App\Models\UsersModel;

class Shield extends BaseConfig
{
    // El modelo de usuarios que Shield debe usar
    public $model = UsersModel::class;

    // Los campos que Shield debe usar para el inicio de sesión
    public $fields = [
        'login' => 'email',
        'password' => 'password',
    ];

    // Las rutas a las que Shield debe redirigir después de ciertas acciones
    public $routes = [
        'login' => '/',
        'logout' => '/',
        'register' => '/',
        'forgot' => '/forgot',
        'reset' => '/reset',
        'activate' => '/activate',
    ];

    // Las vistas que Shield debe usar para ciertas páginas
    public $views = [
        'login' => 'login_register',
        'register' => 'login_register',
        'forgot' => 'auth/forgot',
        'reset' => 'auth/reset',
    ];

    // Si se debe permitir el registro de nuevos usuarios
    public $allowRegistration = true;

    // Si se deben activar las cuentas por correo electrónico
    public $requireActivation = false;

    // Si se debe permitir el recordatorio de contraseñas
    public $allowForgot = true;

    // Si se debe permitir la reactivación de cuentas
    public $allowReactivation = false;

    // La duración en segundos de los tokens de activación y restablecimiento
    public $tokenExpiration = 7200;
}
