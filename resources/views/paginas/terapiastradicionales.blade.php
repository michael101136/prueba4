@extends('layoutFront')
@section('contenido')
    <!-- begin page header -->
    <header id="page-header">
            	<h1 id="page-title">{{trans('menu.Tipo_tradicional')}}</h1>	
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
                        <div class="panel-heading"><strong>{{trans('menu.Tipo_tradicional')}}</strong></div>
                        <div class="panel-body"><br/>
                        <div align="justify"><p>{{trans('contenido.Contenido_terapiatradicional')}}</p></div>
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
            
            <!-- begin related projects -->
            <section>
            	<h2>Related Projects</h2> 
                <!-- begin project carousel -->
                <ul class="project-carousel">
                    <li class="entry">
						<div class="entry-image">
							<a class="fancybox" rel="gallery-living-large-windows" href="images/entries/full-size/living-large-windows.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/living-large-windows-220x130.png" alt=""></a>
                            <a class="fancybox invisible" rel="gallery-living-large-windows" href="images/entries/full-size/living-brown.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/living-brown-220x130.png" alt=""></a>
                            <a class="fancybox invisible" rel="gallery-living-large-windows" href="images/entries/full-size/dining-and-living-cream.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-and-living-cream-220x130.png" alt=""></a>
						</div>
						<h4 class="entry-title"><a href="portfolio-item-image.html">Living with Large Windows</a></h4>
						<div class="entry-content">
							<p>Gallery project with lightbox.</p>
						</div>
					</li>
                    <li class="entry">
						<div class="entry-image">
							<a class="fancybox" href="images/entries/full-size/living-white.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/living-white-220x130.png" alt=""></a>
						</div>
						<h4 class="entry-title"><a href="portfolio-item-image.html">White Living Room</a></h4>
						<div class="entry-content">
							<p>Image project with lightbox.</p>
						</div>
					</li>
                    <li class="entry">
						<div class="entry-slider">
                        	<ul>
                                <li><a class="fancybox" rel="gallery-dining-white2" href="images/entries/full-size/dining-white2.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-white2-220x130.png" alt=""></a></li>
                                <li style="display: none;"><a class="fancybox" rel="gallery-dining-white2" href="images/entries/full-size/dining-brown.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-brown-220x130.png" alt=""></a></li>
                                <li style="display: none;"><a class="fancybox" rel="gallery-dining-white2" href="images/entries/full-size/dining-white.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-white-220x130.png" alt=""></a></li>
                            </ul>
						</div>
						<h4 class="entry-title"><a href="portfolio-item-slider.html">White Dining Room 2</a></h4>
						<div class="entry-content">
							<p>Gallery project with slider and lightbox.</p>
						</div>
					</li>
                    <li class="entry">
						<div class="entry-image">
							<a class="fancybox" rel="gallery-study" href="images/entries/full-size/study.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/study-220x130.png" alt=""></a>
                            <a class="fancybox invisible" rel="gallery-study" href="images/entries/full-size/dining-white2.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-white2-220x130.png" alt=""></a>
                            <a class="fancybox invisible" rel="gallery-study" href="images/entries/full-size/dining-brown.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-brown-220x130.png" alt=""></a>
						</div>
						<h4 class="entry-title"><a href="portfolio-item-image.html">Study</a></h4>
						<div class="entry-content">
							<p>Gallery project with lightbox.</p>
						</div>
					</li>
                    <li class="entry">
                    	<div class="entry-image">
							<a class="fancybox" href="images/entries/full-size/dining-white.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/dining-white-220x130.png" alt=""></a>
						</div>
						<h4 class="entry-title"><a href="portfolio-item-image.html">White Dining Room</a></h4>
						<div class="entry-content">
							<p>Image project with lightbox.</p>
						</div>
                    </li>
                    <li class="entry">
						<div class="entry-image">
							<a class="fancybox" href="images/entries/full-size/living-white.jpg" title="Project Title"><span class="overlay zoom"></span><img src="images/entries/220x130/living-white-220x130.png" alt=""></a>
						</div>
						<h4 class="entry-title"><a href="portfolio-item-image.html">White Living Room</a></h4>
						<div class="entry-content">
							<p>Image project with lightbox.</p>
						</div>
					</li>
            	</ul>
                <!-- end project carousel -->
            </section>
            <!-- end related projects -->  
           
               
@endsection