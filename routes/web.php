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


Route::get('create/brand','BrandController@create');
Route::resource('/brand', 'BrandController');
Route::get('brand/destroy/{id}', ['as' => 'brand.get.destroy', 'uses' => 'BrandController@destroy']);

Route::get('create/product','ProductController@create');
Route::resource('/product', 'ProductController');
Route::get('product/destroy/{id}', ['as' => 'product.get.destroy', 'uses' => 'ProductController@destroy']);

