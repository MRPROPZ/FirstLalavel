<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
Route::get('/', function () {
    return view('welcome');
}); */

// create function 
Route:: resource('products' , ProductController::class);

Route::post('create_product', 'ProductController@store');
Route::get('/create_product',
function () {
    return view('create_product');
});