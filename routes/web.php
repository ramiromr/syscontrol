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

/*Route::get('inholita','personaController@holita');
Route::get('x', 'personaController@excelencia');
Route::get('p','personaController@preparate');
Route::get('saludar/{nombre}','personaController@mostrarNombre');
Route::get('ap/{apellido}','personaController@mostrarApellido');*/

/*Route::get('index','personaController@index');
Route::get('creacion','personaController@create');*/

Route::resource('persona','personaController');
Route::resource('celular','celularController');
Route::resource('articulo','articuloController');
Route::resource('empresa','empresaController');
Route::resource('extension','extensionController');
Route::resource('servidor','extensionController');
Route::resource('email','extensionController');
Route::resource('anexo','extensionController');
Route::resource('fijo','extensionController');
Route::resource('rol','extensionController');
Route::resource('dirempresa','extensionController');
Route::resource('lgtrabajo','extensionController');
Route::resource('celular','extensionController');