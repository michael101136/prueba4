@extends('layoutFront')
@section('contenido')
	<!-- begin page header -->
    <header id="page-header">
            	<h1 id="page-title">{{trans('menu.Biografia')}}</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            	
			<!-- begin types of images -->
                
              <!-- begin aligned images -->
            <section>
            	<h2></h2>
                <!-- begin left-aligned image -->
                <div class="entry-image float-left">
                @foreach($imagenes as $itemp)
                <a class="fancybox" rel="gallery-study" href="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" alt=""></a>

       @endforeach   
               
   
                </div>
              
                
             
            </section>
            <CENTER><strong><font  SIZE=4 >INOCENCIA SANA</font></strong></CENTER>
            <BR/>
            <p align="justify">{{trans('contenido.Contenido_biografia')}}</p>
            <!-- end aligned images -->
@endsection