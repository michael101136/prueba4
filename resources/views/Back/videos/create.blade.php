
@extends('layoutBack')
@section('contenido')
	 <!-- START DATATABLE EXPORT -->
	 <div class="row">
      <div class="col-md-12">
	  <div class="panel panel-default">
	  	<h3 class="panel-title">Registrar Videos</h3>
        <div class="panel-heading">
            <br/>
            <div>                 
            {!! Form::open(['route' => ['videos.store'] , 'method' => 'POST', 'id' => 'form-crearEntrada', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}

				{!!  csrf_field() !!}
						
                   
                    <div class="form-group"> 
						<label  class="col-lg-2 control-label">
							Video
						</label>
						<div class="col-lg-5">
						    <textarea class="form-control" name="video" rows="5" id="video"></textarea>		
						</div>
                        
					</div>
                    
				    <div class="form-group">
				    	 <div class="col-lg-5" style="text-align: center;">
				  		 	 <input type="submit" class="btn btn-info" value="Registrar Video">
				  		 </div>
					</div>
                {!! Form::close() !!}
            </div>        
        </div>                                 
    </div>
	</div>
    </div>
@endsection