<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8 no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <!-- begin meta -->
    <meta charset="utf-8">
    <meta name="description" content="Finesse is a responsive business and portfolio theme carefully handcrafted using the latest technologies. It features a clean design, as well as extended functionality that will come in very handy.">
    <meta name="keywords" content="Finesse, responsive business portfolio theme, HTML5, CSS3, clean design">
    <meta name="author" content="Ixtendo">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- end meta -->
    
    <!-- begin CSS -->

    <link href="http://fonts.googleapis.com/css?family=Metrophobic" type="text/css" rel="stylesheet" id="main-style">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300italic,400italic,600italic,700italic,300,600,800,800italic" type="text/css" rel="stylesheet" id="main-style">
    <link href="http://fonts.googleapis.com/css?family=Tinos:400,700,400italic,700italic" type="text/css" rel="stylesheet" id="main-style">


    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">

    <link href="{{ asset('/css/style.css')}}" type="text/css" rel="stylesheet" id="main-style">
    <link href="{{ asset('/css/html5-reset.css')}}" type="text/css" rel="stylesheet" id="main-style">
    <link href="{{ asset('/css/polyglot-language-switcher.css')}}" type="text/css" rel="stylesheet" id="main-style">
    <link href="{{ asset('/css/flexslider.css')}}" type="text/css" rel="stylesheet" id="main-style">
    <link href="{{ asset('/css/jquery.fancybox.css')}}" type="text/css" rel="stylesheet" id="main-style">
    <link href="{{ asset('/css/mediaelementplayer.css')}}" type="text/css" rel="stylesheet" id="main-style">
     <link href="{{ asset('/css/shortcodes.css')}}" type="text/css" rel="stylesheet" id="main-style">

    <!--[if IE]> <link href="css/ie.css" type="text/css" rel="stylesheet"> <![endif]-->
    <link href="{{ asset('/css/colors/orange.css')}}" type="text/css" rel="stylesheet" id="color-style">
    <!-- end CSS -->
    
    <link href="images/favicon.ico" type="image/x-icon" rel="shortcut icon">
    
    <!-- begin JS -->
    <script src="{{ asset('/js/jquery-1.7.2.min.js')}}" type="text/javascript"></script> <!-- jQuery -->
    <script src="{{ asset('/js/ie.js')}}" type="text/javascript"></script> <!-- IE detection -->
    <script src="{{ asset('/js/jquery.easing.1.3.js')}}" type="text/javascript"></script> <!-- jQuery easing -->
    <script src="{{ asset('/js/modernizr.custom.js')}}" type="text/javascript"></script> <!-- Modernizr -->
    <!--[if IE 8]><script src="js/respond.min.js" type="text/javascript"></script><![endif]--> <!-- Respond -->
    <script src="{{ asset('/js/jquery.polyglot.language.switcher.js')}}" type="text/javascript"></script> <!-- language switcher -->
    <script src="{{ asset('/js/ddlevelsmenu.js')}}" type="text/javascript"></script> <!-- drop-down menu -->
    <script type="text/javascript"> 
        ddlevelsmenu.setup("nav", "topbar");
    </script>
    <script src="{{ asset('/js/tinynav.min.js')}}" type="text/javascript"></script> <!-- tiny nav -->
    <script src="{{ asset('/js/jquery.validate.min.js')}}" type="text/javascript"></script> <!-- form validation -->
    <script src="{{ asset('/js/jquery.flexslider-min.js')}}" type="text/javascript"></script> <!-- slider -->
    <script src="{{ asset('/js/jquery.jcarousel.min.js')}}" type="text/javascript"></script> <!-- carousel -->
    <script src="{{ asset('/js/jquery.ui.totop.min.js')}}" type="text/javascript"></script> <!-- scroll to top -->
    <script src="{{ asset('/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script> <!-- lightbox -->
    <script src="{{ asset('/js/jquery.cycle.all.js')}}" type="text/javascript"></script> <!-- entry slider -->
    <script src="{{ asset('/js/mediaelement-and-player.min.js')}}" type="text/javascript"></script> <!-- video and audio players -->
    <script src="{{ asset('/js/jquery.fitvids.js')}}" type="text/javascript"></script> <!-- responsive video embeds -->
    <script src="{{ asset('/js/jquery.touchSwipe.min.js')}}" type="text/javascript"></script> <!-- touchSwipe -->
    <script src="{{ asset('/js/custom.js')}}" type="text/javascript"></script> <!-- jQuery initialization -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
 
    <script src="{{ asset('/js/jssor.slider-27.1.0.min.js')}}" type="text/javascript"></script>
 
    <!-- end JS -->
    
    <title>HOTEL ABANCAY</title>
