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

Route::get('template', function () {
    return view('template');
});

Route::get('tabla','CorreoController@index')->name('tabla');

Route::resource('Correo', 'CorreoController');

