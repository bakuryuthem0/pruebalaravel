<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('inico','ContinenteController@BuscarContinente');
Route::get('/','ContinenteController@BuscarContinente');
Route::get('estados/{pais}','PaisController@BuscarPais');
Route::get('continentes/{continente}','ContinenteController@BuscarPaises');
Route::get('busqueda','BuscadorController@Buscarcosas');
?>
dgadgjadjgdajggjagd