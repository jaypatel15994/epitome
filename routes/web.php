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
//     return view('/layouts/app');
// });


Route::get('/', 'ProductController@index');
Route::get('/cart','CartItemController@index');
Route::get('/cartShow', function () {
  // $product = App\Product::first();
  // dd($product);
  return view('cart');
});

// Route::get('/addItem', 'CartItemController@store');    

Route::get('/addItem/{product_id}', [
    'uses' => 'CartItemController@store',
    'as'   => 'addItem'
  ]);



// Route::get('/home', 'HomeController@index')->name('home');
Route::get('product/create', function () {
    // $product = App\Product::first();
    // dd($product);
    return view('home');
});


Route::post('/upload', 'ProductController@store');
