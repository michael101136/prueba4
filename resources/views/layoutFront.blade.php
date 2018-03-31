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

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css">

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

    <!-- end JS -->
    
    <title>HOTEL ABANCAY</title>
</head>

<body>
<!-- begin container -->
<?php function activeMenu($url)
    {
        return request()->is($url) ? 'current' : '';
    } ?>
<div id="wrap">
    <!-- begin header -->
        <header id="header" class="container">
            <!-- begin header top -->
            <section id="header-top" class="clearfix">
                <!-- begin header left -->
                <div class="one-half">
                    <h1 id="logo"><a href="#"><img src="{{URL::asset('images/logo.png')}}" alt="Finesse"></a></h1>
                    <p id="tagline">HOTEL ABANCAY - TURISMO DE SALUD</p>

                </div>
                <!-- end header left -->
                
                <!-- begin header right -->
                <div class="one-half column-last">
                    <!-- begin language switcher -->
                    
                    <!-- end language switcher -->
                    
                    <!-- begin contact info -->
                    <div class="contact-info" style="margin-top: -25px;">
                        

                        {!! Form::open( ['route' => ['lenguaje'] , 'method' => 'POST' ]) !!}
                        {!! Form::select('type', ['es' => 'Español', 'en' => 'Ingles'], null, 
                            ['class' => 'form-control chosen-type', 'id' =>'idiomaMultiple', 'name' =>'idiomaMultiple','placeholder' => 'Seleccione Idioma']) !!}
                            {!! Form::submit('Cambiar Idioma!')!!}
                        {!! Form::close() !!}
                        
                    </div>
                    <div class="contact-info">
                        <p class="phone">(123) 456-7890
                        <a href="mailto:info@finesse.com">info@finesse.com</a></p>
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
                       
                        <li class="{{ activeMenu('nosotros') }}"><a href="#" rel="submenu4">Quienes somos</a>
                            <ul id="submenu4" class="ddsubmenustyle">
                                <li><a href="{{route('nosotros')}}">Nosotros</a></li>
                            </ul>
                        </li>

                        <li class="{{ activeMenu('habitaciones-simples') }}"><a href="#" rel="submenu4">Servicios Hotel</a>
                            <ul id="submenu4" class="ddsubmenustyle">

                                <li><a href="{{route('habitaciones-simples')}}">Habitaciones simples</a></li>
                                <li><a href="{{route('habitaciones-dobles')}}">Habitaciones dobles</a></li>
                                <li><a href="{{route('habitacionesmatrimoniales')}}">Habitaciones matrimoniales</a></li>

                            </ul>
                        </li>
                        <li class="{{ activeMenu('terapiasalternativas') }}"><a href="#" rel="submenu2">Turismo de salud</a>
                            <ul id="submenu2" class="ddsubmenustyle">
                                <li><a href="#">En qué consiste</a></li>
                                <li><a href="#">Tipos de terapias</a>
                                    <ul>
                                        <li><a href="{{route('terapiasalternativas')}}">Alternativas</a></li>
                                        <li><a href="{{route('terapiascomplementarias')}}">Complementarias</a></li>
                                        <li><a href="{{route('terapiastradicionales')}}">Tradicionales</a></li>
                                        <li><a href="{{route('terapias-energeticas')}}">Energéticas</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Testimonios</a></li>
                            </ul>
                        </li>
                        <li class="{{ activeMenu('tarifas-paquetes') }}"><a href="#" rel="submenu4">Paquetes</a>
                            <ul id="submenu4" class="ddsubmenustyle">
                                <li><a href="{{route('tarifas-paquetes')}}">Tarifas</a></li>
                            </ul>
                        </li>
                        <li class="{{ activeMenu('portafolio') }}"><a href="" rel="submenu4">Portafolio</a>
                            <ul id="submenu4" class="ddsubmenustyle">
                                <li><a href="{{route('portafolio')}}">Portafolio del hotel</a></li>
                                <li><a href="{{route('portafolio')}}">Portafolio del turismo salud</a></li>
                                
                            </ul>
                        </li>
                         
                        <li class="{{ activeMenu('contacto')  }}"><a href="{{ route('contacto')}}">{{ trans('menu.Contacto')}}</a></li>
                    </ul>
                </nav>
                <!-- end navigation -->
                
                <!-- begin search form -->
                <form id="search-form" action="search.php" method="get">
                    <input id="s" type="text" name="s" placeholder="Search &hellip;" style="display: none;">
                    <input id="search-submit" type="submit" name="search-submit" value="Search">
                </form>
                <!-- end search form -->
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
                        <h3>About Us</h3>
                        <p>Finesse is a responsive business and portfolio theme carefully handcrafted using the latest technologies.</p>
                        <p>It features a clean design, as well as extended functionality that will come in very handy.</p>
                    </div>
                </div>
                <div class="one-fourth">
                    <div class="widget latest-posts">
                        <h3>Latest Posts</h3>
                        <ul>
                            <li>
                                <a href="blog-post.html">How to Make Innovative Ideas Happen</a>
                                <span>March 10, 2012</span>
                            </li>
                            <li> 
                                <a href="blog-post.html">Web Development for the iPhone and iPad</a>
                                <span>March 10, 2012</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="one-fourth">
                    <div class="widget twitter-widget">
                        <h3>Latest Tweets</h3>
                        <div class="tweet"></div>
                    </div>
                </div>
                <div class="one-fourth column-last">
                    <div class="widget contact-info">
                        <h3>Contact Info</h3>
                        <p class="address"><strong>Address:</strong> 123 Street, City, Country</p>
                        <p class="phone"><strong>Phone:</strong> (123) 456-7890</p>
                        <p class="email"><strong>Email:</strong> <a href="mailto:info@finesse.com">info@finesse.com</a></p>
                        <div class="social-links">
                            <h4>Follow Us</h4>
                            <ul>
                                <li class="twitter"><a href="#" title="Twitter" target="_blank">Twitter</a></li>
                                <li class="facebook"><a href="#" title="Facebook" target="_blank">Facebook</a></li>
                                <li class="google"><a href="#" title="Google+" target="_blank">Google+</a></li>
                                <li class="youtube"><a href="#" title="YouTube" target="_blank">YouTube</a></li>
                                <li class="skype"><a href="#" title="Skype" target="_blank">Skype</a></li>
                                <li class="rss"><a href="#" title="RSS" target="_blank">RSS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end footer top -->

            <!-- begin footer bottom -->
            <div id="footer-bottom">
                <div class="one-half">
                    <p>Copyright &copy; 2012 Finesse. Created by <a href="http://themeforest.net/user/ixtendo">Ixtendo</a>.</p>
                </div>

                <div class="one-half column-last">
                    <nav id="footer-nav">
                        <ul>
                            <li><a href="index.html">Home</a> &middot;</li>
                            <li><a href="about-us.html">Templates</a> &middot;</li>
                            <li><a href="elements.html">Features</a> &middot;</li>
                            <li><a href="portfolio.html">Portfolio</a> &middot;</li>
                            <li><a href="blog.html">Blog</a> &middot;</li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
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