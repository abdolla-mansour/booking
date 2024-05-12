@extends('booking.layouts.app')

@section('nav_about_active', 'active')

@section('content')
    <div class="top2_wrapper">
        <div class="bg1"><img src="{{ asset('booking_assets/images/bg1.jpg') }}" alt="" class="img"></div>
        <div class="top2_inner">
            <div class="container">
                <div class="top2 clearfix">

                    <h1>About US</h1>

                    <div class="breadcrumbs1"><a href="index.html">Home</a><span></span><a href="index.html">Pages</a><span></span>About</div>


                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span9">

                    <h2><span>Who We Are</span></h2>

                    <h3>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</h3>

                    <div class="thumb1">
                        <div class="thumbnail clearfix">
                            <figure class=""><img style="max-width: 300px" src="{{ asset('booking_assets/images/about01.jpg') }}" alt=""></figure>
                            <div class="caption">
                                <p>
                                    Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus ultricies. Nullam eu elit risus, vel
                                    interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac habitasse platea dictumst. Donec pharetra gravida augue at
                                    hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet
                                    conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                                </p>
                                <a href="#" class="button1">Read more</a>
                            </div>
                        </div>
                    </div>










                </div>
                <div class="span3">

                    <h2><span>Services</span></h2>

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

            <div id="slider4_wrapper">

                <div class="slider4_title"><span>Our Team</span></div>

                <div id="slider4">
                    <a class="prev4" href="#"></a>
                    <a class="next4" href="#"></a>
                    <div class="carousel-box row">
                        <div class="inner span12">
                            <div class="carousel main">
                                <ul>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team01.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Jesica McSeller</div>
                                                        <div class="txt2">Director</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team02.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Alex Morgan</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team03.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Pamela Brian</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team04.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Andreas wolf</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team05.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Monica winc</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team06.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Monty Brown</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team01.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Jesica McSeller</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team02.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Alex Morgan</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team03.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Pamela Brian</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team04.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Andreas wolf</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team05.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Monica winc</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="team">
                                            <div class="team_inner">
                                                <a href="#">
                                                    <figure><img src="{{ asset('booking_assets/images/team06.jpg') }}" alt="" class="img"></figure>
                                                    <div class="caption">
                                                        <div class="txt1">Monty Brown</div>
                                                        <div class="txt2">agent</div>
                                                        <div class="txt3">Lorem ipsum dolor sit amet, conse etur et adipiscing elit. </div>
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

            <div id="slider5_wrapper">

                <div class="slider5_title"><span>testimonials</span></div>

                <div id="slider5">

                    <div class="carousel-box">
                        <div class="inner">
                            <div class="carousel main">
                                <ul>
                                    <li>
                                        <div class="testimonial">
                                            <div class="testimonial_inner clearfix">
                                                <figure><img style="max-width: 127px" src="{{ asset('booking_assets/images/team01.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">Ipsum dolor sit amet conse ctetur adipisicing elit</div>
                                                    <div class="txt2">Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus
                                                        ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac
                                                        habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. </div>
                                                    <div class="txt3">- Jesica Williams, Company Name</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial">
                                            <div class="testimonial_inner clearfix">
                                                <figure><img style="max-width: 127px" src="{{ asset('booking_assets/images/team02.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">Ipsum dolor sit amet conse ctetur adipisicing elit</div>
                                                    <div class="txt2">Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus
                                                        ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac
                                                        habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. </div>
                                                    <div class="txt3">- Alex Morgan, Company Name</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial">
                                            <div class="testimonial_inner clearfix">
                                                <figure><img style="max-width: 127px" src="{{ asset('booking_assets/images/team03.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">Ipsum dolor sit amet conse ctetur adipisicing elit</div>
                                                    <div class="txt2">Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus
                                                        ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac
                                                        habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. </div>
                                                    <div class="txt3">- Pamela Brian, Company Name</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial">
                                            <div class="testimonial_inner clearfix">
                                                <figure><img style="max-width: 127px" src="{{ asset('booking_assets/images/team04.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">Ipsum dolor sit amet conse ctetur adipisicing elit</div>
                                                    <div class="txt2">Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus
                                                        ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac
                                                        habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. </div>
                                                    <div class="txt3">- Andreas wolf, Company Name</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="testimonial">
                                            <div class="testimonial_inner clearfix">
                                                <figure><img style="max-width: 127px" src="{{ asset('booking_assets/images/team05.jpg') }}" alt="" class="img"></figure>
                                                <div class="caption">
                                                    <div class="txt1">Ipsum dolor sit amet conse ctetur adipisicing elit</div>
                                                    <div class="txt2">Nulla ultricies enim aliquet augue eleifend iaculis. Nam sollicitudin ligula ac nisi iaculis eu scelerisque risus
                                                        ultricies. Nullam eu elit risus, vel interdum urna. Aenean leo nulla, aliquet vitae ultricies sit amet, porttitor id sapien. In hac
                                                        habitasse platea dictumst. Donec pharetra gravida augue at hendrerit. Cras Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed
                                                        do eiusmod tempor incididunt ut labore et dolore magna. Ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore magna aliqua. </div>
                                                    <div class="txt3">- Monica winc, Company Name</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="pagination5" id="slider5_pag"></div>

                </div>

                <div class="text-center"><a href="#" class="button2">Read More testimonials</a></div>

            </div>

        </div>
    </div>
@endsection

@section('header')
    <script>
        $(document).ready(function() {
            //
            //	carouFredSel team
            $('#slider4 .carousel.main ul').carouFredSel({
                auto: {
                    timeoutDuration: 8000
                },
                responsive: true,
                prev: '.prev4',
                next: '.next4',
                width: '100%',
                scroll: {
                    items: 1,
                    duration: 1000,
                    easing: "easeOutExpo"
                },
                items: {
                    width: '180',
                    height: 'variable', //	optionally resize item-height			  
                    visible: {
                        min: 2,
                        max: 6
                    }
                },
                mousewheel: false,
                swipe: {
                    onMouse: true,
                    onTouch: true
                }
            });

            //	carouFredSel team
            $('#slider5 .carousel.main ul').carouFredSel({
                auto: {
                    timeoutDuration: 9000
                },
                responsive: true,
                direction: "left",
                //prev: '.prev1',
                //next: '.next1',
                width: '100%',
                scroll: {
                    items: 1,
                    duration: 1000,
                    easing: "easeOutExpo",
                    fx: "fade"
                },
                items: {
                    width: '1000',
                    height: 'variable', //	optionally resize item-height			  
                    visible: {
                        min: 1,
                        max: 1
                    }
                },
                mousewheel: false,
                swipe: {
                    onMouse: true,
                    onTouch: true
                },
                pagination: ".pagination5"


            });




            $(window).bind("resize", updateSizes_vat).bind("load", updateSizes_vat);

            function updateSizes_vat() {
                $('#slider4 .carousel.main ul').trigger("updateSizes");
                $('#slider5 .carousel.main ul').trigger("updateSizes");
            }
            updateSizes_vat();




        }); //
        $(window).load(function() {
            //

        }); //
    </script>
@endsection
