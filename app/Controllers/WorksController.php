<?php

namespace App\Controllers;

use App\Models\WorksModel;

use App\Models\IndividualWorksModel;

class WorksController extends BaseController
{
    public function index()
    {
        $model = new WorksModel();

        $data['works'] = $model->findAll();

        //Carga el archivo de funciones de ayuda
        helper('url');

        if (session()->get('loggedUser')) {
            $data['isLoggedIn'] = true;
        } else {
            $data['isLoggedIn'] = false;
        }

        echo view('works', $data);
    }

    public function show($workSlug)
    {

        $model = new IndividualWorksModel();
        $data['work'] = $model->where('slug', $workSlug)->first();

        if (empty($data['work'])) {
            // Work Not Found
            echo "Work Not Found for Slug: $workSlug";
        } else {
            if (session()->get('loggedUser')) {
                $data['isLoggedIn'] = true;
            } else {
                $data['isLoggedIn'] = false;
            }

            echo view('work', $data);
        }
    }
}
