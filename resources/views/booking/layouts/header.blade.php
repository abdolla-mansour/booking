<!DOCTYPE html>
<html lang="en">

<head>
    <title>real estate - finder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="{{ asset('booking_assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('booking_assets/images/favicon.ico') }}" type="image/x-icon" />

    <link rel="stylesheet" href="{{ asset('booking_assets/css/bootstrap.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('booking_assets/css/bootstrap-responsive.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('booking_assets/css/camera.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('booking_assets/css/style.css') }}" type="text/css" media="screen">

    <script type="text/javascript" src="{{ asset('booking_assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('booking_assets/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('booking_assets/js/superfish.js') }}"></script>

    <script type="text/javascript" src="{{ asset('booking_assets/js/jquery.ui.totop.js') }}"></script>

    <script type="text/javascript" src="{{ asset('booking_assets/js/camera.js') }}"></script>
    <script type="text/javascript" src="{{ asset('booking_assets/js/jquery.mobile.customized.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('booking_assets/js/jquery.caroufredsel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('booking_assets/js/jquery.touchSwipe.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('booking_assets/js/script.js') }}"></script>

    @yield('header')
    <!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg"border="0"alt=""/></a></div>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>

<body class="front">
    <div id="main">

        <div class="top1_wrapper">
            <div class="top1 clearfix">

                <header>
                    <div class="logo_wrapper"><a href="{{ route('home') }}" class="logo"><img src="{{ asset('booking_assets/images/logo.png') }}" alt=""></a></div>
                </header>

                <div class="menu_wrapper clearfix">
                    <div class="navbar navbar_">
                        <div class="navbar-inner navbar-inner_">
                            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <div class="nav-collapse nav-collapse_ collapse">
                                <ul class="nav sf-menu clearfix">
                                    {{-- web pages --}}
                                    <li class="@yield('nav_home_active')"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="@yield('nav_about_active')"><a href="{{ route('about') }}">About</a></li>
                                    <li class="@yield('nav_sales_active')"><a href="{{ route('sales') }}">Sales</a></li>
                                    <li class="@yield('nav_gallery_active')"><a href="{{ route('gallery') }}">gallery</a></li>
                                    <li class="@yield('nav_contact_us_active')"><a href="{{ route('contact_us') }}">Contact us</a></li>

                                    {{-- logs --}}
                                    @auth
                                        <li class="@yield('nav_profile_active')"><a href="{{ route('profile.dash') }}">profile</a></li>
                                        @if (Auth::user()->hasRole('admin'))
                                            <li><a href="{{ route('dashboard.main') }}">dashboard</a></li>
                                        @endif
                                    @else
                                        <li class="@yield('nav_login_active')"><a href="{{ route('login') }}">Login</a></li>
                                        <li class="@yield('nav_register_active')"><a href="{{ route('register') }}">Register</a></li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="search">

                        <a href="#" class="searchBtn"></a>

                        <div class="search-form-wrapper">
                            <form id="search-form" action="" method="GET" accept-charset="utf-8" class="navbar-form">
                                <label for="">Salary</label>
                                <input style="margin-bottom: 12px;max-width: 27%;" class="d-inline" type="text" name="s" value='From' onBlur="if(this.value=='') this.value='From'" onFocus="if(this.value =='From' ) this.value=''">
                                <input style="margin-bottom: 12px;max-width: 27%;" class="d-inline" type="text" name="s" value='To' onBlur="if(this.value=='') this.value='To'" onFocus="if(this.value =='To' ) this.value=''">
                                <input style="margin-bottom: 12px" type="text" name="s" value='Count of pathroom' onBlur="if(this.value=='') this.value='Count of pathroom'" onFocus="if(this.value =='Count of pathroom' ) this.value=''">
                                <input style="margin-bottom: 12px" type="text" name="s" value='Count of baderoom' onBlur="if(this.value=='') this.value='Count of baderoom'" onFocus="if(this.value =='Count of baderoom' ) this.value=''">
                                <a style="position: relative" href="#" onClick="document.getElementById('search-form').submit()"></a>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div id="inner">