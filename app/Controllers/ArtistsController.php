<?php

namespace App\Controllers;

use App\Models\ArtistsModel;

class ArtistsController extends BaseController
{
    public function index()
    {
        $data = [];

        if (session()->get('loggedUser')) {
            $data['isLoggedIn'] = true;
        } else {
            $data['isLoggedIn'] = false;
        }

        echo view('artists', $data);
    }

    public function show($artistSlug)
    {

        $model = new ArtistsModel();
        $data['artist'] = $model->where('slug', $artistSlug)->first();

        if (empty($data['artist'])) {
            // artist Not Found
            echo "artist Not Found for Slug: $artistSlug";
        } else {
            if (session()->get('loggedUser')) {
                $data['isLoggedIn'] = true;
            } else {
                $data['isLoggedIn'] = false;
            }

            echo view('artist', $data);
        }
    }
}
