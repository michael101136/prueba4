@extends('layoutFront')
@section('contenido')
            <!-- begin page header -->
            <header id="page-header">
                <h1 id="page-title">{{trans('contacto.Contacto')}}</h1>    
            </header>
            <!-- end page header -->
            
            <!-- begin main content -->
            
            <!-- begin google map --> 
            <section>
                
            </section>
            <!-- end google map -->
            
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
            
            <div class="notification-box notification-box-error " style="display: none;">
                <p>Your message couldn't be sent because a server error occurred. Please try again.</p>
                <a href="#" class="notification-close notification-close-error">x</a>
            </div>
            <form id="contact-form" class="content-form" method="post" action="#">
                <p>
                    <label for="name">{{trans('contacto.Nombre')}}<span class="note">*</span></label>
                    <input id="name" type="text" name="name" class="required">
                </p>
                <p>
                    <label for="email">{{trans('contacto.Correo')}}<span class="note">*</span></label>
                    <input id="email" type="email" name="email" class="required">
                </p>
                <p>
                    <label for="url">{{trans('contacto.DNI')}}</label>
                    <input id="url" type="url" name="url">
                </p>
                <p>
                    <label for="subject">{{trans('contacto.Asunto')}}<span class="note">*</span></label>
                    <input id="subject" type="text" name="subject" class="required">
                </p>
                <p>
                    <label for="message">{{trans('contacto.Mensaje')}}:<span class="note">*</span></label>
                    <textarea id="message" cols="68" rows="8" name="message" class="required"></textarea>
                </p>
                <p>
                    <input id="submit" class="button" type="submit" name="submit" value="Send Message">
                </p>
            </form>
            <p><span class="note">*</span> Required fields</p>
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
                </div>
            </aside>
            <!-- end sidebar -->
            
            <!-- end main content -->
    @endsection