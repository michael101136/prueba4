@extends('layoutFront')
@section('contenido')
	<!-- begin page header -->
    <header id="page-header">
            	<h1 id="page-title">{{trans('menu.Nosotros')}}</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            	
			<!-- begin types of images -->
                
              <!-- begin aligned images -->
            <section>
            	<h2></h2>
                <!-- begin left-aligned image -->
                <div class="entry-image float-left">
                <a class="fancybox" rel="gallery-study" href="images/servicios/nosotroszoom.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/servicios/nosotros.jpg" alt=""></a>
   
                </div>
                <CENTER><strong><font  SIZE=4 >HOTEL ABANCAY</font></strong></CENTER>
            <BR/>
                <p align="justify">{{trans('contenido.Contenido_nosotros')}}</p>
                
                
                <!-- end left-aligned image -->
                
                
            </section>
            <!-- end aligned images -->
@endsection