<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
	public function inicio()
	{
	
		   return view('paginas/inicio');
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
}
