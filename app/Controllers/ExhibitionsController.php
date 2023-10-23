<?php

namespace App\Controllers;

class ExhibitionsController extends BaseController
{
    public function index()
    {
        echo view('exhibitions');
    }
}
