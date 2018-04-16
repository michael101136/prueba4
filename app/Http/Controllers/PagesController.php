<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   
    function __construct()
    {
         $this->middleware('verificarIdioma');
    }

	public function inicio()
	{
		  		
		if (session()->exists('lang')) {
		    
		}
		else
		{
			session(['lang' =>'es']);
		}
		  
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
		$lang=session('lang');
	   	if($lang=='es')
	    {
			$servicios = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
			->where('langs.name',$lang)
			->where('services.id','1')->get();

			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','1')->get();
			//dd($imagenes);		
			return view('paginas/habitacionessimples',['servicios' =>$servicios,'imagenes'=> $imagenes]);
		}else
		{
			$servicios = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
			->where('langs.name',$lang)
			->where('services.id','1')->get();

			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','1')->get();
			//dd($imagenes);		
			return view('paginas/habitacionessimples',['servicios' =>$servicios,'imagenes'=> $imagenes]);
		
		}
		
	}
	public function habitacionesdobles()
	{
		$lang=session('lang');
	   if($lang=='es')
	    {
			$servicios = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
			->where('langs.name',$lang)
			->where('services.id','2')->get();
			//dd($servicios);		
			return view('paginas/habitacionesdobles',['servicios' =>$servicios]);
		}else
		{
			$servicios = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
			->where('langs.name',$lang)
			->where('services.id','2')->get();
			//dd($servicios);
			return view('paginas/habitacionesdobles',['servicios' =>$servicios]);
		}
	}
	public function habitacionesmatrimoniales()
	{
		$lang=session('lang');
	   	if($lang=='es')
	    {
			$servicios = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
			->where('langs.name',$lang)
			->where('services.id','3')->get();
			//dd($servicios);		
			return view('paginas/habitacionesmatrimoniales',['servicios' =>$servicios]);			
		}
		if($lang=='en') 
		{
			$servicios = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
			->where('langs.name',$lang)
			->where('services.id','3')->get();
			//dd($servicios);
			return view('paginas/habitacionesmatrimoniales',['servicios' =>$servicios]);
		}
		
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
