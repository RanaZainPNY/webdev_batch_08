<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

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

        if ($request->image != "") {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . "." . $ext; // Unique image name;
            // 383939303.jpg
            // 3839303939.png

            // save image to products directory
            $image->move(public_path('/uploads/products'), $imageName);

            // save image in the database
            $product->image = $imageName;
            $product->save();
        }


        // return "data inserted successfully";
        return redirect()->route('admin-index');
    }

    public function delete($id)
    {
        // dump($id);
        $product = Product::findOrFail($id);
        if ($product->image != "") {
            // delete associated image file
            File::delete(public_path('/uploads/products/' . $product->image));
        }
        // removing record from database
        $product->delete();
        return redirect()->route('admin-index');
    }

    public function editForm($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products_edit', [
            'product' => $product
        ]);

    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        // dump($request);
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        if ($request->image != "") {
            // delete old image
            File::delete(public_path('uploads/products/' . $product->image));
            // Create new image file name
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $ext; // unique Image Name

            //save image to the public directory
            $image->move(public_path('uploads/products/'), $imageName);
            $product->image = $imageName;
            $product->save();
        }

        return redirect()->route('admin-index');
    }
}
