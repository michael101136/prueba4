<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    function __construct()
    {
         $this->middleware('verificarIdioma');
    }

	public function inicio()
	{
		
		   return view('paginas/inicio');
	}
	public function idioma(Request $request)
	{
		

		session(['lang' => $request->idiomaMultiple]);
   
		 return \Redirect::back();

	}
	public function portafolio()
	{
		
		  return view('paginas/portafolio');
	}
	public function contacto()
	{
	
		   return view('paginas/contacto');
	}
	public function nosotros()
	{
		return view('paginas/nosotros');
	}
	public function nosotrosbiografia()
	{
		return view('paginas/nosotrosbiografia');
	}
	public function habitacionessimples()
	{
		return view('paginas/habitacionessimples');
	}
	public function habitacionesdobles()
	{
		return view('paginas/habitacionesdobles');
	}
	public function habitacionesmatrimoniales()
	{
		return view('paginas/habitacionesmatrimoniales');
	}
	public function terapiasalternativas()
	{
		return view('paginas/terapiasalternativas');
	}
	public function terapiascomplementarias()
	{
		return view('paginas/terapiascomplementarias');
	}
	public function terapiastradicionales()
	{
		return view('paginas/terapiastradicionales');
	}
	public function terapiasenergeticas()
	{
		return view('paginas/terapiasenergeticas');
	}
	public function tarifaspaquetes()
	{
		return view('paginas/tarifaspaquetes');
	}
	public function turismosalud()
	{
		return view('paginas/turismosalud');
	}
	public function back()
	{
		return view('paginas/back');
	}
}
