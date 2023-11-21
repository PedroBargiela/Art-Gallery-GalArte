<?php

namespace App\Controllers;

use App\Models\WorksModel;

class CartController extends BaseController
{
    public function index()
    {
        $data = [];

        if (session()->get('loggedUser')) {
            $data['isLoggedIn'] = true;
        } else {
            $data['isLoggedIn'] = false;
        }

        // Obtén los productos del carrito
        $cart = session()->get('cart') ?: [];
        $data['cartItems'] = [];
        $totalPrice = 0;
        if ($cart) {
            $model = new WorksModel();
            foreach ($cart as $productId => $quantity) {
                $product = $model->find($productId);
                if ($product) {
                    $product['quantity'] = $quantity;
                    $data['cartItems'][] = $product;
                    $totalPrice += $product['price'] * $quantity;
                }
            }
        }
        $data['totalPrice'] = $totalPrice;

        echo view('cart', $data);
    }
    public function decreaseQuantity($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            if ($cart[$id] > 1) {
                $cart[$id]--;
            } else {
                unset($cart[$id]); // Si la cantidad es 1, elimina el producto del carrito
            }
        }
        session()->set('cart', $cart);
        return redirect()->to('/cart');
    }
    public function removeItem($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]); // Elimina el producto del carrito
        }
        session()->set('cart', $cart);
        return redirect()->to('/cart');
    }
}
