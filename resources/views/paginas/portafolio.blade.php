@extends('layoutFront')
@section('contenido')
            <header id="page-header">
            	<h1 id="page-title">Portfolio</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            
     
				
			<!-- begin gallery -->
			<ul id="gallery" class="portfolio-grid clearfix">
            @foreach($imagenesfooter as $itemp)
                <li data-id="id-1" data-type="photography" class="entry one-fourth">
					<div class="entry-image">
                        <a class="fancybox" href="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.html">{{$itemp->name_servicio}}</a></h4>
                    <div class="entry-content">
                        <p>{{$itemp->name_servicio}}</p>
                    </div>
				</li>
            @endforeach   
			</ul>
    @endsection