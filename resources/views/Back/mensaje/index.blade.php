
@extends('layoutBack')
@section('contenido')
	 <!-- START DATATABLE EXPORT -->
	 <div class="row">
      <div class="col-md-12">
	 <div class="panel panel-default">
                                <div class="panel-heading">

                                    <h3 class="panel-title">MENSAJES ENVIADOS</h3>                                

                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre</th>
                                                <th>Teléfono</th>
                                                <th>Dni</th>
                                                <th>Pais</th>
                                                <th>Asunto</th>
                                                <th>Mensaje</th>

                                                <th>Fecha Creación</th>
                                                <th style="float: center;">Atendido</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach( $mensaje as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->nombre}}</td>
                                                <td>{{$item->telefono}}</td>
                                                <td>{{$item->dni}}</td>
                                                <td>{{$item->Pais}}</td>
                                                <td>{{$item->asunto}}</td>
                                                <td>{{$item->mensaje}}</td>
                                                <td>{{$item->created_at}}</td>
                                                <td>
                                                <label class="switch">
                                                        <input type="checkbox"  value="0"/>
                                                        <span></span>
                                                </label>
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