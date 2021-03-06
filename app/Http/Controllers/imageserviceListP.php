<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Imagen;
use Illuminate\Support\Facades\Storage;

class imageserviceListP extends Controller
{
    public function listar($id)
    {
    	$servicesImage = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idImages','imageservices.url as url','imageservices.name as name','imageservices.description as description','services.name as name_servicio','langs.name as langName')
            ->where('imageservices.service_id',$id)->get();

        $servicesImageName = DB::table('services')
            ->join('imageservices', 'services.id', '=', 'imageservices.service_id')
            ->join('langs', 'langs.id', '=', 'imageservices.lang_id')
            ->select('imageservices.id as idImages','imageservices.url as url','imageservices.description as description','services.name as name_servicio','langs.name as langName')
            ->where('imageservices.service_id',$id)->take(1)
            ->get();

      return view('Back.imageservice.index',['servicesImage' => $servicesImage,'idservice' => $id , 'servicesImageName' => $servicesImageName]);
    }
    public function create($id)
    {
        $service = DB::table('services')
        ->where('services.id',$id)->get();
        return view('Back.imageservice.create',['idservice'=>$id,'service'=>$service]);
    }
    public function  store(Request $request)
    {
        $file= $request->imagen;
        foreach ($file as $imagenEntrada)
         {
            $imageService= new Imagen;
            $imageService->name = $request->titulo;
            $imageService->url = '';
            $imageService->description = $request->description;
            $imageService->service_id = $request->id;
            $imageService->lang_id = $request->idioma;
            $imageService->save();
            
            $idimagen=DB::table('imageservices')->max('id');
            $extesion=$idimagen.'.'.$imagenEntrada->getClientOriginalExtension();
            DB::table('imageservices')->where('id',$idimagen)
                                      ->update(['url' =>$extesion]);
            $destino=public_path().'/images/servicios/';
            $subir =$imagenEntrada->move($destino,$extesion);        
        }
        
        return redirect()->route('imageservice-p',['id' => $request->id]);      
    }

     public function show($id)
    {

        $detalleImagen =DB::table('imageservices')->where('id' , $id)->first();
        //dd($detalleImagen);
        return view('Back.imageService.show', ['detalleImagen' => $detalleImagen]);
    }
    public function save(Request $request)
    {
        if($request->hasFile('imagen'))
        {
             $url='images/servicios/'.$request->url;
             unlink($url);//eliminar una imagen de un directorio

            $file= $request->imagen;
            $extesion=$request->id.'.'.$file->getClientOriginalExtension();
            
            DB::table('imageservices')->where('id',$request->id)
                                      ->update(['description' => $request->description,'url' =>$extesion,'name' =>$request->titulo]);

            $destino=public_path().'/images/servicios/';
            $subir =$file->move($destino,$extesion);  

       }else
       {
         DB::table('imageservices')->where('id',$request->id)
                                      ->update(['description' => $request->description,'name' =>$request->titulo]);
       }
        
        return redirect()->route('imageservice-p',['id' => $request->service_id]);      

    }
}
