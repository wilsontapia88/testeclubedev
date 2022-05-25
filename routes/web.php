<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/create', 'ProductsController@create')->name('products.create');
Route::get('/products/edit/{id}', 'ProductsController@edit')->name('products.edit');
Route::put('/products/{id}/update', 'ProductsController@update')->name('products.update');
Route::post('/products', 'ProductsController@store')->name('products.store');