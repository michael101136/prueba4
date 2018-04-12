
@extends('layoutBack')
@section('contenido')
	 <!-- START DATATABLE EXPORT -->
	 <div class="row">
      <div class="col-md-12">
	  <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">SERVICIOS INTERNOS</h3>
            <br/>
            <div>                 
                <form method="POST" class="form-horizontal" action="{{route('serviceLangListStore') }}">>
				    {!!  csrf_field() !!}
						
					<div class="form-group" > 
						<label  class="col-lg-2 control-label">
							Idioma
						</label>
                        <div class="col-lg-5">
						    <input type="text" class="form-control"name="id" id="id" value ="{{$idservice}}"  readonly style="visibility:hidden;">			
							<select class="form-control" name="idioma" id="idioma">
                                            <option value="1">español</option>
                                            <option value="2">Ingles</option>     
                                        </select>
						</div>
						
					</div>

                    <div class="form-group"> 
						<label  class="col-lg-2 control-label">
							Servicio 
						</label>
						<div class="col-lg-5">
						    <input type="text" class="form-control" name="name" id="name">			
						</div>
                        <input type="submit" class="btn btn-info" value="Registrar Sevicio">
					</div>
				</form>
            </div>        
        </div>                                 
    </div>
	</div>
                            </div>
@endsection