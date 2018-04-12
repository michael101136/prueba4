<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\ServiceLang;
class ServicelangListP extends Controller
{
     public function listar($id)
    {
       
        $serviceslangs = DB::table('services')
            ->join('serviceslangs', 'services.id', '=', 'serviceslangs.service_id')
            ->join('langs', 'langs.id', '=', 'serviceslangs.lang_id')
            ->select('serviceslangs.id as idSeLan','services.name as name_servicio','serviceslangs.name as name_servicio_lan','langs.name')
            ->where('serviceslangs.service_id',$id)->get();
        return view('Back.serviceLang.index',['ServiceLang' => $serviceslangs,'idservice'=>$id]);

    }
    public function create($id)
    {
        return view('Back.serviceLang.create',['idservice'=>$id]);
    }
    public function store(Request $request)
    {
        $serviceLang = new ServiceLang;
        $serviceLang->name = $request->name;
        $serviceLang->service_id = $request->id;
        $serviceLang->lang_id = $request->idioma;
        $serviceLang->save();
        return redirect()->route('serviceLangListP',['id' => $request->id]);
    }
}
