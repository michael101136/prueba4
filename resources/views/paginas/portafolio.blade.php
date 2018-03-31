@extends('layoutFront')
@section('contenido')
            <header id="page-header">
            	<h1 id="page-title">Portfolio</h1>	
            </header>
            <!-- end page header -->
        	
            <!-- begin main content -->
            
            <!-- begin filter -->
			<div id="filter">
				<span>Filter:</span>
				<ul>
					<li class="active"><a href="#" class="all">All</a></li>
					<li><a href="#" class="web-design">Web Design</a></li>
					<li><a href="#" class="print-design">Print Design</a></li>
					<li><a href="#" class="photography">Photography</a></li>
					<li><a href="#" class="animation">Animation</a></li>
				</ul>
			</div>
			<!-- end filter -->
				
			<!-- begin gallery -->
			<ul id="gallery" class="portfolio-grid clearfix">
				<li data-id="id-1" data-type="photography" class="entry one-fourth">
					<div class="entry-image">
                        <a class="fancybox" href="{{URL::asset('images/entries/full-size/dining-white.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-white-220x130.png')}}" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.html">White Dining Room</a></h4>
                    <div class="entry-content">
                        <p>Image project with lightbox.</p>
                    </div>
				</li>
				<li data-id="id-2" data-type="web-design" class="entry one-fourth">
                    <div class="entry-image">
                        <a class="fancybox" rel="gallery-living-large-windows" href="{{URL::asset('images/entries/full-size/living-large-windows.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/living-large-windows-220x130.png')}}" alt=""></a>
                        <a class="fancybox invisible" rel="gallery-living-large-windows" href="{{URL::asset('images/entries/full-size/living-brown.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/living-brown-220x130.png')}}" alt=""></a>
                        <a class="fancybox invisible" rel="gallery-living-large-windows" href="{{URL::asset('images/entries/full-size/dining-and-living-cream.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-and-living-cream-220x130.png')}}" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.html">Living with Large Windows</a></h4>
                    <div class="entry-content">
                        <p>Gallery project with lightbox.</p>
                    </div>
				<li data-id="id-3" data-type="web-design print-design" class="entry one-fourth">
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
                
                <li data-id="id-4" data-type="animation" class="entry one-fourth">
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
				<li data-id="id-5" data-type="photography" class="entry one-fourth">
					<div class="entry-image">
                        <a class="fancybox" href="{{URL::asset('images/entries/full-size/living-white.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/living-white-220x130.png')}}" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.html">White Living Room</a></h4>
                    <div class="entry-content">
                        <p>Image project with lightbox.</p>
                    </div>
				</li>
                <li data-id="id-6" data-type="web-design print-design" class="entry one-fourth">
					<div class="entry-image">
                        <a class="fancybox" rel="gallery-study" href="images/entries/full-size/study.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/study-220x130.png')}}" alt=""></a>
                        <a class="fancybox invisible" rel="gallery-study" href="{{URL::asset('images/entries/full-size/dining-white2.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-white2-220x130.png')}}" alt=""></a>
                        <a class="fancybox invisible" rel="gallery-study" href="{{URL::asset('images/entries/full-size/dining-brown.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-brown-220x130.png')}}" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.html">Study</a></h4>
                    <div class="entry-content">
                        <p>Gallery project with lightbox.</p>
                    </div>
				</li>
                <li data-id="id-7" data-type="web-design print-design" class="entry one-fourth">
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
                <li data-id="id-8" data-type="photography" class="entry one-fourth">
					<div class="entry-image">
                        <a class="fancybox" href="{{URL::asset('images/entries/full-size/dining-brown.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-brown-220x130.png')}}" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.html">Brown Dining Room</a></h4>
                    <div class="entry-content">
                        <p>Image project with lightbox.</p>
                    </div>
				</li>
                <li data-id="id-9" data-type="web-design print-design" class="entry one-fourth">
					<div class="entry-image">
                        <a class="fancybox" href="{{URL::asset('images/entries/full-size/dining-and-living-cream.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/dining-and-living-cream-220x130.png')}}" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.html">Cream Dining and Living Room</a></h4>
                    <div class="entry-content">
                        <p>Image project with lightbox.</p>
                    </div>
				</li>
                <li data-id="id-10" data-type="web-design" class="entry one-fourth">
					<div class="entry-image">
                        <a class="fancybox" href="{{URL::asset('images/entries/full-size/villa.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/villa-220x130.png')}}" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.html">Villa</a></h4>
                    <div class="entry-content">
                        <p>Image project with lightbox.</p>
                    </div>
				</li>
                <li data-id="id-11" data-type="photography" class="entry one-fourth">
					<div class="entry-image">
                        <a class="fancybox" href="{{URL::asset('images/entries/full-size/building.jpg')}}" title="Project Title"><span class="overlay zoom"></span><img src="{{URL::asset('images/entries/220x130/building-220x130.png')}}" alt=""></a>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-image.html">Building</a></h4>
                    <div class="entry-content">
                        <p>Image project with lightbox.</p>
                    </div>
				</li>
                <li data-id="id-12" data-type="animation" class="entry one-fourth">
					<div class="entry-video">
                        <iframe src="http://player.vimeo.com/video/11624173?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="220" height="110" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>
                    <h4 class="entry-title"><a href="portfolio-item-embedded-video.html">Arhitectural Film &ndash; Interior</a></h4>
                    <div class="entry-content">
                        <p>Embedded video project.</p>
                    </div>
				</li>
			</ul>
    @endsection