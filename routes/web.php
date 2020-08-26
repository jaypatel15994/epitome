<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/admin', function () {
    return view('admin/admin')->with('user',Auth::user());
});
Route::get('addProduct', function () {
  return view('admin/addProduct')->with('user',Auth::user());
});

Route::post('/admin/storeProduct', 'ProductController@store');
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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('product/create', function () {
    // $product = App\Product::first();
    // dd($product);
    return view('home');
});
// Route::get('/login', function () {
//   // $product = App\Product::first();
//   // dd($product);
//   return view('login');
// });

Route::get('/clothing', 'ProductController@clothing');
Route::get('/electronics', 'ProductController@electronics');
Route::get('/home&kitchen', 'ProductController@home_kitchen');
Route::get('/beauty', 'ProductController@beauty');
Route::get('/toys', 'ProductController@toys');

Route::post('/upload', 'ProductController@store');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');