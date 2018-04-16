
@extends('layoutBack')
@section('contenido')
	 <!-- START DATATABLE EXPORT -->
	 <div class="row">
      <div class="col-md-12">
	  <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">AGREGAR IMAGENES</h3>
            <br/>
            <div>                 
            {!! Form::open(['route' => ['imageserviceStore'] , 'method' => 'POST', 'id' => 'form-crearEntrada', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}

{!!  csrf_field() !!}
						
					<div class="form-group" > 
						<label  class="col-lg-2 control-label">
							Idioma
						</label>
                        <div class="col-lg-5">
						    <input type="text" class="form-control"name="id" id="id" value ="{{$idservice}}">			
							<select class="form-control" name="idioma" id="idioma">
                                            <option value="1">español</option>
                                            <option value="2">Ingles</option>     
                                        </select>
						</div>
						
					</div>
                    <div class="form-group row">
							      <label for="" class="col-sm-1 col-form-label">Tipo de servicios</label>								
  								 <div class="col-sm-7">
									 	@foreach ($service as $itemp)

							        		<label>
							        			  <input type="radio" name="name"  value="{{$itemp->id}}"}}>
							        			  
							        			   {{ $itemp->name}}

							        		</label>

						        		@endforeach
						          </div>

						    </div>
                    <div class="form-group"> 
						<label  class="col-lg-2 control-label">
							Descripción
						</label>
						<div class="col-lg-5">
						    <input type="tex" class="form-control" name="description" id="description">			
						</div>
                        <input type="submit" class="btn btn-info" value="Registrar Sevicio">
					</div>
                    <div class="form-group row">
				                <label>Subir Imagen destacada</label>
				                <input type="file" name="imagen[]" id="imagen" multiple>
				                <p class="help-block">Subir imagen</p>
				            </div>
                {!! Form::close() !!}
            </div>        
        </div>                                 
    </div>
	</div>
    </div>
@endsection