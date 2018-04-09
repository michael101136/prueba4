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
            ->select('imageservices.id as idImages','services.name as name_servicio')
            ->where('imageservices.service_id',$id)->get();
          dd($servicesImage);
      return view('Back.imageservice.index');
    }
}
