<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    // return "Muhmmad Omar";
    // $age = 33;
    // return "<h1> Ghulam Rasool's Age: $age</h1>";
    return view('home');
})->name('index');


Route::get('/home/products', function () {
    $prod_data = [
        ['name' => "sofa", 'price' => 943039, 'brand' => 'boss'],
        ['name' => "chair", 'price' => 4903, 'brand' => 'boss'],
        ['name' => "table", 'price' => 3333, 'brand' => 'lego'],
        ['name' => "almirah", 'price' => 5432, 'brand' => 'johson'],
    ];

    return view('products', [
        'product_data' => $prod_data,
    ]);

})->name('products');
