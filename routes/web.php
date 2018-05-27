<?php

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

Auth::routes();
// Auth Facebook
Route::get('auth/facebook', 'Auth\SocialiteAuthController@facebook');
Route::get('auth/facebook/callback', 'Auth\SocialiteAuthController@callbackFacebook');
// Auth Google
Route::get('auth/google', 'Auth\SocialiteAuthController@google');
Route::get('auth/google/callback', 'Auth\SocialiteAuthController@callbackGoogle');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'Coche\CocheController@index');
    Route::get('/coches-item/{id}', 'Coche\CocheController@show');
    Route::get('/coche-createNew', 'Coche\CocheController@create');
    Route::post('/coche-create', 'Coche\CocheController@store');
    Route::post('/coche-update/{id}', 'Coche\CocheController@update');
    Route::post('/coche-delete/{id}', 'Coche\CocheController@destroy');
});

