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
    return view('home');
});

Auth::routes();

//usuarios

route::get('/users', 'UsersController@listado');
  


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos','ProductosController@Listado');

Route::get('/agregarproducto', function () {
    return view('agregarproducto');
});
Route::post('/agregarproducto', 'ProductosController@agregar');

Route::get('/detalleProducto/{id}','ProductosController@detalle');
