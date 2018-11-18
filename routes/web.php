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

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('menu', 'VumeController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('Admin','Admin\AdminController');
Route::get('destroy/{id}', 'Admin\AdminController@destroy')->name('destroy');
Route::resource('Usuario','Admin\UsuarioController');
Route::get('Descargar/{id}','Admin\UsuarioController@Descargar')->name('Descargar');
Route::resource('evento','Admin\EventoController');
Route::get('destroy/{id}', 'Admin\EventoController@destroy')->name('destroy');
Route::get('listado_graficas', 'GraficaController@index')->name('listado_graficas');
Route::get('grafica_registros/{anio}/{mes}', 'GraficaController@registros_mes')->name('grafica_registros');
Route::get('grafica_registros_eventos/{anio}/{mes}', 'GraficaController@grafica_registros_eventos')->name('grafica_registros_eventos');
Route::get('grafica_publicaciones', 'GraficaController@total_publicaciones');

Route::get('reportes', 'Admin\PdfController@index')->name('reportes');
Route::get('crear_reporte_Usuario/{tipo}', 'Admin\PdfController@crear_reporte_Usuario')->name('crear_reporte_Usuario');
