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
		
		$lang=session('lang');
		if($lang=='es')
	    {
			$imagenes = DB::table('services')
			->join('imageservices', 'services.id', '=', 'imageservices.service_id')
			->join('langs', 'langs.id', '=', 'imageservices.lang_id')
			->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name','imageservices.description','imageservices.name')
			->where('langs.name',$lang)
			->where('services.id','8')->get();
		
			$imagenesfooter = DB::table('services')
			->join('imageservices', 'services.id', '=', 'imageservices.service_id')
			->join('langs', 'langs.id', '=', 'imageservices.lang_id')
			->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[1,7])->get();	
			
			return view('paginas/inicio',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
		else
		{	
			$imagenes = DB::table('services')
			->join('imageservices', 'services.id', '=', 'imageservices.service_id')
			->join('langs', 'langs.id', '=', 'imageservices.lang_id')
			->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name','imageservices.description','imageservices.name')
			->where('langs.name',$lang)
			->where('services.id','8')->get();

			$imagenesfooter = DB::table('services')
			->join('imageservices', 'services.id', '=', 'imageservices.service_id')
			->join('langs', 'langs.id', '=', 'imageservices.lang_id')
			->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[1,7])->get();	
			
			return view('paginas/inicio',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
		  // return view('paginas/inicio');
	}
	public function idioma(Request $request)
	{

		session(['lang' => $request->idiomaMultiple]);
   
		 return \Redirect::back();

	}
	public function portafolio()
	{
		$lang=session('lang');
	   	if($lang=='es')
	    {
		$imagenesfooter = DB::table('services')
		->join('imageservices', 'services.id', '=', 'imageservices.service_id')
		->join('langs', 'langs.id', '=', 'imageservices.lang_id')
		->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
		->where('langs.name',$lang)
		->whereBetween('services.id',[1,3])->get();	
		
		return view('paginas/portafolio',['imagenesfooter'=>$imagenesfooter]);
		}
		else
		{
		$imagenesfooter = DB::table('services')
		->join('imageservices', 'services.id', '=', 'imageservices.service_id')
		->join('langs', 'langs.id', '=', 'imageservices.lang_id')
		->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
		->where('langs.name',$lang)
		->whereBetween('services.id',[1,3])->get();	
		
		return view('paginas/portafolio',['imagenesfooter'=>$imagenesfooter]);
		}
	}
	public function portafolioturismo()
	{
		$lang=session('lang');
	   	if($lang=='es')
	    {
		$imagenesfooter = DB::table('services')
		->join('imageservices', 'services.id', '=', 'imageservices.service_id')
		->join('langs', 'langs.id', '=', 'imageservices.lang_id')
		->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
		->where('langs.name',$lang)
		->whereBetween('services.id',[1,3])->get();	
		
		return view('paginas/portafolio',['imagenesfooter'=>$imagenesfooter]);
		}
		else
		{
		$imagenesfooter = DB::table('services')
		->join('imageservices', 'services.id', '=', 'imageservices.service_id')
		->join('langs', 'langs.id', '=', 'imageservices.lang_id')
		->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
		->where('langs.name',$lang)
		->whereBetween('services.id',[1,3])->get();	
		
		return view('paginas/portafolio',['imagenesfooter'=>$imagenesfooter]);
		}
	}
	public function contacto()
	{
	
		   $paises=DB::table('paises')->get();
		   
		   return view('paginas/contacto',['paises' =>$paises]);

	}
	public function nosotros()
	{
		return view('paginas/nosotros');
	}
	public function nosotrosbiografia()
	{
		$lang=session('lang');
	   	if($lang=='es')
	    {
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','10')->get();	
		
		return view('paginas/nosotrosbiografia',['imagenes'=>$imagenes]);
		}
		else
		{
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','10')->get();
		
		return view('paginas/nosotrosbiografia',['imagenes'=>$imagenes]);
		}
		
		

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

			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[1,3])->get();
			//dd($imagenes);		
			return view('paginas/habitacionessimples',['servicios' =>$servicios,'imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
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
			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[1,3])->get();		
			return view('paginas/habitacionessimples',['servicios' =>$servicios,'imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		
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
				
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','2')->get();	
			
			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[1,3])->get();		
			
			return view('paginas/habitacionesdobles',['servicios' =>$servicios,'imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}else
		{
			$servicios = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
			->where('langs.name',$lang)
			->where('services.id','2')->get();
			
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','2')->get();

			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[1,3])->get();	

			return view('paginas/habitacionesdobles',['servicios' =>$servicios,'imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
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
			
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','3')->get();
			
			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[1,3])->get();		
			
			return view('paginas/habitacionesmatrimoniales',['servicios' =>$servicios,'imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);			
		}
		if($lang=='en') 
		{
			$servicios = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
			->where('langs.name',$lang)
			->where('services.id','3')->get();
			
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','3')->get();

			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[1,3])->get();		
			
			return view('paginas/habitacionesmatrimoniales',['servicios' =>$servicios,'imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);	
		}
		
	}
	public function terapiasalternativas()
	{
		$lang=session('lang');
	   	if($lang=='es')
	    {
			$imagenes = DB::table('services')
			->join('imageservices', 'services.id', '=', 'imageservices.service_id')
			->join('langs', 'langs.id', '=', 'imageservices.lang_id')
			->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','4')->get();
		
			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[4,7])->get();

			return view('paginas/terapiasalternativas',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
		else
		{	
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','4')->get();

			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[4,7])->get();

			return view('paginas/terapiasalternativas',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
	}
	public function terapiascomplementarias()
	{
		$lang=session('lang');
		if($lang=='es')
	    {
			$imagenes = DB::table('services')
			->join('imageservices', 'services.id', '=', 'imageservices.service_id')
			->join('langs', 'langs.id', '=', 'imageservices.lang_id')
			->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','5')->get();
			
			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[4,7])->get();
			
			return view('paginas/terapiascomplementarias',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
		else
		{	
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','5')->get();

			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[4,7])->get();

			return view('paginas/terapiascomplementarias',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
	}
	public function terapiastradicionales()
	{
		$lang=session('lang');
	   	if($lang=='es')
	    {
			$imagenes = DB::table('services')
			->join('imageservices', 'services.id', '=', 'imageservices.service_id')
			->join('langs', 'langs.id', '=', 'imageservices.lang_id')
			->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','6')->get();
		
			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[4,7])->get();

			return view('paginas/terapiastradicionales',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
		else
		{	
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','6')->get();

			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[4,7])->get();

			return view('paginas/terapiastradicionales',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
	}
	public function terapiasenergeticas()
	{
		$lang=session('lang');
	   	if($lang=='es')
	    {
			$imagenes = DB::table('services')
			->join('imageservices', 'services.id', '=', 'imageservices.service_id')
			->join('langs', 'langs.id', '=', 'imageservices.lang_id')
			->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','6')->get();
			
			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[4,7])->get();

			return view('paginas/terapiasenergeticas',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
		else
		{	
			$imagenes = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->where('services.id','6')->get();

			$imagenesfooter = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idSeLan','services.name as name_servicio','imageservices.url as imageurl','langs.name')
			->where('langs.name',$lang)
			->whereBetween('services.id',[4,7])->get();

			return view('paginas/terapiasenergeticas',['imagenes'=> $imagenes,'imagenesfooter'=>$imagenesfooter]);
		}
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
