@extends('layoutFront')
@section('contenido')
    <!-- begin page header -->
    <header id="page-header">
            	<h1 id="page-title">{{trans('menu.Tipo_energetica')}}</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            
            <!-- begin project -->
            <section>
            	<!-- begin project media -->
                <div class="three-fourths">
                	<div class="entry-slider">
                        <ul>
                        @foreach($imagenes as $itemp)
                            <li><a class="fancybox" rel="gallery-living-brown" href="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" title="Image Title"><span class="overlay zoom"></span><img src="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" width="700px" height="500px" alt="Klorofil Logo" class="img-responsive logo"  alt=""></a></li>
                        @endforeach 
                        </ul>
                    </div>
                </div>
                <!-- end project media -->
                
                <!-- begin project description -->
                <div class="one-fourth column-last">
                    <h3></h3>
                    <div class="panel panel-info class">
                        <div class="panel-heading"><strong>{{trans('menu.Tipo_energetica')}}</strong></div>
                        <div class="panel-body"><br/>
                        <div align="justify"><p>{{trans('contenido.Contenido_terapiaenergetica')}}</p></div>
                        <br>
                        <h3></h3><br>
                        <ul class="check">
                  
                            <li></li>
                       
                        </ul>        
                        </div>
                        
                    </div>
                   
                </div>
                <!-- end project description -->
                <div class="clear"></div>
            </section>
            <!-- end project -->
            <section>
            	<h2>{{trans('menu.Terapias')}}</h2> 
                <!-- begin project carousel -->
                <ul class="project-carousel">
                @foreach($imagenesfooter as $itemp)
                <li class="entry">
						<div class="entry-image">
							<a class="fancybox" rel="gallery-living-large-windows" href="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" alt=""></a>
						</div>
						<div class="entry-content">
							<p>{{$itemp->name_servicio}}.</p>
						</div>
					</li>
                @endforeach               
            	</ul>
                <!-- end project carousel -->
            </section> 
            <!-- begin related projects -->
            <!-- end related projects -->  
           
               
@endsection