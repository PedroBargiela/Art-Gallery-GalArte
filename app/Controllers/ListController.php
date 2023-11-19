<?php

namespace App\Controllers;

class ListController extends BaseController
{
    public function index()
    {
        $data = [];

        if (session()->get('loggedUser')) {
            $data['isLoggedIn'] = true;
        } else {
            $data['isLoggedIn'] = false;
        }

        echo view('list', $data);
    }
}
