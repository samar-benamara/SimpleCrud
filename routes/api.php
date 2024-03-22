<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('testing',function(){
    return 'this is a test api';
});

Route::post('add-product','App\Http\Controllers\ProductsController@adding');
Route::put('edit-product','App\Http\Controllers\ProductsController@edit');
Route::delete('delete-product','App\Http\Controllers\ProductsController@delete');
Route::get('getdata','App\Http\Controllers\ProductsController@getData');