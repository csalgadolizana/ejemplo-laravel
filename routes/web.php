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

Route::get('/','FrontController@index');

Route::post('/catalogo/save', 'CatalogoController@save');
Route::get('/catalogo/showupdate/{id}', 'CatalogoController@showUpdate');
Route::post('/catalogo/update/{id}', 'CatalogoController@update');
Route::get('/catalogo/destroy/{id}', 'CatalogoController@destroy');
Route::get('/catalogo/show/{id}', 'CatalogoController@show');

Route::resource('catalogo', 'CatalogoController');

/*
Otra opcion
Route::get('/', function () {
    return view('web.index');
});


*/