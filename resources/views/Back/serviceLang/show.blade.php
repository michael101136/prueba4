
@extends('layoutBack')
@section('contenido')
	 <!-- START DATATABLE EXPORT -->
	 <div class="row">
      <div class="col-md-12">
	  <div class="panel panel-default">
        <div class="panel-heading">
					<div class="well well-sm"><strong>Modificar Sub Servicio</strong></div>
            
            <div>                 
            {!! Form::open(['route' => ['serviceLangListSave'] , 'method' => 'POST', 'id' => 'form-crearEntrada', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
				{!!  csrf_field() !!}
						
                    <div class="form-group"> 
						<label  class="col-lg-2 control-label">
							Idioma
						</label>
						<input type="text" name="id" id="id" value="{{$serviceslangs->id}}" hidden>
						<input type="text" name="service_id" id="service_id" value="{{$serviceslangs->service_id}}" hidden>

						<div class="col-lg-5">
							{!! Form::select('type', ['1' => 'Español', '2' => 'Ingles'],$langs_id, 
                            ['class' => 'form-control', 'id' =>'idioma_id', 'name' =>'idioma_id']) !!}
						</div>
                        
					</div>
					<div class="form-group"> 
						<label  class="col-lg-2 control-label">
							Servicio
						</label>
						<div class="col-lg-6">
						    <input type="text" name="description" id="description" class ="form-control" value="{{ $serviceslangs->name}}">	
						</div>
					</div>
				    
				    <div class="form-group">
				    	 <div class="col-lg-5" style="text-align: center;">
				  		 	 <input type="submit" class="btn btn-info" value="Modificar Sevicio">
				  		 </div>
					</div>
                {!! Form::close() !!}
        </div>                                 
    </div>
	</div>
    </div>
@endsection