
@extends('layoutBack')
@section('contenido')
	 <!-- START DATATABLE EXPORT -->
	 <div class="row">
      <div class="col-md-12">
	  <div class="panel panel-default">
        <div class="panel-heading">
					<div class="well well-sm"><strong>{{$detalleImagen->description}}</strong></div>
            
            <div>                 
            {!! Form::open(['route' => ['imageserviceSave'] , 'method' => 'POST', 'id' => 'form-crearEntrada', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
				{!!  csrf_field() !!}
						
                    <div class="form-group"> 
						<label  class="col-lg-2 control-label">
							Descripción
						</label>
						<input type="" name="id" id="id" value="{{$detalleImagen->id}}" hidden>
						<input type="" name="service_id" id="service_id" value="{{$detalleImagen->service_id}}" hidden>
						<input type="" name="url" id="url" value="{{$detalleImagen->url}}" hidden>

						<div class="col-lg-5">
						    <textarea class="form-control" style="text-align: left;" name="description" rows="5" id="description">
						    	{{$detalleImagen->description}}
						    </textarea>		
						</div>
                        
					</div>
					<div class="form-group">
				                <label class="col-lg-2 control-label">Subir destacada</label>
				                <div class="col-lg-5">
				                		<input type="file" name="imagen" id="imagen">
				            	</div>
				    </div>
                    <div class="form-group">
				                <label class="col-lg-2 control-label">Imagen</label>
				                <div class="col-lg-5">
				                		<img height="150" width="150" class="img-thumbnail" src="{{URL::asset('/images/servicios/'.$detalleImagen->url)}}">
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