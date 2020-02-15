{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156814870-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-156814870-1');
        </script>

        @yield('adsense')

        <!-- Basic Page Needs -->
      <meta charset="utf-8">
      <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
      <title>{{ config('app.name', 'Emerald Green Online Shop') }}</title>

      <meta name="author" content="Anna Liza Bade Dela Cruz">

      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <!-- Bootstrap  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/stylesheets/bootstrap.css" >

      <!-- Theme Style -->
      <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/stylesheets/style.css">

      <!-- Responsive -->
      <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/stylesheets/responsive.css">

      <!-- Colors -->
      <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/stylesheets/colors/color1.css" id="colors">

      <!-- Animation Style -->
      <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/stylesheets/animate.css">

      <!-- Favicon and touch icons  -->
      <link href="{{ asset('HE.png') }}" rel="apple-touch-icon-precomposed" sizes="48x48">
      <link href="{{ asset('HE.png') }}" rel="apple-touch-icon-precomposed">
      <link href="{{ asset('HE.png') }}" rel="shortcut icon">
      <!-- Slider Revolution CSS Files -->
      <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/rev-slider/css/settings.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/rev-slider/css/layers.css">
      <link rel="stylesheet" type="text/css" href="{{ asset('landing') }}/rev-slider/css/navigation.css">

      <style>
          footer.style3 {
            /* background-image: url('{{asset("img/silk.jpg")}}'); */
            background-size: cover;
            background-repeat: no-repeat;
            height: auto;
            max-height: 445px;
        }
        .footer-widgets {
            padding-bottom: 20px;
        }
      </style>

      @yield('styles')
  </head>


  <body>
    <div id="loading-overlay">
        <div class="loader"></div>
    </div> <!-- /.loading-overlay -->
    <header class="style1">
        <div id="site-header">
        <div class="container-fluid">
             <a href="{{ url('/') }}" class="logo"><img src="{{ asset('HE_rectangle.png')}}" alt="image" width="129" height="37" data-retina="{{ asset('HE_rectangle.png')}}" data-width="147" data-height="21"></a>
             <div class="mobile-button">
                <span></span>
             </div>
             <div class="nav-wrap ">
                <nav id="mainnav" class="mainnav">
                    <ul class="menu">
                        <li class="active a">
                             <a href="{{ url('/') }}" title="">HOME</a>
                        </li>
                        @guest
                            <li class="active">
                                <a class="" href="{{ route('login') }}">{{ __('User Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="active">
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/user/dashboard') }}">
                                        <span class="sidebar-title" style="text-transform:uppercase">{{ Auth::user()->firstname }} Dashboard</span>
                                    </a>
                            </li>
                            
                        @endguest
                    </ul>
                </nav>
             </div><!-- /.nav-wrap -->
             <div class="search clearfix">
                 <ul>
                     
                     <li><a href="#" style="float:left"> <i class="ti-align-justify" style="float:left" aria-hidden="true"></i> </a>
                        <ul class="sub-menu">
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('User Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/user/dashboard') }}">

                                            <span class="sidebar-title">{{ Auth::user()->firstname }} Dashboard</span>
                                        </a>
                                </li>
                                
                            @endguest
                            
                        </ul><!-- /.sub-menu -->
                      </li>
                 </ul>
                 
             </div>
        </div><!-- /container -->
        </div>
    </header>
    @yield('content')

    <footer class="style3">
        <div class="container">
            <div class="footer-widgets">
                <div class="widget widget-logo">
                    <a href="index.html" class="logo"><img src="{{ asset('HE_rectangle.png')}}" alt="image" width="129" height="37" data-retina="{{ asset('HE_rectangle.png')}}" data-width="147" data-height="21"></a>
                </div> <!-- /widget-logo -->
                <div class="widget widget-icon">
                    <ul>
                        <li class="active"><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
                        <li><a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                        <li><a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                        <li><a href="#"> <i class="fa fa-skype" aria-hidden="true"></i> </a></li>
                        <li><a href="#"> <i class="fa fa-wordpress" aria-hidden="true"></i></a></li>
                    </ul>
                </div> <!-- /widget-icon -->
                
                
                <div class="widget widget-text">
                    <span>© 2019 Emerald Green. All Rights Reserved</span>
                </div>
            </div> <!-- /footer-widgets -->
        </div> <!-- /container -->
    </footer>
    <a id="scroll-top"><i class="fa fa-angle-right" aria-hidden="true"></i></a> <!-- /#scroll-top -->

    <script src="{{ asset('landing') }}/javascript/jquery.min.js"></script>
    <script src="{{ asset('landing') }}/javascript/rev-slider.js"></script>
    <script src="{{ asset('landing') }}/javascript/owl.carousel.min.js"></script>
    <script src="{{ asset('landing') }}/javascript/jquery-countTo.js"></script>
    <script src="{{ asset('landing') }}/javascript/jquery-waypoints.js"></script>
    <script src="{{ asset('landing') }}/javascript/bootstrap.min.js"></script>
    <script src="{{ asset('landing') }}/javascript/jquery.easing.js"></script>
    <script src="{{ asset('landing') }}/javascript/main.js"></script>

     <!-- Slider -->
    <script src="{{ asset('landing') }}/rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('landing') }}/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ asset('landing') }}/javascript/rev-slider.js"></script>
    <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
    <script src="{{ asset('landing') }}/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{ asset('landing') }}/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{ asset('landing') }}/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{ asset('landing') }}/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ asset('landing') }}/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{ asset('landing') }}/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{ asset('landing') }}/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{ asset('landing') }}/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{ asset('landing') }}/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html> --}}





<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'ConnecTricks') }}</title>
    <link href="{{asset ('/')}}img/favicon.png" rel="icon">
    <link rel="stylesheet" href="{{asset ('/')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset ('/')}}dashboard/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('/')}}css/animate.min.css">
    <link rel="stylesheet" href="{{asset ('/')}}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset ('/')}}css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="{{asset ('/')}}css/tooltipster.min.css">
    <link rel="stylesheet" href="{{asset ('/')}}css/cubeportfolio.min.css">
    <link rel="stylesheet" href="{{asset ('/')}}css/navigation.css">
    <link rel="stylesheet" href="{{asset ('/')}}css/settings.css">
    <link rel="stylesheet" href="{{asset ('/')}}css/style.css">
