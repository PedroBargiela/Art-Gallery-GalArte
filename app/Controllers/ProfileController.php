<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MyUsersModel;

class ProfileController extends Controller
{
    public function index()
    {
        // Obtén la sesión
        $session = session();


        // Obtén el ID del usuario de la sesión
        $userId = $session->get('loggedUser');

        // Si no hay un ID de usuario en la sesión, redirige al usuario
        if (!$userId) {
            return redirect()->to('/auth');
        }

        // Obtén los datos del usuario de la base de datos
        $model = new MyUsersModel();
        $user = $model->find($userId);

        // Pasa los datos del usuario a la vista
        echo view('dashboard/profile', ['user' => $user]);
    }
    public function update()
    {
        // Obtener los datos del formulario
        $id = $this->request->getPost('id');
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $country = $this->request->getPost('country');
        $postal_code = $this->request->getPost('postal_code');
        $address = $this->request->getPost('address');

        // Preparar los datos del usuario para la actualización
        $values = [
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'phone' => $phone,
            'country' => $country,
            'postal_code' => $postal_code,
            'address' => $address,
        ];

        // Actualizar los datos del usuario en la base de datos
        $model = new MyUsersModel();
        if (!$model->save($values)) {
            return $this->response->setStatusCode(500, 'Hubo un error al guardar los cambios');
        }

        // Devolver una respuesta de éxito
        return $this->response->setStatusCode(200, 'Tus datos han sido actualizados con éxito.');
    }
}
