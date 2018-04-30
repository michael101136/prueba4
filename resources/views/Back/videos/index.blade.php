
@extends('layoutBack')
@section('contenido')
     <!-- START DATATABLE EXPORT -->
     <div class="row">
      <div class="col-md-12">
     <div class="panel panel-default">
         <h3 class="panel-title">Galeria de Videos</h3>
                                <div class="panel-heading">
                                   
                                      <div class="btn-group pull-left">
                                        <a class="btn btn-success" href="{{route('videos.create')}}">
                                            Agregar
                                        </a>   
                                    </div>                                  
                                    
                                </div>

                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre</th>
                                                <th style="float: center;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                               @foreach($videos as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td style="height: 20px;width: 100px;">
                                                    {!!$item->name!!}
                                                </td>
                                                <td>   
                                                 <a  class="btn btn-success" href="{{route('videos.show',$item->id)}} "> 
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