<!DOCTYPE html>
<html>
  <head>
    <title>titre du site</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="icon" type="image/png" href="/assets/images/favicon-medical.png">
    <!--main file-->
	<link href="{{secure_asset('assets/css/medical-guide.css')}}" rel="stylesheet" type="text/css">
    <!--Medical Guide Icons-->
	<link href="{{secure_asset('assets/fonts/medical-guide-icons.css')}}" rel="stylesheet" type="text/css">
	<!-- Default Color-->
	<link href="{{secure_asset('assets/css/default-color.css')}}" rel="stylesheet" id="color"  type="text/css">
    <!--bootstrap-->
	<link href="{{secure_asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <!--Dropmenu-->
	<link href="{{secure_asset('assets/css/dropmenu.css')}}" rel="stylesheet" type="text/css">
	<!--Sticky Header-->
	<link href="{{secure_asset('assets/css/sticky-header.css')}}" rel="stylesheet" type="text/css">
	<!--revolution-->
	<link href="{{secure_asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">    
    <link href="{{secure_asset('assets/css/settings.css')}}" rel="stylesheet" type="text/css">    
    <link href="{{secure_asset('assets/css/extralayers.css')}}" rel="stylesheet" type="text/css">    
    <!--Accordion-->
    <link href="{{secure_asset('assets/css/accordion.css')}}" rel="stylesheet" type="text/css">
    <!--tabs-->
	<link href="{{secure_asset('assets/css/tabs.css')}}" rel="stylesheet" type="text/css">    
    <!--Owl Carousel-->
	<link href="{{secure_asset('assets/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">    
    <!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="{{secure_asset('assets/css/jquery.mmenu.all.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{secure_asset('assets/css/demo.css')}}" />
	<!--PreLoader-->
	<link href="{{secure_asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css">    
    <!--switcher-->
	<link href="{{secure_asset('assets/css/switcher.css')}}" rel="stylesheet" type="text/css">
</head>
  <body>	
  <div id="wrap">
   <!--Start PreLoader-->
   <div id="preloader">
		<div id="status">&nbsp;</div>
		<div class="loader">
			<h1>Loading...</h1>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!--End PreLoader-->  
    <!--Start Header-->
   <div id="header-1">
   <!--Start Top Bar-->
   <div class="top-bar">
   		<div class="container">
    		<div class="row">
                      <div class="col-md-5">
                </div>
                
                <div class="col-md-7">
                	<div class="get-touch">
						<ul>
                        <li><a><i class="icon-phone4"></i> +1 (514) 265-8343</a></li>
                        <li><a href="#."><i class="icon-mail"></i> help@medical.com</a></li>
						</ul>
                        <ul  class="social-icons">
                        <li><a href="#." class="fb"><i class="icon-euro"></i> </a></li>
                        <li><a href="#." class="tw"><i class="icon-yen"></i> </a></li>
						</ul>
                    </div>	
                </div>
            </div>
    	</div>
   </div> 
   <!--Top Bar End-->
   <!--Start Header-->
   <header class="header">
		<div class="container">
        <div class="row">
            <div class="col-md-3">
            	<a href="/" class="logo"><img src="/assets/images/logo.png" alt=""></a>
            </div>
            {{-- {{dd(request()->route()->uri())}} --}}
            <div class="col-md-9">
                <nav class="menu-2">
            	<ul class="nav wtf-menu">
                	<li  class={{ request()->route()->uri()=== '/' ? "item-select ": '' }}><a class="active"href="/">Accueil</a></li>
					<li  class={{ request()->route()->uri()=== 'apropos' ?  "item-select ": '' }}><a href="/apropos">Qui sommes nous ?</a></li>
                    <li  class={{ request()->route()->uri()=== 'contacts' ?  "item-select ": '' }}><a href="/contacts">Contacts</a></li>
					<li  class={{ request()->route()->uri()=== 'carrieur' ?  "item-select " : '' }}><a href="/carrieur">Postuler</a></li>
                </ul>
                </nav>
            </div>
        </div>
		</div>	
    </header>
	</div>
   <!--End Header-->
	<!-- Mobile Menu Start -->
	<div class="container">
    <div id="page">
			<header class="header">
				<a href="#menu"></a>
			</header>
			<nav id="menu">
				<ul>                    
                    <li class="item-select"><a href="/">Accueil</a></li>
					<li><a href="/apropos">Qui sommes nous ?</a></li>
                    <li><a href="/contacts">Contacts</a></li>
					<li><a href="/carrieur">Carrieur</a></li>
                </ul>
			</nav>
		</div>
		</div>
    <!-- Mobile Menu End -->
<div class="container">
<div class="time-table-sec">
<ul id="accordion2" class="accordion2">
<li>
{{-- <ul class="submenu time-table">
<li class="tit"><h5>Working Time</h5></li>
<li><span class="day">Monday - Friday</span> <span class="divider">-</span> <span class="time">8.00 - 16.00</span></li>
<li><span class="day">Saturday</span> <span class="divider">-</span> <span class="time">9.15 - 17.00</span></li>
<li><span class="day">Sunday</span> <span class="divider">-</span> <span class="time">9.45 - 15.00</span></li>
</ul> --}}
<div class="link"><img class="time-tab" src="/assets/images/timetable-menu.png" alt=""></div>
</li>
</ul>
</div>
</div>	   
   <!--Start Content-->
