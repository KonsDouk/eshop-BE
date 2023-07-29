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

Route::middleware('auth:sanctum')->get('/customer', function (Request $request) {
    return $request->customer();
});

Route::get('/testing', 'App\Http\Controllers\Controller@test');

//Customers
Route::get('/customers', 'App\Http\Controllers\CustomersController@customers');
Route::get('/selectedCustomer/{id}', 'App\Http\Controllers\CustomersController@getSelectedCustomer')->where('id', '[0-9]+');
Route::get('/orders', 'App\Http\Controllers\OrdersController@index');

//Products
Route::get('/products', 'App\Http\Controllers\ProductsController@index');
Route::get('/product/{id}', 'App\Http\Controllers\ProductsController@getProduct')->where('id', '[0-9]+');
Route::get('/products_photos', 'App\Http\Controllers\ProductsPhotosController@index');

//Authentication
Route::post('/customerAuthentication', 'App\Http\Controllers\CustomerAuthenticationController@authenticateCustomer');

