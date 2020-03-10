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

Route::get('/', function () {
    return view('principal');
});

//Productes
Route::get('/productes', 'productsController@llistat');
Route::get('/productes/afegir', 'productsController@formAdd');
Route::post('/productes/guardar', 'productsController@add');
Route::get('/productes/esborrar/{id}', 'productsController@delete')->where('codi','[0-9]+');
Route::get('/productes/edit/{id}', 'productsController@formUpdate')->where('codi','[0-9]+');
Route::post('/productes/update/{id}', 'productsController@update')->where('codi','[0-9]+');

//usuaris
Route::get('/usuaris', 'usersController@llistat');
Route::get('/usuaris/afegir', 'usersController@formAdd');
Route::post('/usuaris/guardar', 'usersController@add');
Route::get('/usuaris/esborrar/{id}', 'usersController@delete')->where('codi','[0-9]+');
Route::get('/usuaris/edit/{id}', 'usersController@formUpdate')->where('codi','[0-9]+');
Route::post('/usuaris/update/{id}', 'usersController@update')->where('codi','[0-9]+');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
