<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/product', 'ProductScarppController@product')->name('product');
Route::get('/product/detail/{id}', 'ProductScarppController@show')->name('product.show');

Route::get('/product/all', 'ProductAllController@index');

