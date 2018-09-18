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
//properties

Route::get('/propiedades/', 'PropertyController@show');


//CURRENCIES///////////////////////////////
Route::get('/monedas/', 'CurrencyController@show');

Route::get('/monedas/agregar', 'CurrencyController@new');

Route::post('/monedas/agregar', 'CurrencyController@save');

Route::delete('/monedas/{currency}/eliminar', 'CurrencyController@delete');

Route::get('/monedas/{currency}/editar', 'CurrencyController@edit');

Route::put('/monedas/{currency}/editar', 'CurrencyController@update');

// PROPERTYTYPES///////////
Route::get('/tiposDePropiedades/{propertyType}/editar', 'PropertyTypeController@edit');

Route::put('/tiposDePropiedades/{propertyType}/editar', 'PropertyTypeController@update');

Route::get('/tiposDePropiedades/', 'PropertyTypeController@show');

Route::delete('/tiposDePropiedades/{propertyType}/eliminar', 'PropertyTypeController@delete');

Route::get('/tiposDePropiedades/agregar', 'PropertyTypeController@new');

Route::post('/tiposDePropiedades/agregar', 'PropertyTypeController@save');


// CLIENTS////////////////

Route::get('/clientes/', 'ClientController@show');

Route::get('/clientes/{client}/editar', 'ClientController@edit');

Route::put('/clientes/{client}/editar', 'ClientController@update');

Route::delete('/clientes/{client}/eliminar', 'ClientController@delete');

Route::get('/clientes/agregar', 'ClientController@new');

Route::post('/clientes/agregar', 'ClientController@save');

//  CATEGORIES

Route::get('/categorias/', 'CategoryController@show');

Route::get('/categorias/agregar', 'CategoryController@new');

Route::post('/categorias/agregar', 'CategoryController@save');

Route::get('/categorias/{category}/editar', 'CategoryController@edit');

Route::put('/categorias/{category}/editar', 'CategoryController@update');

Route::delete('/categorias/{category}/eliminar', 'CategoryController@delete');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
