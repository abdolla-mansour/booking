@extends('booking.layouts.app')

@section('nav_gallery_active', 'active')

@section('content')

    <div class="top2_wrapper">
        <div class="bg1"><img src="{{ asset('booking_assets/images/bg1.jpg') }}" alt="" class="img"></div>
        <div class="top2_inner">
            <div class="container">
                <div class="top2 clearfix">

                    <h1>Gallery</h1>

                    <div class="breadcrumbs1">
                        <a href="">Home</a>
                        <span><a href="">Pages</a></span>
                        <span>Gallery</span>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">

                    <h2><span>{{ $prop->title }}</span></h2>


                    <div class="thumb1">
                        <div class="thumbnail clearfix">
                            <figure class=""><img style="max-width: 300px" src="{{ asset('properties_image/' . $prop->image->name) }}" alt=""></figure>
                            <div class="caption">
                                <p>{{ $prop->description }}</p>
                            </div>
                            <div style="font-size: 18px;font-weight: bold">${{ number_format($prop->salary) }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">

                    <h2><span>Rooms</span></h2>

                    <div id="isotope-options">
                        <ul id="isotope-filters" class="clearfix">
                            <li><a href="#" class="selected" data-filter="*">Show All</a></li>
                            <li><a href="#" data-filter=".baderoom">baderoom</a></li>
                            <li><a href="#" data-filter=".bathroom">bathroom</a></li>
                            <li><a href="#" data-filter=".kitchen">kitchen</a></li>
                        </ul>
                    </div>

                    <ul class="thumbnails" id="isotope-items">
                        @foreach ($rooms as $room)
                            <li class="span4 isotope-element {{ $room->type }}">
                                <div class="thumb-isotope">
                                    <div class="thumbnail clearfix">
                                        <a href="{{ asset('rooms_image/' . $room->image->name) }}">
                                            <figure>
                                                <img src="{{ asset('rooms_image/' . $room->image->name) }}" alt=""><em></em>
                                            </figure>
                                            <div class="caption">
                                                {{ $room->title }}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
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
