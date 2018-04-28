@extends('layoutFront')
@section('contenido')

            <section id="slider-home">
                <div class="flex-container">
                    <div class="flexslider" height="350px">
                        <ul class="slides">
                        @foreach($imagenes as $itemp)
                        <li>
                                <img src="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" alt="White Living Room">
                                <div class="flex-caption">
                                    <h2>{{$itemp->description}}</h2>
                                 
                                    <p>{{$itemp->description}}.</p>
                                </div>
                            </li>
                        @endforeach 
                           
                           
                        </ul>
                    </div>
                </div>
            </section>
            <!-- end slider -->
            
            <div class="space40"></div>
            
            <!-- begin services -->
            <section>
                <h2>{{trans('menu.Nuestro_servicio')}}</h2> 
                
                <!-- begin iconbox carousel -->
                <ul class="iconbox-carousel">
                    <li>
                        <div class="iconbox mouse thumbnail" >  
                        <center><a href="#"><img src="{{URL::asset('images/iconos/icono.png')}}" alt="Lights" style="width:30%"></a>
                      
                            <h4><a href="{{route('habitaciones-simples')}}">{{trans('menu.Habitacion_simple')}}</a></h4>
                            </center>
                        </div>
                    </li>
                    <li>
                        <div class="iconbox mouse thumbnail">
                        <center><a href="#"><img src="{{URL::asset('images/iconos/dobles.png')}}"></a>
                            <h4><a href="{{route('habitaciones-dobles')}}">{{trans('menu.Habitacion_doble')}}</a></h4>
                        </center>   
                        </div>
                    </li>
                    <li>
                        <div class="iconbox mouse thumbnail">
                        <center><a href="#"><img src="{{URL::asset('images/iconos/icono1.png')}}"></a>
                            <h4><a href="{{route('habitacionesmatrimoniales')}}">{{trans('menu.Habitacion_matrimonial')}}</a></h4>
                        <center>
                        </div>
                    </li>
                    <li>
                        <div class="iconbox mouse thumbnail">
                        <center><a href="#"><img src="{{URL::asset('images/iconos/terapia1.png')}}"></a>
                            <h4><a href="{{route('terapias-alternativas')}}">{{trans('menu.Tipo_alternativa')}}</a></h4>
                           </center>  
                        </div>
                    </li>
                    <li>
                        <div class="iconbox mouse thumbnail">
                        <center><a href="#"><img src="{{URL::asset('images/iconos/terapia2.png')}}"></a>
                            <h4><a href="{{route('terapias-complementarias')}}">{{trans('menu.Tipo_complementaria')}}</a></h4>
                        </center>
                        </div>
                    </li>
                    <li>
                        <div class="iconbox mouse thumbnail">
                        <center><a href="#"><img src="{{URL::asset('images/iconos/terapia3.png')}}"></a>
                            <h4><a href="{{route('terapias-tradicionales')}}">{{trans('menu.Tipo_tradicional')}}</a></h4>
                          </center>
                        </div>
                    </li>
                    <li>
                        <div class="iconbox mouse thumbnail">
                        <center><a href="#"><img src="{{URL::asset('images/iconos/terapia4.png')}}"></a>
                            <h4><a href="{{route('terapias-energeticas')}}">{{trans('menu.Tipo_energetica')}}</a></h4>
                        </center>      
                        </div>
                    </li>

                </ul>
                <!-- end iconbox carousel -->
            </section>
            <!-- end services -->

            <!-- begin selected projects -->
            <section>
                <h2>{{trans('menu.Galeria_imagenes')}}</h2>

                <!-- begin project carousel -->
                <ul class="project-carousel">
                @foreach($imagenesfooter as $itemp)
                    <li class="entry">
                        <a href="">
                            <div class="entry-image">
                                <a class="fancybox" href="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" alt="">
                                </a>
                            </div>
                        
  
                        <div class="entry-content">
                            <a href="{{route('portafolio')}}">
                            <p>{{$itemp->name_servicio}}</p>
                            </a>
                        </div>
                    </li>
                @endforeach          
                </ul>
                <!-- end project carousel -->
            </section>
            <!-- end selected projects -->

            

           
            <div class="clear"></div>
    @endsection
    