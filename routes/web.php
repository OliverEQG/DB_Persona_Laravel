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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PersonasController@index');
Route::get('/create', 'PersonasController@create');
Route::delete('/{id}', 'PersonasController@destroy');
Route::get('/{id}/edit', 'PersonasController@edit');
Route::post('/{id}', 'PersonasController@update');
Route::post('/', 'PersonasController@store');
//Route::resource('/', 'PersonasController');
