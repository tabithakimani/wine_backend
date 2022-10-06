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

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::post('/login', 'LoginController@login');
    Route::post('/register', 'RegisterController@register');
    Route::post('/logout', 'LoginController@logout');
});

Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {
    Route::resource('/products', 'ProductController');
    Route::get('/tags', 'ProductController@tags');
    Route::resource('/uoms', 'UnitOfMeasureController');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::resource('/orders', 'OrderController');
    });
});

