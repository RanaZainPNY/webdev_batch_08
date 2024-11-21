<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Route::get('/', [ProductController::class, 'getProductData'])->name('index');

// Web Routes
Route::get('/web/', [WebsiteController::class, 'index'])->name('web-index');
Route::get('/web/master', [WebsiteController::class, 'master'])->name('web-master');
Route::get('/web/shop', [WebsiteController::class, 'shop'])->name('web-shop');
Route::get('/web/checkout', [WebsiteController::class, 'checkout'])->name('web-checkout');

// Admin Routes
Route::get('/admin/', [AdminController::class, 'index'])->name('admin-index');
Route::get('/admin/product/createform', [AdminController::class, 'createform'])->name('admin-create-product');
Route::post('admin/product/store', [AdminController::class, 'store'])->name('admin-store');
Route::get('admin/product/delete/{id}', [AdminController::class, 'delete'])->name('admin-delete-product');
Route::get('admin/product/editForm/{id}', [AdminController::class, 'editForm'])->name('admin-editForm-product');
Route::put('admin/product/update/{id}', [AdminController::class, 'update'])->name('admin-update-product');
// admin/product/delete/1
// admin/product/delete/2
// admin/product/delete/3

Route::get('/home/products', function () {
    $prod_data = [
        ['name' => "sofa", 'price' => 943039, 'brand' => 'boss'],
        ['name' => "chair", 'price' => 4903, 'brand' => 'boss'],
        ['name' => "table", 'price' => 3333, 'brand' => 'lego'],
        ['name' => "almirah", 'price' => 5432, 'brand' => 'johson'],
    ];
    $age = 33;
    return view('products', [
        'product_data' => $prod_data,
        'username' => 'omar',
        'age' => $age,
    ]);
})->name('products');

// cart routes
Route::get('/web/add-to-cart/{id}', [WebsiteController::class, 'addToCart'])->name('web-add-to-cart');
Route::get('/web/cart', [WebsiteController::class, 'cart'])->name('web-cart');
Route::get('/web/remove-from-cart/{id}', [WebsiteController::class, 'remove'])->name('web-remove-from-cart');

// place order
Route::post('/placeorder', [WebsiteController::class, 'placeorder'])->name('web-place-order');
