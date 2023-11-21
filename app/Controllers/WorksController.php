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
    public function addToCart($workId)
    {
        // Comprueba si el usuario ha iniciado sesión
        if (!session()->get('loggedUser')) {
            return redirect()->to('/auth');
        }

        // Comprueba si el carrito ya existe en la sesión
        if (!session()->get('cart')) {
            session()->set('cart', []);
        }

        // Añade el producto al carrito
        $cart = session()->get('cart');
        if (isset($cart[$workId])) {
            $cart[$workId]++;
        } else {
            $cart[$workId] = 1;
        }
        session()->set('cart', $cart);
    }
    public function addToCartAndRedirect($workId)
    {
        // Comprueba si el usuario ha iniciado sesión
        if (!session()->get('loggedUser')) {
            return redirect()->to('/login');
        }

        // Comprueba si el carrito ya existe en la sesión
        if (!session()->get('cart')) {
            session()->set('cart', []);
        }

        // Añade el producto al carrito
        $cart = session()->get('cart');
        if (isset($cart[$workId])) {
            $cart[$workId]++;
        } else {
            $cart[$workId] = 1;
        }
        session()->set('cart', $cart);

        // Redirige al usuario al carrito
        return redirect()->to('/cart');
    }
}
