<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class imageserviceListP extends Controller
{
    public function listar($id)
    {
    	 $servicesImage = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idImages','imageservices.url as url','imageservices.description as description','services.name as name_servicio','langs.name as langName')
            ->where('imageservices.service_id',$id)->get();
  
      return view('Back.imageservice.index',['servicesImage' => $servicesImage]);
    }
}
