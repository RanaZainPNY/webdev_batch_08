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
}
