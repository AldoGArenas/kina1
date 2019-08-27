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
})->name('home');
// Route::get('/', function () {
//     return redirect()->route('inicio');
// });
// Route::get('/inicio', 'HomeController@index')->name('inicio');
// Route::get('/nosotros', 'NosotrosController@index')->name('nosotros');
// Route::get('/acerca', 'AcercaController@index')->name('acerca');
// Route::get('/contacto', 'ContactoController@index')->name('contacto');
Route::get('/productos', 'ProductoController@index')->name('productos');
Route::get('/productos-store', 'ProductoController@store')->name('productos.store');

Route::get('/contacto', function () {
    return view('contenido.contacto');
})->name('contacto');
Route::get('/servicios', function () {
    return view('contenido.servicios');
})->name('servicios');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
