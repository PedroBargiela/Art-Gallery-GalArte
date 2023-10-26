<?php

namespace App\Controllers;

class ArtistsController extends BaseController
{
    public function index()
    {
        echo view('artists');
    }
}
