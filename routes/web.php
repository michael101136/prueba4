<?php

Route::get('test' , function(){

	$user = new App\User;
	
	$user->name ='admin';

	$user->email = 'hotel@gmail.com';

	$user->password = bcrypt('123');

	$user->save();

	return $user;

});

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
Route::get('nosotros-biografia/',['as'=>'nosotros-biografia','uses'=>'PagesController@nosotrosbiografia']);
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

Route::resource('serviceLang' , 'ServiceLangController'); //llamando al controlador
Route::get('serviceLangListP/{id}' , ['as'=>'serviceLangListP','uses'=>'ServicelangListP@listar']); //llamando al controlador
Route::get('serviceLangListcreate/{idservice}' , ['as'=>'serviceLangListcreate','uses'=>'ServicelangListP@create']);
Route::post('serviceLangListStore' , ['as'=>'serviceLangListStore','uses'=>'ServicelangListP@store']);

Route::get('imageservice/{id}' , ['as'=>'imageservice-p','uses'=>'imageserviceListP@listar']); 
Route::get('imageserviceCreate/{idservice}' , ['as'=>'imageserviceCreate','uses'=>'imageserviceListP@create']);
Route::post('imageserviceStore' , ['as'=>'imageserviceStore','uses'=>'imageserviceListP@store']);

Route::resource('mensaje' , 'MensajeController');

Route::get('back/',['as'=>'back','uses'=>'PagesController@back']);

Route::resource('user' , 'UserController');


Route::get('login','Auth\LoginController@showLoginForm');
Route::post('login','Auth\LoginController@login');
Route::get('logout',['as' =>'logout','uses' => 'Auth\LoginController@logout']);
//Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);

Route::get('/home', function () {
    if(Auth::check()) {
        return redirect('/service');
    } else {
        return view('layoutLogin');
    }
});

