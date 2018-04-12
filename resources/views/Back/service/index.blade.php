
@extends('layoutBack')
@section('contenido')
	 <!-- START DATATABLE EXPORT -->
	 <div class="row">
      <div class="col-md-12">
	 <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">SERVICIOS</h3>
                                   
                                                                   
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre</th>
                                                <th>Fecha Creación</th>
                                                <th style="float: center;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach( $service as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>
                                                   
                                                    <a class="btn btn-success" href="{{route('serviceLangListP',$item->id)}} ">
                                                      Sevicios
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