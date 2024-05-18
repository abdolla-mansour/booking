@extends('booking.layouts.app')

@section('nav_contact_us_active', 'active')

@section('content')

    <div class="top2_wrapper">
        <div class="bg1"><img src="{{ asset('booking_assets/images/bg1.jpg') }}" alt="" class="img"></div>
        <div class="top2_inner">
            <div class="container">
                <div class="top2 clearfix">

                    <h1>contact us</h1>

                    <div class="breadcrumbs1"><a href="index.html">Home</a><span></span><a href="index.html">Pages</a><span></span>Contacts</div>


                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">

            <div class="row">
                <div class="span12">

                    <h2 class="center"><span>Contact form</span></h2>

                    <div id="note"></div>
                    <div id="fields">
                        <form method="POST" id="ajax-contact-form" class="form-horizontal" action="{{ route('contact_us.create') }}">
                            @csrf
                            <div class="row">
                                <div class="span4">
                                    <div class="control-group">
                                        <label class="control-label" for="inputName">{{ old('username') ?? 'Your full name:' }}</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputName" name="username" value="{{ old('username') ?? 'Your full name:' }}"
                                                onBlur="if(this.value=='') this.value='{{ old('username') ?? 'Your full name:' }}'" onFocus="if(this.value =='{{ old('name') ?? 'Your full name:' }}' ) this.value=''">
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">{{ old('email') ?? 'Your email:' }}</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputEmail" name="email" value="{{ old('email') ?? 'Your email:' }}" onBlur="if(this.value=='') this.value='{{ old('email') ?? 'Your email:' }}'"
                                                onFocus="if(this.value =='{{ old('email') ?? 'Your email:' }}' ) this.value=''">
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="control-group">
                                        <label class="control-label" for="inputPhone">{{ old('phone') ?? 'Phone number:' }}</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputPhone" name="phone" value="{{ old('phone') ?? 'Phone number:' }}"
                                                onBlur="if(this.value=='') this.value='{{ old('phone') ?? 'Phone number:' }}'" onFocus="if(this.value =='{{ old('phone') ?? 'Phone number:' }}' ) this.value=''">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span12">
                                    <div class="control-group">
                                        <label class="control-label" for="inputMessage">{{ old('message') ?? 'Message:' }}</label>
                                        <div class="controls">
                                            <textarea class="span12" id="inputMessage" name="message" onBlur="if(this.value=='') this.value='{{ old('message') ?? 'Message:' }}'"
                                                onFocus="if(this.value =='{{ old('message') ?? 'Message:' }}' ) this.value=''">{{ old('message') ?? 'Message:' }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="span12">
                                    <div class="control-group capthca">
                                        <label class="control-label" for="inputCapthca">Capthca:</label>
                                        <div class="controls">
                                            <input class="" type="text" id="inputCapthca" name="capthca" value="Capthca:" onBlur="if(this.value=='') this.value='Capthca:'"
                                                onFocus="if(this.value =='Capthca:' ) this.value=''">
                                            <img src="{{ asset('booking_assets/captcha/captcha.php') }}">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <button type="submit" class="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
