<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

////////////
Route::get('Admin', function () {
  return datatables()->eloquent(App\User::query())
  ->addcolumn('btn','Admin.formulario.boton')
  ->rawcolumns(['btn'])
  ->toJson();

});
////////////
Route::get('Usuario', function () {
  return datatables()->eloquent(App\Usuario::query())
  ->addcolumn('btn','Usuario.formulario.boton')
  ->rawcolumns(['btn'])
  ->toJson();

});
////////////
Route::get('evento', function () {
  return datatables()->eloquent(App\Evento::query())
  ->addcolumn('btn','Eventos.formulario.boton')
  ->rawcolumns(['btn'])
  ->toJson();

});
