<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;
use App\Models\InfoFormModel;

class FormController extends Controller
{
    public function send()
    {
        $session = \Config\Services::session();

        $name = $this->request->getPost('name');
        $workName = $this->request->getPost('work-name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        // Guardar la información en la base de datos
        $model = new InfoFormModel();
        $data = [
            'name' => $name,
            'artist_and_work' => $workName,
            'email' => $email,
            'message' => $message,
        ];
        $model->insert($data);

        $mail = \Config\Services::email();
        $mail->setFrom(getenv('MAILTRAP_USER'), 'Formulario de Solicitud de Información');
        $mail->setReplyTo($email, $name);
        $mail->setTo(getenv('MAILTRAP_USER'));
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
