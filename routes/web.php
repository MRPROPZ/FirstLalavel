<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
Route::get('/', function () {
    return view('welcome');
}); */

// index to products page
Route:: resource('products' , ProductController::class);

// index to create product page
Route::post('create_product', 'ProductController@store');
Route::get('/create_product',
function () {
    return view('create_product');
});