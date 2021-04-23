<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function cartAdd(Request $request)
    {

        $product = $request->all();


        $cart = \Cart::add(array(
            'id' => $product['id'], // inique row ID
            'name' =>  $product['name'],
            'price' => $product['price'],
            'quantity' => $product['amount'],
            'attributes' => array(
                'image' => $request->image,
                'category_id' => $product['category_id'],
                'slug' => $product['slug'],
                'description' => $product['description'],

            )
        ));

        return redirect()->route('cart')->with('success', 'Produto adicionado no carrinho!');

       
    }

    public function cart()
    {
        return view('site.cart.cart');
    }
}
