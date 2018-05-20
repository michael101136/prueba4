@extends('layoutFront')
@section('contenido')
	<!-- begin page header -->
    <header id="page-header">
            	<h1 id="page-title">{{trans('menu.Turismo_salud')}}</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            	
			<!-- begin types of images -->
                
              <!-- begin aligned images -->
            <section>
            	<h2></h2>
                <!-- begin left-aligned image -->
                <div class="entry-image float-left">
                <a class="fancybox" rel="gallery-study" href="images/servicios/turismozoom.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/servicios/turismo.jpg" alt=""></a>
   
                </div>
                <CENTER><strong><font  SIZE=4 >TURISMO DE SALUD</font></strong></CENTER>
                <BR/>
                <p align="justify">{{trans('contenido.Contenido_turismo_salud')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_salud1')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_salud2')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_salud3')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_abancay')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_abancay1')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_abancay2')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_abancay3')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_abancay4')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_Fines1')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_Fines2')}}</p>
                <p align="justify">{{trans('contenido.Contenido_turismo_Fines3')}}</p>

                <!-- end left-aligned image -->
                
                
            </section>
            <!-- end aligned images -->
@endsection