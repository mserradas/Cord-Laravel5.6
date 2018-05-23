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
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'Coche\CocheController@index');
    Route::get('/coches-item/{id}', 'Coche\CocheController@show');
    Route::get('/coche-createNew', 'Coche\CocheController@create');
    Route::post('/coche-create', 'Coche\CocheController@store');
    Route::post('/coche-update/{id}', 'Coche\CocheController@update');
    Route::post('/coche-delete/{id}', 'Coche\CocheController@destroy');
});


Auth::routes();
