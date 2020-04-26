<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Rutas

Route::middleware(['auth'])->group(function(){
  // Roles 
  Route::post('roles/store', 'RoleController@store')->name('crearRol')->middleware('can:roles.create');

  Route::get('roles', 'RoleController@index')->name('roles')->middleware('can:roles.index');

  Route::get('roles/create', 'RoleController@create')->name('crear_rol')->middleware('can:roles.create');

  Route::put('roles/{rol}', 'RoleController@update')->name('actualizar_rol')->middleware('can:roles.edit');

  Route::get('roles/{rol}', 'RoleController@show')->name('ver_rol')->middleware('can:roles.show');

  Route::delete('roles/{rol}', 'RoleController@destroy')->name('eliminar_rol')->middleware('can:roles.destroy');

  Route::get('roles/{rol}/edit', 'RoleController@edit')->name('editar_rol')->middleware('can:roles.edit');

  // Productos 
  Route::post('crearProducto/store', 'ProductController@store')->name('crearProducto')->middleware('can:productos.create');

  Route::get('productos', 'ProductController@index')->name('productos')->middleware('can:productos.index');

  Route::get('crear_producto', 'ProductController@create')->name('crear_producto')->middleware('can:productos.create');

  Route::put('actualizar/{product}', 'ProductController@update')->name('actualizarProducto')->middleware('can:productos.edit');

  Route::get('verProducto/{product}', 'ProductController@show')->name('verProducto')->middleware('can:productos.show');

  Route::delete('eliminarProducto/{product}', 'ProductController@destroy')->name('eliminarProducto')->middleware('can:productos.destroy');

  Route::get('editarProducto/{product}/edit', 'ProductController@edit')->name('editarProducto')->middleware('can:productos.edit');

  // Usuarios 
  
  Route::get('users', 'UserController@index')->name('usuarios')->middleware('can:users.index');

  Route::put('users/{usuario}', 'UserController@update')->name('actualizarUsuario')->middleware('can:users.edit');

  Route::get('users/{usuario}', 'UserController@show')->name('ver_usuario')->middleware('can:users.show');

  Route::delete('users/{usuario}', 'UserController@destroy')->name('eliminar_usuario')->middleware('can:users.destroy');

  Route::get('users/{usuario}/edit', 'UserController@edit')->name('editar_usuario')->middleware('can:users.edit');
});