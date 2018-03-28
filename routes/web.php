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

Route::get('/contacto', function () {
    return view('paginas/contacto');
});
Route::get('/portafolio', function () {
    return view('paginas/portafolio');
});
Route::get('/',['as' => 'inicio', 'uses' => 'PagesController@inicio']);
Route::get('inicio/',['as' => 'inicio', 'uses' => 'PagesController@inicio']);
Route::get('contacto/',['as' => 'contacto', 'uses' => 'PagesController@contacto']);
Route::get('portafolio/',['as' => 'portafolio', 'uses' => 'PagesController@portafolio']);

