<?php

namespace App\Controllers;

class ListController extends BaseController
{
    public function index()
    {
        echo view('list');
    }
}
