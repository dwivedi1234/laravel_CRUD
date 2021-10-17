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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','ProductController@index')->name('productIndex');
Route::post('/product/store','ProductController@store')->name('productStore');
Route::get('/all/products','ProductController@allProducts')->name('allProducts');
Route::get('/edit/products/{id}','ProductController@editProducts')->name('editProduct');
Route::post('/update/products/{id}','ProductController@updateProducts')->name('updateProduct');

Route::get('/delete/products/{id}','ProductController@deleteProduct')->name('deleteProduct');