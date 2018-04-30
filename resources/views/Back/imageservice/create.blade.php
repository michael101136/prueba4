
@extends('layoutBack')
@section('contenido')
	 <!-- START DATATABLE EXPORT -->
	 <div class="row">
      <div class="col-md-12">
	  <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
            	@foreach ($service as $itemp)
					<div class="well well-sm">Imagen de {{$itemp->name}}</div>
			    @endforeach
			        	</h3>
            <br/>
            <div>                 
            {!! Form::open(['route' => ['imageserviceStore'] , 'method' => 'POST', 'id' => 'form-crearEntrada', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}

				{!!  csrf_field() !!}
						
					<div class="form-group" style="margin-top: -50px;" > 

					<input type="text" class="form-control" name="id" id="id" value ="{{$idservice}}" style="visibility:hidden;">			
						 	@foreach ($service as $itemp)

				        	    <input type="text" name="name"  value="{{$itemp->id}}" style="visibility:hidden;">
							    <input type="text" class="form-control" name="name" id="name" value ="{{$itemp->name}}" style="visibility:hidden;">			
			        		@endforeach

						<label  class="col-lg-2 control-label">
							Idioma
						</label>
                        <div class="col-lg-5">
							<select class="form-control" name="idioma" id="idioma">
                                <option value="1">español</option>
                                <option value="2">Ingles</option>     
                            </select>
						</div>
						
					</div>
                   <div class="form-group"> 
						<label  class="col-lg-2 control-label">
							Título
						</label>
						<div class="col-lg-5">
							<input type="text" name="titulo" id="titulo" class="form-control">
						</div>
                        
					</div>
                    <div class="form-group"> 
						<label  class="col-lg-2 control-label">
							Descripción
						</label>
						<div class="col-lg-5">
						    <textarea class="form-control" name="description" rows="5" id="description"></textarea>		
						</div>
                        
					</div>
                    <div class="form-group">
				                <label class="col-lg-2 control-label">Subir destacada</label>
				                <div class="col-lg-5">
				                		<input type="file" name="imagen[]" id="imagen" multiple>
				            	</div>
				    </div>
				    <div class="form-group">
				    	 <div class="col-lg-5" style="text-align: center;">
				  		 	 <input type="submit" class="btn btn-info" value="Registrar Servicio">
				  		 </div>
					</div>
                {!! Form::close() !!}
            </div>        
        </div>                                 
    </div>
	</div>
    </div>
@endsection