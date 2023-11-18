<?php

namespace App\Controllers;

class ContactController extends BaseController
{
    public function index()
    {
        echo view('contact');
    }
}
