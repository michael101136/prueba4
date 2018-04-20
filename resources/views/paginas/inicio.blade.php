@extends('layoutFront')
@section('contenido')

            <section id="slider-home">
                <div class="flex-container">
                    <div class="flexslider" height="350px">
                        <ul class="slides">
                        @foreach($imagenes as $itemp)
                        <li>
                                <img src="{{URL::asset('/images/servicios/'.$itemp->imageurl)}}" alt="White Living Room">
                                <div class="flex-caption">
                                    <h2>{{$itemp->description}}</h2>
                                 
                                    <p>{{$itemp->description}}.</p>
                                </div>
                            </li>
                        @endforeach 
                           
                           
                        </ul>
                    </div>
                </div>
            </section>
            <!-- end slider -->
            
            <div class="space40"></div>
            
            <!-- begin services -->
            <section>
                <h2>Our Services <span class="more">&ndash; <a href="services.html">View All Services &raquo;</a></span></h2> 
                
                <!-- begin iconbox carousel -->
                <ul class="iconbox-carousel">
                    <li>
                        <div class="iconbox computer">
                            <h4><a href="services.html#responsive-layouts"><span class="iconbox-icon"></span>Responsive Layouts</a></h4>
                            <p>Layouts that scale gracefully across varying screen sizes.</p> 
                        </div>
                    </li>
                    <li>
                        <div class="iconbox mouse">
                            <h4><a href="services.html#html5-css3-code"><span class="iconbox-icon"></span>HTML5 &amp; CSS3 Code</a></h4>
                            <p>Standards-compliant and cross-browser HTML/CSS code.</p>   
                        </div>
                    </li>
                    <li>
                        <div class="iconbox applications">
                            <h4><a href="services.html#clean-design"><span class="iconbox-icon"></span>Clean Design</a></h4>
                            <p>Professional, clutter-free and aesthetically simple design.</p>   
                        </div>
                    </li>
                    <li>
                        <div class="iconbox cog">
                            <h4><a href="services.html#cms-driven-websites"><span class="iconbox-icon"></span>CMS-Driven Websites</a></h4>
                            <p>CMS-driven websites that you can easily customize.</p>  
                        </div>
                    </li>
                    <li>
                        <div class="iconbox globe">
                            <h4><a href="services.html#search-engine-optimization"><span class="iconbox-icon"></span>Search Engine Optimization</a></h4>
                            <p>Get the maximum exposure from search engines.</p>  
                        </div>
                    </li>
                    <li>
                        <div class="iconbox write">
                            <h4><a href="services.html#copywriting"><span class="iconbox-icon"></span>Copywriting</a></h4>
                            <p>Creative and engaging words that provoke action.</p> 
                        </div>
                    </li>
                    <li>
                        <div class="iconbox address-book">
                            <h4><a href="services.html#customer-support"><span class="iconbox-icon"></span>Customer Support</a></h4>
                            <p>Professional customer service that exceeds expectations.</p>   
                        </div>
                    </li>
                    <li>
                        <div class="iconbox chemical">
                            <h4><a href="services.html#it-solutions"><span class="iconbox-icon"></span>IT Solutions</a></h4>
                            <p>Connecting technology to your business needs.</p>
                        </div>
                    </li>
                </ul>
                <!-- end iconbox carousel -->
            </section>
            <!-- end services -->

            <!-- begin selected projects -->
            <section>
                <h2>Selected Projects <span class="more">&ndash; <a href="portfolio.html">View All Projects &raquo;</a></span></h2>

                <!-- begin project carousel -->
                <ul class="project-carousel">
                @foreach($imagenesfooter as $itemp)
                    <li class="entry">
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
                <!-- end project carousel -->
            </section>
            <!-- end selected projects -->

            

           
            <div class="clear"></div>
    @endsection
    