<div class="content">

       @yield('content')

</div>
   <!--End Content-->
   <!--Start Footer-->
   <footer class="footer" id="footer">
   		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="emergency">
                    	<i class="icon-phone4"></i>
                        <span class="number">+1 (514) 265-8343</span>
                        <img src="/assets/images/emergency-divider.png" alt="">
                    </div>
                </div>
            </div>
            <div class="main-footer">
            	<div class="row">
                    <div class="col-md-3">
                            <div class="detail">
                                <div class="tweets">                                                      
                                </div>
                                <div class="tweets">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-3">
                        <div class="useful-links">
                        	<div class="title">
                            	<h5>Navigations</h5>
                            </div>
                            <div class="detail">
                            	<ul>
                                	<li><a href="/.">Accueil</a></li>
                                    <li><a href="/apropos">A propos</a></li>
                                    <li><a href="/contacts">Contact</a></li>
                                    <li><a href="/carrieur">Carrieur</a></li>
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="get-touch">
                        	<div class="title">
                            	<h5>Nos Contacts</h5>
                            </div>
                            <div class="detail">
                            	<div class="get-touch">
                                    <ul>
                                        <li><i class="icon-phone4"></i> <span>+1 (514) 265-8343</span></li>
                                        <li><a href="index3.html#."><i class="icon-dollar"></i> <span>hello@medical-guide.com</span></a></li>
                                    </ul> 
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>       
        </div> 
        <div class="footer-bottom">
        	<div class="container">
            	<div class="row">
                    <div class="col-md-6">
                  	<span class="copyrights text-danger">  Developpe par <span style="color: #f15b5a" >LAGUI DEV.</span> </span>
                    </div>
                    <div class="col-md-6">
                    	<div class="social-icons">
                        	<a href="index3.html#." class="fb"><i class="icon-euro"></i></a>
                            <a href="index3.html#." class="tw"><i class="icon-yen"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </footer>
   <!--End Footer-->
<a href="index3.html#0" class="cd-top"></a>
  </div>
<script type="text/javascript" src="{{secure_asset('assets/js/jquery.js')}}"></script>
<!-- SMOOTH SCROLL -->	
<script type="text/javascript" src="{{secure_asset('assets/js/scroll-desktop.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('assets/js/scroll-desktop-smooth.js')}}"></script>
<!-- START REVOLUTION SLIDER -->	
<script type="text/javascript" src="{{secure_asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>
<!-- Date Picker and input hover -->
<script type="text/javascript" src="{{secure_asset('assets/js/classie.js')}}"></script> 
<script type="text/javascript" src="{{secure_asset('assets/js/jquery-ui-1.10.3.custom.js')}}"></script>
<!-- Fun Facts Counter -->
<script type="text/javascript" src="{{secure_asset('assets/js/counter.js')}}"></script>
<!-- Welcome Tabs -->	
<script type="text/javascript" src="{{secure_asset('assets/js/tabs.js')}}"></script>
<!-- All Carousel -->
<script type="text/javascript" src="{{secure_asset('assets/js/owl.carousel.js')}}"></script>
<!-- Mobile Menu -->
<script type="text/javascript" src="{{secure_asset('assets/js/jquery.mmenu.min.all.js')}}"></script>
<!-- All Scripts -->
<script type="text/javascript" src="{{secure_asset('assets/js/custom.js')}}"></script> 
<!-- Revolution Slider -->	
<script type="text/javascript">
jQuery('.tp-banner').show().revolution(
{
dottedOverlay:"none",
delay:16000,
startwidth:1170,
startheight:700,
hideThumbs:200,

thumbWidth:100,
thumbHeight:50,
thumbAmount:5,

navigationType:"nexttobullets",
navigationArrows:"solo",
navigationStyle:"preview",

touchenabled:"on",
onHoverStop:"on",

swipe_velocity: 0.7,
swipe_min_touches: 1,
swipe_max_touches: 1,
drag_block_vertical: false,

parallax:"mouse",
parallaxBgFreeze:"on",
parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

keyboardNavigation:"off",

navigationHAlign:"center",
navigationVAlign:"bottom",
navigationHOffset:0,
navigationVOffset:20,

soloArrowLeftHalign:"left",
soloArrowLeftValign:"center",
soloArrowLeftHOffset:20,
soloArrowLeftVOffset:0,

soloArrowRightHalign:"right",
soloArrowRightValign:"center",
soloArrowRightHOffset:20,
soloArrowRightVOffset:0,

shadow:0,
fullWidth:"on",
fullScreen:"off",

spinner:"spinner4",

stopLoop:"off",
stopAfterLoops:-1,
stopAtSlide:-1,

shuffle:"off",

autoHeight:"off",						
forceFullWidth:"off",						



hideThumbsOnMobile:"off",
hideNavDelayOnMobile:1500,						
hideBulletsOnMobile:"off",
hideArrowsOnMobile:"off",
hideThumbsUnderResolution:0,

hideSliderAtLimit:0,
hideCaptionAtLimit:0,
hideAllCaptionAtLilmit:0,
startWithSlide:0,
videoJsPath:"rs-plugin/videojs/",
fullScreenOffsetContainer: ""	
});
</script>
</body>
</html>
