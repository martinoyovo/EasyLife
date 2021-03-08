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

Route::get('services', 'Api\ServiceApiController@index');
Route::get('service/{id}/', 'Api\ServiceApiController@details');
Route::get('service/{id}/category', 'Api\ServiceApiController@category');
Route::get('user/{id}/commandes', 'Api\UserApiController@commandes');
Route::get('users', 'Api\UserApiController@index');
Route::get('pubs', 'Api\PubliciteApiController@index');
Route::get('categories', 'Api\CategoryApiController@index');
Route::get('services/category/{id}/', 'Api\CategoryApiController@services');
Route::get('commandes', 'Api\CommandApiController@index');


Route::middleware('auth:api')->group(function () {
    Route::post('update-user/{id}', 'Api\UserController@update');
    Route::post('register', 'Api\UserApiController@store');
    Route::post('token', 'Api\UserApiController@getToken');
    Route::post('command/user/{id}', 'Api\CommandApiController@store');
    Route::delete('user/{id}', 'Api\UserApiController@destroy');
});
