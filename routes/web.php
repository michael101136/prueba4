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
Route::get('inicio',['as' => 'inicio', 'uses' => 'PagesController@inicio']);
Route::get('contacto/',['as' => 'contacto', 'uses' => 'PagesController@contacto']);
Route::get('portafolio/',['as' => 'portafolio', 'uses' => 'PagesController@portafolio']);
Route::get('nosotros/',['as'=>'nosotros','uses'=>'PagesController@nosotros']);
Route::get('habitaciones-simples/',['as'=>'habitaciones-simples','uses'=>'PagesController@habitacionessimples']);
Route::get('habitaciones-dobles/',['as'=>'habitaciones-dobles','uses'=>'PagesController@habitacionesdobles']);
Route::get('habitaciones-matrimoniales/',['as'=>'habitacionesmatrimoniales','uses'=>'PagesController@habitacionesmatrimoniales']);
Route::get('terapias-alternativas/',['as'=>'terapias-alternativas','uses'=>'PagesController@terapiasalternativas']);
Route::get('terapias-complementarias/',['as'=>'terapias-complementarias','uses'=>'PagesController@terapiascomplementarias']);
Route::get('terapias-tradicionales/',['as'=>'terapias-tradicionales','uses'=>'PagesController@terapiastradicionales']);
Route::get('terapias-energeticas/',['as'=>'terapias-energeticas','uses'=>'PagesController@terapiasenergeticas']);
Route::get('tarifas-paquetes/',['as'=>'tarifas-paquetes','uses'=>'PagesController@tarifaspaquetes']);
Route::get('terapias-turismosalud/',['as'=>'terapias-turismosalud','uses'=>'PagesController@turismosalud']);


Route::Post('lenguaje/{lang?}',['as'=>'lenguaje','uses'=>'PagesController@idioma'])->where([
        'lang' => 'en|es'
    ]);;
Route::resource('service' , 'ServiceController'); //llamando al controlador

Route::get('back/',['as'=>'back','uses'=>'PagesController@back']);
