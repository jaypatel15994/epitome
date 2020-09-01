<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\CartItem;
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



Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('addProduct', function () {
  return view('admin/addProduct');
});
Route::get('addCategory', function () {
  return view('admin/addCategory');
});

Route::get('viewProduct', 'ProductController@index');
// Product view by seller
Route::get('viewSellerProduct', 'ProductController@show');
Route::get('viewUser', 'UserController@show');
Route::get('addCategory', 'CategoryController@index');
Route::post('/admin/storeProduct', 'ProductController@store');
Route::post('/admin/storeCategory', 'CategoryController@store');

Route::post('/admin/addAddress', 'AddressController@store');
Route::get('viewAddress', 'AddressController@userAddresses');


Route::get('/', 'ProductController@index');
Route::get('/cart','CartItemController@index');
Route::get('/cartShow', function () {
  return view('cart');
});


//Get Billing Address for Order
Route::get('/checkout', 'AddressController@getPrimaryAddress');


Route::get('/manageAddress', function () {
  return view('admin/manageAddress');
});

Route::get('/addAddress', function () {
  return view('admin/addAddress');
});




Route::get('deleteCartItem/{cartItem}', 'CartItemController@destroy');
Route::get('clearCart', 'CartItemController@deleteAll');

Route::post('/placeOrder', 'UserController@placeOrder');
    

Route::get('/addItem/{product_id}', [
    'uses' => 'CartItemController@store',
    'as'   => 'addItem'
  ]);

Auth::routes();

Route::get('product/create', function () {
    return view('home');
});



//Edit Category

Route::get('/editCategory/{category}', [
  'uses' => 'CategoryController@show',
  'as'   => 'editCategory'
]);

Route::post('/updatecat','CategoryController@updatecat');

Route::get('/clothing', 'ProductController@clothing');
Route::get('/electronics', 'ProductController@electronics');
Route::get('/home&kitchen', 'ProductController@home_kitchen');
Route::get('/beauty', 'ProductController@beauty');
Route::get('/toys', 'ProductController@toys');

Route::post('/upload', 'ProductController@store');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('deletecat/{category}', function (App\Category $Category) {
  $Category->delete();
  return redirect("addCategory");
});