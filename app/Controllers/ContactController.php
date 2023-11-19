<?php

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index()
    {
        $data = [];

        if (session()->get('loggedUser')) {
            $data['isLoggedIn'] = true;
        } else {
            $data['isLoggedIn'] = false;
        }

        echo view('contact', $data);
    }
}
