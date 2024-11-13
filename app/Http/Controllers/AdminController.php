<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        return view('admin.index', [
            'products' => $products
        ]);
    }
    public function createform()
    {
        return view('admin.products_create');
    }

    public function store(Request $request)
    {
        // dump($request);
        //
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->price;
        $product->save();
        // return "data inserted successfully";
        return redirect()->route('admin-index');
    }

    public function delete($id)
    {
        // dump($id);
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin-index');
    }
}
