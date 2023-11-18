<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Hash;
use App\Models\MyUsersModel;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index()
    {
        echo view('auth/login');
    }
    public function register()
    {
        echo view('auth/register');
    }
    public function save()
    {
        //Validar la request
        /*$validation = $this->validate([
            'username' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[my_users.email]',
            'password' => 'required|min_length[5]',
            'cpassword' => 'required|min_length[5]|matches[password]'
        ]);*/

        $validation = $this->validate([
            'username' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => 'El nombre de usuario es obligatorio',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[my_users.email]',
                'errors' => [
                    'required' => 'El email es obligatorio',
                    'valid_email' => 'Debes ingraser un email válido',
                    'is_unique' => 'El email ya existe'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'La contraseña es obligatoria',
                    'min_length' => 'La contraseña debe tener al menos 5 caracteres'
                ]
            ],
            'cpassword' => [
                'rules' => 'required|min_length[5]|matches[password]',
                'errors' => [
                    'required' => 'La confirmación de la contraseña es obligatoria',
                    'min_length' => 'La confirmación de la contraseña debe tener al menos 5 caracteres',
                    'matches' => 'Las contraseñas no coinciden'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/register', ['validation' => $this->validator]);
        } else {
            //Registrar usuario en la bd
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            $values = [
                'username' => $username,
                'email' => $email,
                'password' => Hash::make($password),
            ];

            $usersModel = new MyUsersModel();
            $query = $usersModel->insert($values);
            if (!$query) {
                return redirect()->back()->with('fail', 'Error al registrar el usuario');
            } else {
                //return redirect()->to('auth/register')->with('success', 'Te has registrado con éxito');
                $last_id = $usersModel->insertID();
                session()->set('loggedUser', $last_id);
                return redirect()->to('/auth');
            }
        }
    }
    function check()
    {
        //Validación del usuario

        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[my_users.email]',
                'errors' => [
                    'required' => 'El email es obligatorio',
                    'valid_email' => 'Debes ingraser un email válido',
                    'is_not_unique' => 'Este email no está registrado'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'La contraseña es obligatoria',
                    'min_length' => 'La contraseña debe tener al menos 5 caracteres'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/login', ['validation' => $this->validator]);
        } else {
            //Comporobar usuario y contraseña

            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $usersModel = new MyUsersModel();
            $user_info = $usersModel->where('email', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);

            if (!$check_password) {
                session()->setFlashdata('fail', 'Contraseña incorrecta');
                return redirect()->to('/auth')->withInput();
            } else {
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to('/');
            }
        }
    }
    function logout()
    {
        if (session()->has('loggedUser')) {
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail', 'Has cerrado la sesión. ¡Vuelve pronto!');
        }
    }

    //-------------------------------------------------->>>>>>>Proceso de recuperación de contraseña<<<<<<<----------------------------------------------------

    public function forgot_password()
    {
        // Muestra la vista del formulario de olvido de contraseña
        echo view('auth/forgot_password');
    }

    public function send_reset_link()
    {
        // Valida el correo electrónico
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[my_users.email]',
                'errors' => [
                    'required' => 'El email es obligatorio',
                    'valid_email' => 'Debes ingresar un email válido',
                    'is_not_unique' => 'Este email no está registrado'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/forgot_password', ['validation' => $this->validator]);
        } else {
            // Genera un token de restablecimiento de contraseña
            $token = bin2hex(random_bytes(50));

            // Guarda el token en la base de datos junto con el correo electrónico del usuario
            $email = $this->request->getPost('email');
            $usersModel = new MyUsersModel();
            $usersModel->where('email', $email)->set(['reset_token' => $token])->update();

            // Envía el correo electrónico con el enlace de restablecimiento de contraseña
            $email = \Config\Services::email();
            $email->setTo($this->request->getPost('email'));
            $email->setSubject('Restablecimiento de contraseña');
            $email->setMessage('<p>Haz clic en el siguiente botón para restablecer tu contraseña:</p><a href="' . base_url() . '/auth/reset_password?token=' . $token . '" style="background-color: #008CBA; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Restablecer contraseña</a>');
            $email->send();

            return redirect()->to('/auth')->with('success', 'Se ha enviado un enlace de restablecimiento de contraseña a tu correo electrónico.');
        }
    }

    public function reset_password()
    {
        // Muestra el formulario de restablecimiento de contraseña
        echo view('auth/reset_password');
    }

    public function update_password()
    {
        // Valida la nueva contraseña y la confirmación de la contraseña
        $validation = $this->validate([
            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'La contraseña es obligatoria',
                    'min_length' => 'La contraseña debe tener al menos 5 caracteres'
                ]
            ],
            'cpassword' => [
                'rules' => 'required|min_length[5]|matches[password]',
                'errors' => [
                    'required' => 'La confirmación de la contraseña es obligatoria',
                    'min_length' => 'La confirmación de la contraseña debe tener al menos 5 caracteres',
                    'matches' => 'Las contraseñas no coinciden'
                ]
            ]
        ]);

        if (!$validation) {
            return view('auth/reset_password', ['validation' => $this->validator]);
        } else {
            // Actualiza la contraseña en la base de datos
            $token = $this->request->getGet('token');
            $password = $this->request->getPost('password');
            $usersModel = new MyUsersModel();
            $usersModel->where('reset_token', $token)->set(['password' => Hash::make($password), 'reset_token' => null])->update();

            return redirect()->to('/auth')->with('success', 'Tu contraseña ha sido actualizada.');
        }
    }
}
