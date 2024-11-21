<?php

use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');



Route::get("/one", function (Request $request) {
    // echo "hello api";
    return response()->json(Product::all());
});

Route::get('/allorders', function () {
    return response()->json(Order::all());
});

Route::get('/getfirstthree/', function () {
    // $orders = Order::all()->limit(3);
    $orders = Order::all()->take(2);
    return response()->json($orders);
});

// Route::post("createuser", function (Request $request) {
// });


Route::get('/order', function (Request $request) {

    return response()->json($request->query());
});
