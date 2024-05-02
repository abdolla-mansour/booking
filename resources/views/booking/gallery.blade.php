@extends('booking.layouts.app')

@section('nav_gallery_active', 'active')

@section('content')

    <div class="top2_wrapper">
        <div class="bg1"><img src="{{ asset('booking_assets/images/bg1.jpg') }}" alt="" class="img"></div>
        <div class="top2_inner">
            <div class="container">
                <div class="top2 clearfix">

                    <h1>Gallery</h1>

                    <div class="breadcrumbs1"><a href="index.html">Home</a><span></span><a href="index.html">Pages</a><span></span>Gallery</div>


                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">

                    <h2><span>Our Photos</span></h2>

                    <div id="isotope-options">
                        <ul id="isotope-filters" class="clearfix">
                            <li><a href="#" class="selected" data-filter="*">Show All</a></li>
                            <li><a href="#" data-filter=".isotope-filter1">Category 1</a></li>
                            <li><a href="#" data-filter=".isotope-filter2">Category 2</a></li>
                            <li><a href="#" data-filter=".isotope-filter3">Category 3</a></li>
                        </ul>
                    </div>

                    <ul class="thumbnails" id="isotope-items">
                        <li class="span4 isotope-element isotope-filter1">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="images/blank.png">
                                        <figure>
                                            <img src="{{ asset('booking_assets/images/gallery01.jpg') }}" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            Lorem ipsum dolor sit amet conse ctetur
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="span4 isotope-element isotope-filter2">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="images/blank.png">
                                        <figure>
                                            <img src="{{ asset('booking_assets/images/gallery02.jpg') }}" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            Lorem ipsum dolor sit amet conse ctetur
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="span4 isotope-element isotope-filter3">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="images/blank.png">
                                        <figure>
                                            <img src="{{ asset('booking_assets/images/gallery03.jpg') }}" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            Lorem ipsum dolor sit amet conse ctetur
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="span4 isotope-element isotope-filter1">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="images/blank.png">
                                        <figure>
                                            <img src="{{ asset('booking_assets/images/gallery04.jpg') }}" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            Lorem ipsum dolor sit amet conse ctetur
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="span4 isotope-element isotope-filter2">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="images/blank.png">
                                        <figure>
                                            <img src="{{ asset('booking_assets/images/gallery05.jpg') }}" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            Lorem ipsum dolor sit amet conse ctetur
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="span4 isotope-element isotope-filter3">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="images/blank.png">
                                        <figure>
                                            <img src="{{ asset('booking_assets/images/gallery06.jpg') }}" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            Lorem ipsum dolor sit amet conse ctetur
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="span4 isotope-element isotope-filter1">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="images/blank.png">
                                        <figure>
                                            <img src="{{ asset('booking_assets/images/gallery07.jpg') }}" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            Lorem ipsum dolor sit amet conse ctetur
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="span4 isotope-element isotope-filter2">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="images/blank.png">
                                        <figure>
                                            <img src="{{ asset('booking_assets/images/gallery08.jpg') }}" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            Lorem ipsum dolor sit amet conse ctetur
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="span4 isotope-element isotope-filter3">
                            <div class="thumb-isotope">
                                <div class="thumbnail clearfix">
                                    <a href="images/blank.png">
                                        <figure>
                                            <img src="{{ asset('booking_assets/images/gallery09.jpg') }}" alt=""><em></em>
                                        </figure>
                                        <div class="caption">
                                            Lorem ipsum dolor sit amet conse ctetur
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

@endsection

@section('header')
	<link rel="stylesheet" href="{{ asset('booking_assets/css/touchTouch.css') }}" type="text/css" media="screen">
	<link rel="stylesheet" href="{{ asset('booking_assets/css/isotope.css') }}" type="text/css" media="screen">
	<script type="text/javascript" src="{{ asset('booking_assets/js/touchTouch.jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('booking_assets/js/jquery.isotope.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            //
        });
        $(window).load(function() {
            //
            // isotop
            var $container = $('#isotope-items'),
                $optionSet = $('#isotope-options'),
                $optionSets = $('#isotope-filters'),
                $optionLinks = $optionSets.find('a');
            $container.isotope({
                filter: '*',
                layoutMode: 'fitRows'
            });
            $optionLinks.click(function() {
                var $this = $(this);
                // don't proceed if already selected 
                if ($this.hasClass('selected')) {
                    return false;
                }
                $optionSet.find('.selected').removeClass('selected');
                $this.addClass('selected');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector
                });
                return false;
            });
            $(window).on("resize", function(event) {
                $container.isotope('reLayout');
            });

            // touchTouch
            $('.thumb-isotope .thumbnail a').touchTouch();

        }); //
    </script>
@endsection
