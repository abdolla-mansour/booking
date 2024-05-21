@extends('booking.layouts.app')

@section('nav_home_active', 'active')

@section('content')
    <div class="find_wrapper">

        <div class="find_inner">
            <div class="find">

                <div class="txt1">welcome to</div>

                <div class="txt2">HotelHunt</div>

                <div class="txt3">finder</div>

                <div class="line"></div>

                <div class="txt4">THE EASIEST WAY TO FIND PROPERTY</div>

                <div class="find-form-wrapper clearfix">
                    <form id="find-form" action="{{ route('search.home') }}" method="POST" accept-charset="utf-8" class="navbar-form clearfix">
                        @csrf
                        <input type="text" name="search" value='keyword' onBlur="if(this.value=='') this.value='keyword'" onFocus="if(this.value =='keyword' ) this.value=''">
                        <a href="#" onClick="document.getElementById('find-form').submit()"></a>
                    </form>
                </div>


            </div>
        </div>

        <div id="slider_wrapper">
            <div id="slider" class="clearfix">
                <div id="camera_wrap">
                    <div data-src="{{ asset('booking_assets/images/slide01.jpg') }}"></div>
                    <div data-src="{{ asset('booking_assets/images/slide02.jpg') }}"></div>
                    <div data-src="{{ asset('booking_assets/images/slide03.jpg') }}"></div>
                    <div data-src="{{ asset('booking_assets/images/slide04.jpg') }}"></div>
                    <div data-src="{{ asset('booking_assets/images/slide05.jpg') }}"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="banners">
        <div class="container">
            <div class="row">
                <div class="span4 banner banner1">
                    <div class="banner_inner">
                        <a href="#">
                            <div class="caption">
                                <div class="txt1">ADVANTAGES</div>
                                <div class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet
                                    conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ...</div>
                                <div class="txt3">more</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="span4 banner banner2">
                    <div class="banner_inner">
                        <a href="#">
                            <div class="caption">
                                <div class="txt1">MISSION</div>
                                <div class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet
                                    conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ...</div>
                                <div class="txt3">more</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="span4 banner banner3">
                    <div class="banner_inner">
                        <a href="#">
                            <div class="caption">
                                <div class="txt1">vision</div>
                                <div class="txt2">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet
                                    conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ...</div>
                                <div class="txt3">more</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="slider3_wrapper">
        <div class="container">

            <div class="slider3_title"><span>LATEST OFFERS</span></div>

            <div id="slider3">
                <a class="prev3" href="#"></a>
                <a class="next3" href="#"></a>
                <div class="carousel-box row">
                    <div class="inner span12">
                        <div class="carousel main">
                            <ul>
                                <li>
                                    <div class="offer">
                                        <div class="offer_inner">
                                            <a href="#">
                                                <figure><img src="{{ asset('booking_assets/images/carousel01.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">LOREM IPSUM DOL AMET</div>
                                                    <div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
                                                    <div class="txt3">$570.000</div>
                                                    <div class="txt4">Read More</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="offer">
                                        <div class="offer_inner">
                                            <a href="#">
                                                <figure><img src="{{ asset('booking_assets/images/carousel02.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">LOREM IPSUM DOL AMET</div>
                                                    <div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
                                                    <div class="txt3">$240.000</div>
                                                    <div class="txt4">Read More</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="offer">
                                        <div class="offer_inner">
                                            <a href="#">
                                                <figure><img src="{{ asset('booking_assets/images/carousel03.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">LOREM IPSUM DOL AMET</div>
                                                    <div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
                                                    <div class="txt3">$480.000</div>
                                                    <div class="txt4">Read More</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="offer">
                                        <div class="offer_inner">
                                            <a href="#">
                                                <figure><img src="{{ asset('booking_assets/images/carousel04.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">LOREM IPSUM DOL AMET</div>
                                                    <div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
                                                    <div class="txt3">$120.000</div>
                                                    <div class="txt4">Read More</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="offer">
                                        <div class="offer_inner">
                                            <a href="#">
                                                <figure><img src="{{ asset('booking_assets/images/carousel05.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">LOREM IPSUM DOL AMET</div>
                                                    <div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
                                                    <div class="txt3">$730.000</div>
                                                    <div class="txt4">Read More</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="offer">
                                        <div class="offer_inner">
                                            <a href="#">
                                                <figure><img src="{{ asset('booking_assets/images/carousel06.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">LOREM IPSUM DOL AMET</div>
                                                    <div class="txt2">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. Duis vel nisifes. Vestibulum ullamcorper dolore ipsum.</div>
                                                    <div class="txt3">$470.000</div>
                                                    <div class="txt4">Read More</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span9">

                    <h2><span>How it works</span></h2>

                    <div class="row">
                        <div class="span3">

                            <div class="work1 clearfix">
                                <div class="txt1">a</div>
                                <div class="txt2">Lorem ipsum<br>dolor sit</div>
                            </div>

                            <p>
                                Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum
                                urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras
                                ut...
                            </p>

                            <a href="#" class="button1">Read more</a>



                        </div>
                        <div class="span3">

                            <div class="work1 clearfix">
                                <div class="txt1">b</div>
                                <div class="txt2">Vestibulum ante<br>ipsum primis</div>
                            </div>

                            <p>
                                Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum
                                urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras
                                ut...
                            </p>

                            <a href="#" class="button1">Read more</a>



                        </div>
                        <div class="span3">

                            <div class="work1 clearfix">
                                <div class="txt1">c</div>
                                <div class="txt2">Cras dictum<br>odio</div>
                            </div>

                            <p>
                                Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel interdum
                                urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras
                                ut...
                            </p>

                            <a href="#" class="button1">Read more</a>



                        </div>
                    </div>

                </div>
                <div class="span3">

                    <h2><span>Our Professional Management</span></h2>

                    <ul class="ul1">
                        <li><a href="#">Adipisicing</a></li>
                        <li><a href="#">Dolore magna aliqua</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                        <li><a href="#">Elit sed do</a></li>
                        <li><a href="#">Incididunt ut labore et</a></li>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Sit amet conse ctetur</a></li>
                        <li><a href="#">Ut enim ad minim</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('header')
    <script>
        $(document).ready(function() {
            //
            $('#camera_wrap').camera({
                //thumbnails: true
                //alignment			: 'centerRight', 
                autoAdvance: true,
                mobileAutoAdvance: true,
                //fx					: 'simpleFade',
                height: '48%',
                hover: false,
                loader: 'none',
                navigation: false,
                navigationHover: false,
                mobileNavHover: false,
                playPause: false,
                pauseOnClick: false,
                pagination: true,
                time: 7000,
                transPeriod: 1000,
                minHeight: '300px'
            });

            //	carouFredSel
            $('#slider3 .carousel.main ul').carouFredSel({
                auto: {
                    timeoutDuration: 8000
                },
                responsive: true,
                prev: '.prev3',
                next: '.next3',
                width: '100%',
                scroll: {
                    items: 1,
                    duration: 1000,
                    easing: "easeOutExpo"
                },
                items: {
                    width: '330',
                    height: 'variable', //	optionally resize item-height			  
                    visible: {
                        min: 1,
                        max: 4
                    }
                },
                mousewheel: false,
                swipe: {
                    onMouse: true,
                    onTouch: true
                }
            });




            $(window).bind("resize", updateSizes_vat).bind("load", updateSizes_vat);

            function updateSizes_vat() {
                $('#slider3 .carousel.main ul').trigger("updateSizes");
            }
            updateSizes_vat();



        }); //
        $(window).load(function() {
            //

        }); //
    </script>
@endsection