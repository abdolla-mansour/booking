@extends('booking.layouts.app')

@section('nav_sales_active', 'active')

@section('content')

    <div class="top2_wrapper">
        <div class="bg1"><img src="{{ asset('booking_assets/images/bg1.jpg') }}" alt="" class="img"></div>
        <div class="top2_inner">
            <div class="container">
                <div class="top2 clearfix">

                    <h1>Sales</h1>

                    <div class="breadcrumbs1"><a href="index.html">Home</a><span></span><a href="index.html">Pages</a><span></span>Sales</div>


                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">

                    <h2><span>Selling List</span></h2>

                    <div class="row">
                        @foreach ($props as $prop)
                            <div class="span3">
                                <div class="thumb3">
                                    <div class="thumbnail clearfix">
                                        <figure><img src="{{ asset('properties_image/' . $prop->image->name) }}" alt="" class="img"></figure>
                                        <div class="caption">
                                            <div class="txt1">{{ $prop->title }}</div>
                                            <div class="txt2" style="height: 100px;overflow:hidden">{{ $prop->description }}</div>
                                            <div class="txt3">${{ number_format($prop->salary) }}</div>
                                            <a href="{{ route('gallery', $prop->id) }}" class="button2">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{ $props->links('pagination::default') }}
                </div>
            </div>
        </div>
    </div>
@endsection
