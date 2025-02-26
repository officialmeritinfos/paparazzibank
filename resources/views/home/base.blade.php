<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="	agency, ai, ai writer, app landing, creative, crm, html template, hosting, mobile app, multipurpose, payment, saas, software, support">
    <meta name="description" content="Gen Z bank of the future.">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$siteName}} - {{$pageName}}">
    <meta name='og:image' content='{{asset('home/images/'.$web->logo)}}'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#0D1A1C">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#0D1A1C">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#0D1A1C">
    <title>{{$pageName}} - {{$siteName}}</title>
    <!-- Favicon Link -->
    <link rel="icon" type="image/png" href="{{asset('home/images/loader.svg')}}">
    @stack('css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}" media="all">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.min.css')}}" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/responsive.css')}}" media="all">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="{{asset('home/vendor/html5shiv.js')}}"></script>
    <script src="{{asset('home/vendor/respond.js')}}"></script>
    <![endif]-->
</head>

<body>
<div class="main-page-wrapper">
    <!-- ===================================================
        Loading Transition
    ==================================================== -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="icon"><img src="{{asset('home/images/loader.svg')}}" alt="" class="m-auto d-block"> <span></span></div>
            <div class="txt-loading">
                @foreach (str_split($siteName) as $char)
                    <span data-text-preloader="{{ $char }}" class="letters-loading">
                            {{ $char }}
                        </span>
                @endforeach

            </div>
        </div>
    </div>


    <!--
    =============================================
        Theme Main Menu
    ==============================================
    -->
    <header class="theme-main-menu menu-style-ten sticky-menu menu-overlay">
        <div class="inner-content gap-one">
            <div class="top-header position-relative">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo order-lg-0">
                        <a href="{{ url('/') }}" class="d-flex align-items-center">
                            <img src="{{asset('home/images/'.$web->logo)}}" alt="" style="width: 100px;">
                        </a>
                    </div>
                    <!-- logo -->
                    <div class="order-lg-2 ms-5 d-none d-md-inline-block">
                        <p class="m0 fs-20 font-manrope fw-500">Get <a href="{{ route('register') }}" class="fw-600 text-dark">Started</a></p>
                    </div>
                    <div class="right-widget order-lg-3 ms-auto me-3 me-lg-0">
                        <ul class="d-flex align-items-center style-none">
                            <li class="d-none d-sm-inline-block">
                                <a href="{{ route('user.dashboard') }}" class="login-btn-one fw-500 d-flex align-items-center tran3s">
                                    <img src="{{asset('home/images/icon/icon_18.svg')}}" alt="" class="me-2"> <span>My Account</span></a>
                            </li>
                        </ul>
                    </div>
                    <nav class="navbar navbar-expand-lg p0 order-lg-2 ms-lg-auto">
                        <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav align-items-lg-center">
                                <li class="d-block d-lg-none"><div class="logo"><a href="{{ url('/') }}" class="d-block"><img src="{{asset('home/images/'.$web->logo)}}" alt=""></a></div></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('home') }}" role="button"  aria-expanded="false">Home
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('about') }}" role="button"  aria-expanded="false">About
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('services') }}" role="button"  aria-expanded="false">
                                        Services
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('faqs') }}" role="button"  aria-expanded="false">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ route('home.contact') }}" role="button"  aria-expanded="false">
                                        Contact
                                    </a>
                                </li>
                                <li class="d-md-none ps-3 pe-3 mt-20">
                                    <a href="{{ route('register') }}" class="btn-one w-100">Let’s Started</a>
                                </li>

                                <li class="d-md-none ps-3 pe-3 mt-20">
                                    <a href="#" class="login-btn-one fw-500 d-flex justify-content-center align-items-center tran3s">
                                        <img src="{{asset('home/images/icon/icon_18.svg')}}" alt="" class="me-2"> <span>My Account</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div> <!--/.top-header-->
        </div> <!-- /.inner-content -->
    </header>
    <!-- /.theme-main-menu -->



    @yield('content')

    <!--
    =====================================================
        Fancy Banner Eleven
    =====================================================
    -->
    <div class="fancy-banner-eleven mt-150 xl-mt-130 lg-mt-80 gap-40">
        <div class="bg-wrapper position-relative z-1 pt-120 lg-pt-80 pb-120 lg-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="title-ten">
                            <h2>Take control of your finances</h2>
                        </div>
                        <p class="fs-24 text-dark mt-35 mb-35">
                            Get a secure and flexible digital banking experience with instant access to virtual debit cards, seamless transactions,
                            and hassle-free international payments.
                        </p>
                        <a href="{{ route('register') }}" class="btn-nineteen">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--
    =====================================================
        Footer Three
    =====================================================
    -->
    <div class="footer-three">
        <div class="container">
            <div class="position-relative">
                <div class="row justify-content-between">
                    <div class="col-lg-2 order-lg-0">
                        <div class="logo mt-15 mb-30">
                            <a href="{{ url('/') }}">
                                <img src="{{asset('home/images/'.$web->logo)}}" alt="">
                            </a>
                        </div>
                        <!-- logo -->
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="footer-nav mb-20">
                            <ul class="footer-nav-link style-none">
                                <li><a href="{{ route('about') }}">About </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <div class="footer-nav mb-20">
                            <ul class="footer-nav-link style-none">
                                <li><a href="{{ route('faqs') }}">Faq’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="footer-nav mb-20">
                            <ul class="footer-nav-link style-none">
                                <li><a href="{{ route('services') }}">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="footer-contact mb-20">
                            <p class="fw-500 fs-20 text-dark mb-30 md-mb-20">
                                {!! $web->address !!}
                            </p>
                            @if($web->phone)
                                <a href="tel:{{$web->phone}}" class="tel fw-500 fs-24 tran3s mb-40">{{$web->phone}}</a>
                            @endif
                            <ul class="style-none d-flex align-items-center social-icon">
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="bottom-footer border-dark">
                <div class="d-md-flex align-items-center justify-content-between">
                    <p class="copyright-text text-center m0"><span> @ 2022 - {{date('Y')}} </span> All Right Reserved</p>
                </div>
            </div>
        </div>
    </div> <!-- /.footer-three -->




    <button class="scroll-top">
        <i class="bi bi-arrow-up-short"></i>
    </button>




    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="{{asset('home/vendor/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- WOW js -->
    <script src="{{asset('home/vendor/wow/wow.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('home/vendor/slick/slick.min.js')}}"></script>
    <!-- Fancybox -->
    <script src="{{asset('home/vendor/fancybox/fancybox.umd.js')}}"></script>
    <!-- Lazy -->
    <script src="{{asset('home/vendor/jquery.lazy.min.js')}}"></script>
    <!-- js Counter -->
    <script src="{{asset('home/vendor/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('home/vendor/jquery.waypoints.min.js')}}"></script>
    <!-- validator js -->
    <script src="{{asset('home/vendor/validator.js')}}"></script>

    <!-- Theme js -->
    <script src="{{asset('home/js/theme.js')}}"></script>

    <!-- Google language start -->
    <style>

        #google_translate_element {
            z-index: 9999999;
            position: fixed;
            bottom: 25px;
            left: 15px;
        }

        .goog-te-gadget {
            font-family: Roboto, "Open Sans", sans-serif !important;
            text-transform: uppercase;
        }
        .goog-te-gadget-simple
        {
            padding: 0px !important;
            line-height: 1.428571429;
            color: white;
            vertical-align: middle;
            background-color: black;
            border: 1px solid #a5a5a599;
            border-radius: 4px;
            float: right;
            margin-top: -4px;
            z-index: 999999;
        }
        .goog-te-banner-frame.skiptranslate
        {
            display: none !important;
            color: white;
        }
        .goog-te-gadget-icon
        {
            background: none !important;
            display: none;
            color: white;
        }
        .goog-te-gadget-simple .goog-te-menu-value
        {
            font-size: 12px;
            color: white;
            font-family: 'Open Sans' , sans-serif;
        }
    </style>
    <div id="google_translate_element"></div>
    <script type="text/javascript">
        window.onload = function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'cfb706bc2de3c1ac179175bcd497dc59598a0ce9';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</div>
</body>
</html>
