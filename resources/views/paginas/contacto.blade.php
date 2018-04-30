@extends('layoutFront')
@section('contenido')
            <!-- begin page header -->
            <header id="page-header">
                <h3 id="page-title">{{trans('contacto.Contacto')}}</h3> 
                 <div class="notification-box notification-box-error " style="display: none;">
                <p>Your message couldn't be sent because a server error occurred. Please try again.</p>
                <a href="#" class="notification-close notification-close-error">x</a>
               
            </div>
   
            </header>
            <!-- end page header -->
            
            <!-- begin main content -->
            
                <!-- begin google map --> 
            <section>
                 @if(session()->has('info'))
                      <div class="notification-box notification-box-success">
                         <h3> {{ session('info')}} </h3>
                      </div>
                     @endif
                
            </section>
            <!-- end google map -->
            <br/>
            <!-- begin main -->
            <section id="main" class="three-fourths">
            <!-- begin contact form -->
            <h2>{{trans('contacto.Contactenos')}}</h2>
            <br/>
            <p>{{trans('contacto.Introduccion')}}</p>
            <br/>
                    

            <div class="notification-box notification-box-success" style="display: none;">
                <p>Your message has been successfully sent. We will get back to you as soon as possible.</p>
                <a href="#" class="notification-close notification-close-success">x</a>
            </div>
            
           
            <form class="content-form" method="POST" action="{{route('mensaje.store')}}">
                 {!!  csrf_field() !!}
                 <p>
                    <label for="name">{{trans('contacto.Pais')}}<span class="note">*</span></label>
                    <select style="height: 35px;width: 370px;" name="paise_id" id="paise_id">
                        @foreach ($paises as $itemp)
                            <option value="{{$itemp->id}}">{{$itemp->Pais}}</option>
                        @endforeach 

                    </select>

                 </p>
                 
                <p>
                    <label for="name">{{trans('contacto.Nombre')}}<span class="note">*</span></label>
                    <input id="nombre" type="text" name="nombre" value="{{old('nombre')}}" class="required">
                    <span class="error">
                        {!! $errors->first('nombre') !!}
                    </span>
                </p>
                
                <p>
                    <label for="email">{{trans('contacto.Correo')}}<span class="note">*</span></label>
                    <input id="email" type="email" name="email" value="{{old('email')}}">
                    <span class="error">
                        {{$errors->first('email')}}
                     </span>
                </p>
                <p>
                    <label for="telefono">{{trans('contacto.Telefono')}}<span class="note">*</span></label>
                    <input id="telefono" type="text" name="telefono" value="{{old('telefono')}}">
                     <span class="error">
                        {{$errors->first('telefono')}}
                     </span>
                </p>
                <p>
                    <label for="url">{{trans('contacto.DNI')}}<span class="note">*</span></label>
                    <input id="dni" type="text" name="dni" value="{{old('dni')}}">
                    <span class="error">
                        {{$errors->first('dni')}}
                     </span>
                </p>
                <p>
                    <label for="url">{{trans('contacto.Asunto')}}<span class="note">*</span></label>
                    <input id="asunto" type="text" name="asunto" value="{{old('asunto')}}">
                    <span class="error">
                        {{$errors->first('asunto')}}
                     </span>
                </p>
                <p>
                    <label for="message">{{trans('contacto.Mensaje')}}<span class="note">*</span></label>
                    <textarea id="mensaje" cols="68" rows="8" name="mensaje" class="required" value="{{old('mensaje')}}"></textarea>
                   <span class="error">
                        {{$errors->first('mensaje')}}
                     </span>
                </p>
                <p>
                    <input id="submit" class="button" type="submit" name="submit" value="Enviar">
                </p>
            </form>
            
            <!-- end contact form -->
            </section>
            <!-- end main -->
            
            <!-- begin sidebar -->
            <aside id="sidebar" class="one-fourth column-last">
                <div class="widget contact-info">
                    <h3>{{trans('contacto.Datos_contacto')}}</h3>
                    <br/>
                    <p class="address"><strong>{{trans('contacto.Direccion')}}:</strong> Av. Nuñez N° 705 Abancay-Apurímac</p>
                    <p class="phone"><strong>{{trans('contacto.Telefono')}}:</strong> (083) 321812</p>
                    <p class="email"><strong>{{trans('contacto.Correo')}}:</strong> <a href="mailto:info@finesse.com">info@finesse.com</a></p>
                    <p class="business-hours"><strong>{{trans('contacto.Horario')}}:</strong><br>
                    <br>
                    <br>
                  
                    </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.400045220848!2d-72.87870548561642!3d-13.63341239042405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d02dfecf2a9fb%3A0xbbbd466ce1e29b80!2sHOTEL+ABANCAY!5e0!3m2!1ses!2spe!4v1523234947544" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            
            </aside>
            <!-- end sidebar -->
            
            <!-- end main content -->
    @endsection