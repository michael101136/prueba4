@extends('layoutFront')
@section('contenido')

            <section id="slider-home">
                <div class="flex-container">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{URL::asset('images/slider/slides/living-white-940x350.png')}}" alt="White Living Room">
                                <div class="flex-caption">
                                    <h2>Responsive Layout</h2>
                                    <p>You can describe your slides using captions. This is an example of a caption with <a href="#">a link</a>.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{URL::asset('images/slider/slides/villa-940x350.png')}}" alt="Villa">
                                <div class="flex-caption">
                                    <h2>HTML5 &amp; CSS3 Code</h2>
                                    <p>You can describe your slides using captions. This is an example of a caption with <a href="#">a link</a>.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{URL::asset('images/slider/slides/building-940x350.png')}}" alt="Building">
                                <div class="flex-caption">
                                    <h2>Clean Design</h2>
                                    <p>You can describe your slides using captions. This is an example of a caption with <a href="#">a link</a>.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{URL::asset('images/slider/slides/living-brown-940x350.png')}}" alt="Brown Living Room">
                                <div class="flex-caption">
                                    <h2>Touch Enabled</h2>
                                    <p>You can describe your slides using captions. This is an example of a caption with <a href="#">a link</a>.</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{URL::asset('images/slider/slides/dining-brown-940x350.png')}}" alt="Brown Dining Room">
                                <div class="flex-caption">
                                    <h2>Easy to Customize</h2>
                                    <p>You can describe your slides using captions. This is an example of a caption with <a href="#">a link</a>.</p>
                                </div>
                            </li>
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

            <!-- begin newsletter -->
            <section class="one-half">
                <h2>Newsletter Subscription</h2>
                <div id="newsletter-wrap">
                    <p>Subscribe to our email newsletter for useful tips and valuable resources sent out every second Monday.</p>
                    <div class="notification-box notification-box-success" style="display: none;">
                        <p>You have successfully subscribed to our newsletter.</p>
                        <a href="#" class="notification-close notification-close-success">x</a>
                    </div>

                    <div class="notification-box notification-box-error" style="display: none;">
                        <p>Your email address couldn't be subscribed because a server error occurred. Please try again later.</p>
                        <a href="#" class="notification-close notification-close-error">x</a>
                    </div>
                    <form id="newsletter-form" class="content-form clearfix" action="#" method="post">
                        <input id="subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                        <input id="newsletter" type="email" name="newsletter" placeholder="Enter your email address here &hellip;" class="required">
                    </form>
                    <p class="tip"><span class="note">&#42;</span> Check your spam folder if the mail does not arrive.</p>
                </div>
            </section>
            <!-- end newsletter -->
            
            <!-- begin testimonials -->
            <section class="one-half column-last">
                <h2>Testimonials <span class="more">&ndash; <a href="testimonials.html">View All Testimonials &raquo;</a></span></h2> 
                
                <!-- begin testimonial carousel -->
                <ul class="testimonial-carousel">
                    <li>
                        <blockquote class="speech-bubble">
                            <div class="quote-content">
                                <p>Great theme! Very intuitive, clean code, very well-organized documentation &ndash; I would highly recommend getting this theme; it’s ideal for further customization!</p>
                                <span class="quote-arrow"></span>
                            </div>
                            <div class="quote-meta">Harry Jones, Web Designer<br>
                                <span class="grey-text">CreativeBrains</span>
                            </div>
                        </blockquote>
                    </li>
                    <li>
                        <blockquote class="speech-bubble">
                            <div class="quote-content">
                                <p>I would rate the template 5 out of 5 and here's why: it has a clean and straightforward look that will work for a variety of target audiences, which is important when you build for ROI.</p>
                                <span class="quote-arrow"></span>
                            </div>
                            <div class="quote-meta">Andrew Williams, Art Director<br>
                                <span class="grey-text">SmartBiz</span>
                            </div>
                        </blockquote>
                    </li>
                    <li>
                        <   blockquote class="speech-bubble">
                            <div class="quote-content">
                                <p>The template is really intuitive to customize and, the few instances where I needed help, you were right there to assist, in a timely manner, I might add. Well done, keep up the great work!</p>
                                <span class="quote-arrow"></span>
                            </div>
                            <div class="quote-meta">Larry Thompson, Web Developer<br>
                                <span class="grey-text">BitVenture</span>
                            </div>
                        </blockquote>
                    </li>
                </ul>
                <!-- end testimonial carousel -->
            </section>
            <!-- end testimonials -->
            
            <div class="clear"></div>
            
            <!-- begin clients -->
            <section>
                <h2>Our Clients</h2>
                <div class="client-wrap">
                    <ul class="clients clearfix">
                        <li><a href="#"><img src="{{URL::asset('images/client-logos/themeforest.png')}}" alt="ThemeForest" title="ThemeForest"></a></li>
                        <li><a href="#"><img src="{{URL::asset('images/client-logos/photodune.png')}}" alt="PhotoDune" title="PhotoDune"></a></li>
                        <li><a href="#"><img src="{{URL::asset('images/client-logos/audiojungle.png')}}" alt="AudioJungle" title="AudioJungle"></a></li>
                        <li><a href="#"><img src="{{URL::asset('images/client-logos/codecanyon.png')}}" alt="CodeCanyon" title="CodeCanyon"></a></li>
                        <li><a href="#"><img src="{{URL::asset('images/client-logos/graphicriver.png')}}" alt="GraphicRiver" title="GraphicRiver"></a></li>
                    </ul>
                </div>
            </section>

    @endsection
    