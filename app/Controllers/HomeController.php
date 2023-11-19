<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [];

        if (session()->get('loggedUser')) {
            $data['isLoggedIn'] = true;
        } else {
            $data['isLoggedIn'] = false;
        }

        return view('home', $data);
    }
}
