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
Route::get('/customers', 'App\Http\Controllers\CustomersController@customers');
Route::get('/orders', 'App\Http\Controllers\OrdersController@index');
Route::get('/products', 'App\Http\Controllers\ProductsController@index');
Route::get('/products_photos', 'App\Http\Controllers\ProductsPhotosController@index');