</head>

<body>
<!-- begin container -->
<?php function activeMenu($url)
    {
        return request()->is($url.'*') ? 'current' : '';
    } ?>
<div id="wrap">
    <!-- begin header -->
        <header id="header" class="container">
            <!-- begin header top -->
            <section id="header-top" class="clearfix">
                <!-- begin header left -->
                <div class="one-half" style="margin-top: -20px;">
                    <h1 id="logo"><a href="#"><img src="{{URL::asset('images/logo.png')}}" alt="Finesse"></a></h1>
                    <p id="tagline" style="margin-top: 30px;"><strong>HOTEL ABANCAY - TURISMO DE SALUD</strong></p><br/>

                </div>
                <!-- end header left -->
                
                <!-- begin header right -->
                <div class="one-half column-last">
                    <!-- begin language switcher -->
                    
                    <!-- end language switcher -->
                    
                    <!-- begin contact info -->
                    <div class="contact-info" style="margin-top: 2px;padding: 2px;">
                        
                        {!! Form::open( ['route' => ['lenguaje'] , 'method' => 'POST','class' => 'form-inline' ]) !!}
                         <div class="form-group">
                         {!! Form::select('type', ['es' => 'Español', 'en' => 'Ingles'], session('lang'), 
                            ['class' => 'form-control chosen-type', 'id' =>'idiomaMultiple', 'name' =>'idiomaMultiple']) !!}
                        </div>
                        <div class="form-group">
                           {!! Form::submit('Cambiar Idioma', array('class' => 'btn'))!!}
                        </div>
                        {!! Form::close() !!}
                        
                    </div>
                    <div class="contact-info">
                        <p class="phone">(123) 456-7890
                        <a href="mailto:info@finesse.com">Inocencia@gmail.com</a></p>
                    </div>
                    <!-- end contact info -->
                </div>
                <!-- end header right -->
            </section>
            <!-- end header top -->
            
            <!-- begin navigation bar -->
            <section id="navbar" class="clearfix">
                <!-- begin navigation -->
                <nav id="nav">
                    <ul id="navlist" class="clearfix">
                        <li class="{{ activeMenu('inicio') }}"><a href="{{route('inicio')}}"  rel="submenu1">{{trans('menu.Inicio')}}</a>
                            <ul id="submenu1" class="ddsubmenustyle">
                                <li class="{{ activeMenu('inicio') }}"></li>
                                <li></li>
                            </ul>
                        </li>
                       
                        <li class="{{ activeMenu('nosotros') }}"><a href="#" rel="submenu4">{{trans('menu.Empresa')}}</a>
                            <ul id="submenu4" class="ddsubmenustyle">
                                <li><a href="{{route('nosotros')}}">{{trans('menu.Nosotros')}}</a></li>
                                <li><a href="{{route('nosotros-biografia')}}">{{trans('menu.Biografia')}}</a></li>
                            </ul>
                        </li>

                        <li class="{{ activeMenu('habitaciones') }}"><a href="#" rel="submenu4">{{trans('menu.Hotel')}}</a>
                            <ul id="submenu4" class="ddsubmenustyle">

                                <li><a  href="{{route('habitaciones-simples')}}">{{trans('menu.Habitacion_simple')}}</a></li>
                                <li><a  href="{{route('habitaciones-dobles')}}">{{trans('menu.Habitacion_doble')}}</a></li>
                                <li><a  href="{{route('habitacionesmatrimoniales')}}">{{trans('menu.Habitacion_matrimonial')}}</a></li>

                            </ul>
                        </li>
                        <li class="{{ activeMenu('terapias') }}"><a href="#" rel="submenu2">{{trans('menu.Turismo_salud')}}</a>
                            <ul id="submenu2" class="ddsubmenustyle">
                                <li><a href="{{route('terapias-turismosalud')}}">{{trans('menu.Acerca_de')}}</a></li>
                                <li><a href="#">{{trans('menu.Tipo_terapia')}}</a>
                                    <ul>
                                        <li><a href="{{route('terapias-alternativas')}}">{{trans('menu.Tipo_alternativa')}}</a></li>
                                        <li><a href="{{route('terapias-complementarias')}}">{{trans('menu.Tipo_complementaria')}}</a></li>
                                        <li><a href="{{route('terapias-tradicionales')}}">{{trans('menu.Tipo_tradicional')}}</a></li>
                                        <li><a href="{{route('terapias-energeticas')}}">{{trans('menu.Tipo_energetica')}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">{{trans('menu.Testimonio')}}</a></li>
                            </ul>
                        </li>
                        <li class="{{ activeMenu('tarifas-paquetes') }}"><a href="#" rel="submenu4">{{trans('menu.Paquete')}}</a>
                            <ul id="submenu4" class="ddsubmenustyle">
                                <li><a href="{{route('tarifas-paquetes')}}">{{trans('menu.Tarifa')}}</a></li>
                            </ul>
                        </li>
                        <li class="{{ activeMenu('portafolio') }}"><a href="" rel="submenu4">{{trans('menu.Portafolio')}}</a>
                            <ul id="submenu4" class="ddsubmenustyle">
                                <li><a href="{{route('portafolio')}}">{{trans('menu.Portafolio_hotel')}}</a></li>
                                <li><a href="{{route('portafolio')}}">{{trans('menu.Portafolio_turismo')}}</a></li>
                                
                            </ul>
                        </li>
                         
                        <li class="{{ activeMenu('contacto')  }}"><a href="{{ route('contacto')}}">{{ trans('menu.Contacto')}}</a></li>
                    </ul>
                </nav>
                <!-- end navigation -->
                
             
            </section>
            <!-- end navigation bar -->
            
        </header>
        <!-- end header -->
        
        <!-- begin content -->
        <section id="content" class="container clearfix">
                @yield('contenido')
        </section>
        <!-- end content -->      
    
    <!-- begin footer -->
    <footer id="footer">
        <div class="container">
            <!-- begin footer top -->
            <div id="footer-top">
                <div class="one-fourth">
                    <div class="widget">
                        <h3>{{trans('footer.Nosotros')}}</h3>
                        <p align="justify">{{trans('footer.Pie_nosotros')}}</p>
                      
                    </div>
                </div>
                <div class="one-fourth">
                    <div class="widget contact-info">
                        <h3>{{trans('footer.Contacto')}}</h3>
                        <p class="address"><strong>{{trans('footer.Direccion')}}:</strong> Av. Nuñez N° 705 Abancay-Apurímac</p>
                        <p class="phone"><strong>{{trans('footer.Telefono')}}:</strong> (083) 321812</p>
                        <p class="email"><strong>{{trans('footer.Correo')}}:</strong> <a href="mailto:info@finesse.com">info@finesse.com</a></p>
                    </div>
                </div>
 
                <div class="one-fourth column-last">
                    <div class="widget contact-info">
                        <h3>{{trans('footer.Redes_sociales')}}</h3>
                        <p class="address">{{trans('footer.Redes_concepto')}}</p>

                        <div class="social-links">
                            <ul>
                                <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                                <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end footer top -->

            <!-- begin footer bottom -->
            <div id="footer-bottom">
                <div class="one-half">
                    <p>Copyright &copy; 2018. Elaborado por <a href="http://www.spaziour.com/">Spaziour</a>.</p>
                </div>
            </div>
            <!-- end footer bottom -->
        </div>
    </footer>
    <!-- end footer -->
</div>
<!-- end container -->

</body>
</html>