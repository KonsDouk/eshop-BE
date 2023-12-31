<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/testing', 'App\Http\Controllers\Controller@test');

//Customers
Route::get('/customers', 'App\Http\Controllers\CustomersController@customers')->middleware('auth:sanctum');
Route::get('/selectedCustomer', 'App\Http\Controllers\CustomersController@getSelectedCustomer')->middleware('auth:sanctum');
Route::get('/orders', 'App\Http\Controllers\OrdersController@index');
Route::get('/customer', 'App\Http\Controllers\CustomersController@getCurrentUser')->middleware('auth:sanctum');


//Products
Route::get('/products', 'App\Http\Controllers\ProductsController@index');
Route::get('/product/{id}', 'App\Http\Controllers\ProductsController@getProduct')->where('id', '[0-9]+');
Route::get('/products_photos', 'App\Http\Controllers\ProductsPhotosController@index');

//Authentication
// Route::post('/customerLogin', 'App\Http\Controllers\CustomersController@login');
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->middleware('auth:sanctum');

//Wishlists
Route::get('/wishlists', 'App\Http\Controllers\WishlistsController@getUserWishlists')->middleware('auth:sanctum');
