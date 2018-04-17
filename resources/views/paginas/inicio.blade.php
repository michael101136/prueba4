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
                    <li class="entry">
                        <div class="entry-image">
                            <a class="fancybox" href="{{URL::asset('images/entries/full-size/dining-white.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-white-220x130.png')}}" alt=""></a>
                        </div>
                        <h4 class="entry-title"><a href="portfolio-item-image.html">White Dining Room</a></h4>
                        <div class="entry-content">
                            <p>Image project with lightbox.</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="entry-image">
                            <a class="fancybox" rel="gallery-living-large-windows" href="{{URL::asset('images/entries/full-size/living-large-windows.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/living-large-windows-220x130.png')}}" alt=""></a>
                            <a class="fancybox invisible" rel="gallery-living-large-windows" href="{{URL::asset('images/entries/full-size/living-brown.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/living-brown-220x130.png')}}" alt=""></a>
                            <a class="fancybox invisible" rel="gallery-living-large-windows" href="{{URL::asset('images/entries/full-size/dining-and-living-cream.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-and-living-cream-220x130.png')}}" alt=""></a>
                        </div>
                        <h4 class="entry-title"><a href="portfolio-item-image.html">Living with Large Windows</a></h4>
                        <div class="entry-content">
                            <p>Gallery project with lightbox.</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="entry-slider">
                            <ul>
                                <li><a class="fancybox" rel="gallery-living-brown" href="{{URL::asset('images/entries/full-size/living-brown.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/living-brown-220x130.png')}}" alt=""></a></li>
                                <li style="display: none;"><a class="fancybox" rel="gallery-living-brown" href="{{URL::asset('images/entries/full-size/dining-and-living-cream.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-and-living-cream-220x130.png')}}" alt=""></a></li>
                                <li style="display: none;"><a class="fancybox" rel="gallery-living-brown" href="{{URL::asset('images/entries/full-size/living-white.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/living-white-220x130.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <h4 class="entry-title"><a href="portfolio-item-slider.html">Brown Living Room</a></h4>
                        <div class="entry-content">
                            <p>Gallery project with slider and lightbox.</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="entry-video">
                            <video width="220" height="130" style="width: 100%; height: 100%;" poster="images/entries/220x130/dining-and-living-cream-220x130.png" controls preload="none">
                                <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                                <source type="video/mp4" src="media/echo-hereweare.mp4" />
                                <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->
                                <source type="video/webm" src="media/echo-hereweare.webm" />
                                <!-- Ogg/Vorbis for older Firefox and Opera versions -->
                                <source type="video/ogg" src="media/echo-hereweare.ogv" />
                                <!-- Optional: Add subtitles for each language -->
                                <track kind="subtitles" src="media/mediaelement.srt" srclang="en" />
                                <!-- Optional: Add chapters -->
                                <track kind="chapters" src="#" srclang="en" />
                                <!-- Flash fallback for non-HTML5 browsers without JavaScript -->
                                <object type="application/x-shockwave-flash" data="js/flashmediaelement.swf">
                                    <param name="movie" value="js/flashmediaelement.swf" />
                                    <param name="flashvars" value="controls=true&file=media/echo-hereweare.mp4" />
                                    <!-- Image as a last resort -->
                                    <img src="{{URL::asset('images/entries/220x130/dining-and-living-cream-220x130.png')}}" title="No video playback capabilities" alt="" />
                                </object>
                            </video>
                        </div>
                        <h4 class="entry-title"><a href="portfolio-item-self-hosted-video.html">Self-Hosted Video Project</a></h4>
                        <div class="entry-content">
                            <p>Self-hosted video project.</p>
                        </div>
                    </li>
                    <!-- begin row 2 -->
                    <li class="entry">
                        <div class="entry-image">
                            <a class="fancybox" href="{{URL::asset('images/entries/full-size/living-white.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/living-white-220x130.png')}}" alt=""></a>
                        </div>
                        <h4 class="entry-title"><a href="portfolio-item-image.html">White Living Room</a></h4>
                        <div class="entry-content">
                            <p>Image project with lightbox.</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="entry-image">
                            <a class="fancybox" rel="gallery-study" href="{{URL::asset('images/entries/full-size/study.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/study-220x130.png')}}" alt=""></a>
                            <a class="fancybox invisible" rel="gallery-study" href="{{URL::asset('images/entries/full-size/dining-white2.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-white2-220x130.png')}}" alt=""></a>
                            <a class="fancybox invisible" rel="gallery-study" href="{{URL::asset('images/entries/full-size/dining-brown.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-brown-220x130.png')}}" alt=""></a>
                        </div>
                        <h4 class="entry-title"><a href="portfolio-item-image.html">Study</a></h4>
                        <div class="entry-content">
                            <p>Gallery project with lightbox.</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="entry-slider">
                            <ul>
                                <li><a class="fancybox" rel="gallery-dining-white2" href="{{URL::asset('images/entries/full-size/dining-white2.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-white2-220x130.png')}}" alt=""></a></li>
                                <li style="display: none;"><a class="fancybox" rel="gallery-dining-white2" href="{{URL::asset('images/entries/full-size/dining-brown.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-brown-220x130.png')}}" alt=""></a></li>
                                <li style="display: none;"><a class="fancybox" rel="gallery-dining-white2" href="{{URL::asset('images/entries/full-size/dining-white.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-white-220x130.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <h4 class="entry-title"><a href="portfolio-item-slider.html">White Dining Room 2</a></h4>
                        <div class="entry-content">
                            <p>Gallery project with slider and lightbox.</p>
                        </div>
                    </li>
                    <li class="entry">
                        <div class="entry-video">
                            <iframe src="http://player.vimeo.com/video/11624173?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="220" height="110" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        </div>
                        <h4 class="entry-title"><a href="portfolio-item-embedded-video.html">Arhitectural Film &ndash; Interior</a></h4>
                        <div class="entry-content">
                            <p>Embedded video project.</p>
                        </div>
                    </li>
                </ul>
                <!-- end project carousel -->
            </section>
            <!-- end selected projects -->

            

           
            <div class="clear"></div>
    @endsection
    