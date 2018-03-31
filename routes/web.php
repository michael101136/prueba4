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


Route::get('/',['as' => 'inicio', 'uses' => 'PagesController@inicio']);
Route::get('inicio/',['as' => 'inicio', 'uses' => 'PagesController@inicio']);
Route::get('contacto/',['as' => 'contacto', 'uses' => 'PagesController@contacto']);
Route::get('portafolio/',['as' => 'portafolio', 'uses' => 'PagesController@portafolio']);
Route::get('nosotros/',['as'=>'nosotros','uses'=>'PagesController@nosotros']);
Route::get('habitaciones-simples/',['as'=>'habitacionessimples','uses'=>'PagesController@habitacionessimples']);
Route::get('habitaciones-dobles/',['as'=>'habitacionesdobles','uses'=>'PagesController@habitacionesdobles']);
Route::get('habitaciones-matrimoniales/',['as'=>'habitacionesmatrimoniales','uses'=>'PagesController@habitacionesmatrimoniales']);