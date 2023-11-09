<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class FormController extends Controller
{
    public function send()
    {
        $session = \Config\Services::session();

        $name = $this->request->getPost('name');
        $workName = $this->request->getPost('work-name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        $mail = \Config\Services::email();
        $mail->setFrom(getenv('email.SMTPUser'), 'Correo');
        $mail->setReplyTo($email, $name);
        $mail->setTo(getenv('email.SMTPUser'));
        $mail->setSubject('Nuevo formulario de solicitud de información');
        $mail->setMessage("Nombre: {$name}\nNombre de la Obra y Artista: {$workName}\nEmail: {$email}\nMensaje: {$message}");

        if ($mail->send()) {
            echo "Mensaje enviado correctamente";
        } else {
            $data = $mail->printDebugger(['headers']);
            print_r($data);
        }
    }
}
