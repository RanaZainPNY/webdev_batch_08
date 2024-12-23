<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

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
        // $cart = session()->get('cart');
        // dump($cart);
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

    function placeorder(Request $request)
    {
        // dump($request);
        $cart = session()->get('cart');
        $total = 0;
        foreach ($cart as $id => $details) {
            # code...
            $total += $details['price'] * $details['quantity'];
        }


        $order = new Order();
        $order->firstname = $request->firstname;
        $order->lastname = $request->lastname;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->notes = $request->notes;
        $order->contact = $request->contact;
        $order->total = $total;
        $order->save();
        // echo "order created successfully";

        session()->forget('cart');
        return redirect()->route('web-index')->with('success', 'Order placed successfully');
    }

}

