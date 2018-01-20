<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'UsuarioController@index');
Route::post('InsertarUsuario','UsuarioController@store');
Route::post('Eliminar','UsuarioController@destroy');
Route::post('update', 'UsuarioController@update');
Route::post('Editar', 'UsuarioController@edit');
//Route::post('Actualizar', 'UsuarioController@indexupdate');
//Route::post('Actualizado', 'UsuarioController@guardaredit');
