<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class FormController extends Controller
{
    public function send()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $direction = $this->request->getPost('direction');
        $message = $this->request->getPost('message');

        $mail = \Config\Services::email();
        $mail->setFrom(getenv('email.username'), 'Correo');
        $mail->setReplyTo($email, $name);
        $mail->setTo(getenv('email.username'));
        $mail->setSubject('Nuevo formulario de solicitud de información');
        $mail->setMessage("Nombre: {$name}\Email: {$email}\Dirección: {$direction}\Mensaje: {$message}");

        if ($mail->send()) {
            echo "Mensaje enviado";
        } else {
            $data = $mail->printDebugger(['headers']);
            print_r($data);
        }
    }
}
