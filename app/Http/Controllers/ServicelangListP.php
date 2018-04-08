<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ServicelangListP extends Controller
{
     public function listar($id)
    {
        $serviceslangsw = DB::table('serviceslangs')->where('service_id',$id)->first();
        $serviceslangs = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
            ->where('serviceslangs.id',$id)->get();
            
        return view('Back.serviceLang.index',['ServiceLang' => $serviceslangs]);

    }
}
