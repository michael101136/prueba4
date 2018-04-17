@extends('layoutFront')
@section('contenido')
    <!-- begin page header -->
    <header id="page-header">
            	<h1 id="page-title">{{trans('menu.Habitacion_matrimonial')}}</h1>	
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
                        <div class="panel-heading"><strong>{{trans('menu.Habitacion_matrimonial')}}</strong></div>
                        <div class="panel-body">
                            <div align="justify"><p>{{trans('contenido.Contenido_habitacionmatrimonial')}}</p></div>
                            <br>
                            <h3>Servicios</h3><br>
                            <ul class="check">
                            @foreach($servicios as $itemp)
                            <li>{{$itemp->name_servicio_lan}}</li>
                            @endforeach
                            </ul>
                            <h3>Precio</h3><br>
                            <li>S/. 50</li>
                        </div>
                    </div>
                   
                    <a href="#" class="button">Visit Website</a>
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
             
                 
    
            	</ul>
                <!-- end project carousel -->
            </section>
            <!-- end related projects -->  
 
            <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $AutoPlaySteps: 5,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 5
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 057 css*/
        .jssorb057 .i {position:absolute;cursor:pointer;}
        .jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
        .jssorb057 .i:hover .b {stroke-opacity:.7;}
        .jssorb057 .iav .b {stroke-opacity: 1;}
        .jssorb057 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 073 css*/
        .jssora073 {display:block;position:absolute;cursor:pointer;}
        .jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
        .jssora073:hover {opacity:.8;}
        .jssora073.jssora073dn {opacity:.4;}
        .jssora073.jssora073ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
            <div data-p="43.75">
                <img data-u="image" src="img/001.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/005.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/006.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/007.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/008.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/009.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/010.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/011.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/024.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/025.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/026.jpg" />
            </div>
            <div data-p="43.75">
                <img data-u="image" src="img/027.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5000"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
               
@endsection
