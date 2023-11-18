<?php

namespace App\Controllers;

use App\Models\MyUsersModel;
use CodeIgniter\Controller;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        echo view('forgot_password');
    }

    public function sendResetLink()
    {
        $email = $this->request->getPost('email');
        $model = new MyUsersModel();

        // Comprueba si el email existe en la base de datos
        $user = $model->where('email', $email)->first();

        if ($user) {
            // Genera un token único
            $token = bin2hex(random_bytes(50));

            // Guarda el token en la base de datos
            $model->save([
                'id' => $user['id'],
                'reset_token' => $token
            ]);

            // Envía el email con el enlace de restablecimiento de contraseña
            // Asegúrate de reemplazar 'your-domain' con tu dominio real y de crear una ruta 'reset-password'
            $link = 'http://your-domain/reset-password?token=' . $token;

            // Aquí deberías añadir el código para enviar el email
            // Puedes usar la biblioteca Email de CodeIgniter para hacer esto

            return redirect()->to('/forgot-password')->with('status', 'Se ha enviado el enlace de restablecimiento de contraseña a tu email.');
        } else {
            return redirect()->to('/forgot-password')->with('error', 'No se ha encontrado ninguna cuenta con ese email.');
        }
    }
}
