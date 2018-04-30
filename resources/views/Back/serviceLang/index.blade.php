
@extends('layoutBack')
@section('contenido')
	 <!-- START DATATABLE EXPORT -->
	 <div class="row">
      <div class="col-md-12">
	 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">SERVICIOS INTERNOS</h3>
                                    <div class="btn-group pull-right">
                                    <a class="btn btn-success" href="{{route('serviceLangListcreate',$idservice)}}">
                                            Agregar
                                        </a>   
                                    </div>                                    
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Idioma</th>
                                                <th>Nombre servicios</th>
                                                <th style="float: center;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               @foreach($ServiceLang as $item)
                                            <tr>
                                                <td>{{$item->idSeLan}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->name_servicio_lan}}</td>
                                                <td>   
                                                 <a  class="btn btn-success" href="{{route('serviceLangListShow',$item->idSeLan)}} "> 
                                                        Modificar
                                                    </a>       
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>                                    
                                    
                                    </div>
                                </div>
							</div>
                            </div>
@endsection