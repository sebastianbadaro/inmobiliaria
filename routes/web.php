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
// PROPERTYTYPE
Route::get('/tiposDePropiedades/{propertyType}/editar', 'PropertyTypeController@edit');

Route::put('/tiposDePropiedades/{propertyType}/editar', 'PropertyTypeController@update');

Route::get('/tiposDePropiedades/', 'PropertyTypeController@show');

Route::delete('/tiposDePropiedades/{propertyType}/eliminar', 'PropertyTypeController@delete');

Route::get('/tiposDePropiedades/agregar', 'PropertyTypeController@new');

Route::post('/tiposDePropiedades/agregar', 'PropertyTypeController@save');










Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
