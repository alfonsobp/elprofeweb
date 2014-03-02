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

Route::get('bienvenido', 'Welcome@index');
Route::get('informacion', 'Information@index');
Route::get('categorias', 'Categories@index');
Route::get('asignaturas', 'Subjects@index');
Route::get('filtros', 'Filters@index');