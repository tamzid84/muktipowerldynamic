<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'contact']);




Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/filter', [ProductController::class, 'filter'])->name('products.filter');


Route::get('/products/quick-view/{id}', [ProductController::class, 'quickView'])
    ->name('products.quickView');