<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

    public function index()
    {
        return "<h1> I am index method </h1>";
    }

    public function getProductData()
    {
        // Query Builder
        $users = DB::table(table: 'users')->select('name', 'email')->get();
        // Laravel Eloquent
        $products = Product::all();
        foreach ($products as $product) {
            dump($product->name);
        }
        return view('home', ['user_data' => $users[0]]);

    }
}
