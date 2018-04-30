@extends('layoutFront')
@section('contenido')
            <header id="page-header">
            	<h1 id="page-title">Portafolio</h1>	
            </header>
            <section id="content" class="container clearfix">
        
            <!-- end page header -->
            
            <!-- begin main content -->
           
                
          
            <section id="main" class="blog-entry-list three-fourths">
                 @foreach ($video as $value)
                <article class="entry clearfix">
                    <div class="entry-image">
                        <!-- begin gallery -->
                        {!! $value->name !!}
                    </div>
                    <div class="entry-meta">
                        <span><span class="title">Turismo de Salud </span>
                    </div>
                    <div class="entry-body">
                        <h2 class="entry-title"><a>Video {!! $value->id !!} </a></h2>
                        <div class="entry-content">
                            <p></p>
                        </div>
                    </div>
                </article>
              @endforeach 
     
            </section>
            <!-- end main content -->
            
            <!-- begin sidebar -->
            <aside id="sidebar" class="one-fourth column-last">
                <div class="widget">
                    <img style="height: 290px;" src="{{URL::asset('/images/servicios/22.jpg')}}"></br>
                   <center> <strong>INOCENCIA SANA</strong></center>
                </div> 
            </aside>
            <!-- end sidebar -->
        </section>
            <!-- end page header -->
        	
            <!-- begin main content -->
            
     
				
			
    @endsection