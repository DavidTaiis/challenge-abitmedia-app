<?php

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

Route::group(['prefix' => 'auth', 'namespace' => 'Api\Auth'], function () {
    Route::post('login', 'LoginController@login');
});

Route::group(['prefix' => 'user', 'namespace' => 'Api' ,'middleware' => 'auth:api' ], function () {
    Route::get('getUser', 'UserController@getUser');

});

Route::group(['prefix' => 'user', 'namespace' => 'Api'], function () {
    Route::post('register', 'UserController@register');
});

Route::group(['prefix' => 'software', 'namespace' => 'Api','middleware' => 'auth:api'], function () {
    Route::post('create', 'SoftwareController@create');
    Route::get('read/{item}', 'SoftwareController@read');
    Route::put('update', 'SoftwareController@update');
    Route::delete('delete/{id}', 'SoftwareController@delete');
});
Route::group(['prefix' => 'service', 'namespace' => 'Api','middleware' => 'auth:api'], function () {
    Route::post('create', 'ServiceController@create');
    Route::get('read/{item}', 'ServiceController@read');
    Route::put('update', 'ServiceController@update');
    Route::delete('delete/{id}', 'ServiceController@delete');
});