</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="75" class="offset-nav">
<!--PreLoader-->
<div class="loader text-center">
    <img src="{{ asset('/') }}img/loading.gif" alt="" style="margin-top:5%">
</div>
<!--PreLoader Ends-->
<!-- header -->
<header class="site-header" id="header">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset ('/')}}img/CT.png" alt="logo" class="logo-default" style="height: 50px;width: auto;">
                <img src="{{asset ('/')}}img/CT.png" alt="logo" class="logo-scrolled" style="height: 50px;width: auto;">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto ml-xl-auto mr-xl-0">
                    <li class="nav-item">
                        <a class="nav-link active pagescroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll scrollupto" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#portfolio">Our Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#contact">Contact Us</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('User Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                                <a class="nav-link" href="{{ url('/user/dashboard') }}">
                                    <span class="sidebar-title" style="text-transform:uppercase">{{ Auth::user()->firstname }} Dashboard</span>
                                </a>
                        </li>
                        
                    @endguest
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span></span> <span></span> <span></span>
        </a>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 gradient-bg">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close btn-close-no-padding" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active pagescroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll scrollupto" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#pricing">Our Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#blog">Our Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#contact">Contact Us</a>
                    </li>
                    
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('User Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                                <a class="nav-link " href="{{ url('/user/dashboard') }}">
                                    <span class="sidebar-title" style="text-transform:uppercase">{{ Auth::user()->firstname }} Dashboard</span>
                                </a>
                        </li>
                        
                    @endguest
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p class="whitecolor">&copy; <span id="year"></span> {{ config('app.name', 'Emerald Green Online Shop') }}</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
<!-- header -->


    @yield('content')


<!--Site Footer Here-->
<footer id="site-footer" class=" bgdark padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                <a href="#" class="footer_logo bottom25"><img src="{{ asset('/')}}img/CT.png" alt="{{ config('app.name', 'ConnecTricks') }}" style="width:225px;"></a>
                    <p class="whitecolor bottom25">Keep away from people who try to belittle your ambitions Small people always do that but the really great Friendly.</p>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                            +01 - 123 - 4567 <a class="d-block" href="mailto:web@support.com">web@support.com</a>
                        </p>
                    </div>
                    <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
                        <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Latest News</h3>
                    <ul class="latest_news whitecolor">
                        <li> <a href="#.">Aenean tristique justo et... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                        <li> <a href="#.">Phasellus dapibus dictum augue... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                        <li> <a href="#.">Mauris blandit vitae. Praesent non... </a> <span class="date defaultcolor">15 March 2019</span> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class="whitecolor bottom25">Navigation</h3>
                    <ul class="links">
                        <li><a href="#home" class="pagescroll">Home</a></li>
                        <li><a href="#about" class="pagescroll scrollupto">About Us</a></li>
                        <li><a href="#pricing" class="pagescroll">Our Pricing</a></li>
                        <li><a href="#portfolio" class="pagescroll">Portfolio</a></li>
                        <li><a href="#blog" class="pagescroll">Our Blog</a></li>
                        <li><a href="#contact" class="pagescroll">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Business hours</h3>
                    <p class="whitecolor bottom25">Our support available to help you 24 hours a day, seven days week</p>
                    <ul class="hours_links whitecolor">
                        <li><span>Monday-Saturday:</span> <span>8.00-18.00</span></li>
                        <li><span>Friday:</span> <span>09:00-21:00</span></li>
                        <li><span>Sunday:</span> <span>09:00-20:00</span></li>
                        <li><span>Calendar Events:</span> <span>24-Hour Shift</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer ends-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://themesindustry.com/html/trax-2020/js/jquery-3.4.1.min.js"></script>
<!--Bootstrap Core-->
<script src="http://themesindustry.com/html/trax-2020/js/propper.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/bootstrap.min.js"></script>
<!--to view items on reach-->
<script src="http://themesindustry.com/html/trax-2020/js/jquery.appear.js"></script>
<!--Owl Slider-->
<script src="http://themesindustry.com/html/trax-2020/js/owl.carousel.min.js"></script>
<!--number counters-->
<script src="http://themesindustry.com/html/trax-2020/js/jquery-countTo.js"></script>
<!--Parallax Background-->
<script src="http://themesindustry.com/html/trax-2020/js/parallaxie.js"></script>
<!--Cubefolio Gallery-->
<script src="http://themesindustry.com/html/trax-2020/js/jquery.cubeportfolio.min.js"></script>
<!--Fancybox js-->
<script src="http://themesindustry.com/html/trax-2020/js/jquery.fancybox.min.js"></script>
<!--Tooltip js-->
<script src="http://themesindustry.com/html/trax-2020/js/tooltipster.min.js"></script>
<!--wow js-->
<script src="http://themesindustry.com/html/trax-2020/js/wow.js"></script>
<!--Revolution SLider-->
<script src="http://themesindustry.com/html/trax-2020/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/revolution/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="http://themesindustry.com/html/trax-2020/js/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="http://themesindustry.com/html/trax-2020/js/revolution/extensions/revolution.extension.video.min.js"></script>
<!--map js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgIfLQi8KTxTJahilcem6qHusV-V6XXjw"></script>
<script src="http://themesindustry.com/html/trax-2020/js/map.js"></script>
<!--custom functions and script-->
<script src="http://themesindustry.com/html/trax-2020/js/functions.js"></script>
</body>

<!-- Mirrored from themesindustry.com/html/trax-2020/single-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Jan 2020 14:58:57 GMT -->
</html>