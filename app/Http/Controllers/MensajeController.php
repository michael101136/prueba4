<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mensaje;
use Illuminate\Support\Facades\Session;
use DB;
class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensaje = DB::table('paises')
            ->join('mensajes', 'paises.id', '=', 'mensajes.paise_id')
            ->select('*')
            ->orderBy('mensajes.id', 'asc ')
            ->get();

        return view('Back.mensaje.index',['mensaje' => $mensaje]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'nombre' => 'required',
            'email' => 'email|required',
            'telefono' => 'required|numeric',
            'dni' =>  'numeric|required',
            'asunto' =>'required|max:200',
            'mensaje' =>'required|max:200'
        ]);
  
        $mensajes =Mensaje::create($request->all());
         
            // protected $fillable = ['nombre','comentario' ,'email','telefono','mensaje','user_id','paise_id']; //proteje de la signacion masiva de datos

         return redirect()->route('contacto')->with('info' , 'Tu mensaje fue recibido en breves minutos nos comunicaremos con usted');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
