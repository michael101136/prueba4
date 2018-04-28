
@extends('layoutBack')
@section('contenido')
     <!-- START DATATABLE EXPORT -->
     <div class="row">
      <div class="col-md-12">
         @foreach($servicesImageName  as $item)
             <h3>Imagenes de {{$item->name_servicio}}</h3>
        @endforeach
         <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                    <a class="btn btn-success" href="{{route('imageserviceCreate',$idservice)}}">
                                                      Agregar
                                    </a>                                  
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Imagen</th>
                                                <th>Descripción</th>
                                                <th>Lang</th>
                                                <th style="float: center;">Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach($servicesImage  as $item)
                                            <tr>
                                                <td>{{$item->idImages}}</td>
                                                <td> <img src="{{URL::asset('/images/servicios/'.$item->url)}}" width="50px" height="50px" alt="Klorofil Logo" class="img-responsive logo"{{$item->url}} ></td>
                                                <td>{{$item->description}}</td>
                                                <td>
                                                    {{$item->langName}}
                                                </td>
                                                 <td>
                                                    
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