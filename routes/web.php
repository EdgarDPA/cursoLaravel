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
    return view('welcome');
});



//Route::resource('crudLaravel', 'UserController');

Route::get('crudLaravel', 'UserController@index')->name('iniciocrudlaravel');

Route::post('nuevoUsuario', 'UserController@store')->name('usuario.crear');

Route::get('actualizarUsuario/{id}', 'UserController@edit')->name('usuario.editar');

Route::post('usuarioUpdate/{id}', 'UserController@update')->name('usuario.actualizar');

Route::get('eliminarUsuario/{id}', 'UserController@destroy')->name('usuario.eliminar');
Auth::routes();
//ruta auth
Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'LogController@logout');
