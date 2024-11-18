<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        return view('web.index');
    }
    public function shop()
    {
        $products = Product::all();
        return view('web.shop', ['products' => $products]);
    }
    public function master()
    {
        return view('web.webmaster');
    }


    function addToCart($id)
    {
        // get product data from database
        $product = Product::findOrFail($id);

        // $cart_structure = [
        //     '2' : ['name' => 'chair' , 'price' => 344 , 'description' => 'lorem ipsum' , 'quantity' =>1],
        //     '3' : ['name' => 'chair' , 'price' => 344 , 'description' => 'lorem ipsum' , 'quantity' =>1],
        //     '5' : ['name' => 'chair' , 'price' => 344 , 'description' => 'lorem ipsum' , 'quantity' =>1],
        // ]

        // Session Based Cart
        $cart = session()->get('cart');
        // if product already in the cart
        if (isset($cart[$id])) {
            // post increment
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "sku" => $product->sku,
                "price" => $product->price,
                "description" => $product->description,
                "image" => $product->image,
                "quantity" => 1
            ];
        }
        session()->put('cart', $cart);
        // dump(session()->get('cart', []));
        // return redirect()->route('web-shop');
        return redirect()->back();
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function cart()
    {
        $cart = session()->get('cart');
        dump($cart);
        return view('web.cart');
    }

    function remove($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        // session()->flash('success', "Product removed successfully");
        return redirect()->route('web-cart');
    }

    function checkout()
    {
        return view('web.checkout');
    }

}

