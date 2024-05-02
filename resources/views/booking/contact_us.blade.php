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
                <div class="span9">

                    <h2><span>Our Location</span></h2>

                    <figure class="google_map">
                        <iframe
                            src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Glasgow,&amp;aq=&amp;sll=46.975033,31.994583&amp;sspn=0.368248,0.617294&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Glasgow,+Glasgow+City,+United+Kingdom&amp;t=m&amp;ll=55.866932,-4.256344&amp;spn=0.020324,0.070896&amp;z=13&amp;output=embed"></iframe>
                    </figure>

                    <h3>Real estate finder</h3>

                    <p>
                        615 East 13th Street<br>
                        Kansas City, MO 64106<br>
                        Telephone: +1 800 123 1895<br>
                        E-mail: <a href="#">mail@bteamny.com</a>
                    </p>

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

            <div class="row">
                <div class="span12">

                    <h2 class="center"><span>Contact form</span></h2>

                    <div id="note"></div>
                    <div id="fields">
                        <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
                            <div class="row">
                                <div class="span4">
                                    <div class="control-group">
                                        <label class="control-label" for="inputName">Your full name:</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputName" name="name" value="Your full name:"
                                                onBlur="if(this.value=='') this.value='Your full name:'" onFocus="if(this.value =='Your full name:' ) this.value=''">
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Your email:</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputEmail" name="email" value="Your email:" onBlur="if(this.value=='') this.value='Your email:'"
                                                onFocus="if(this.value =='Your email:' ) this.value=''">
                                        </div>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="control-group">
                                        <label class="control-label" for="inputPhone">Phone number:</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputPhone" name="phone" value="Phone number:"
                                                onBlur="if(this.value=='') this.value='Phone number:'" onFocus="if(this.value =='Phone number:' ) this.value=''">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span12">
                                    <div class="control-group">
                                        <label class="control-label" for="inputMessage">Message:</label>
                                        <div class="controls">
                                            <textarea class="span12" id="inputMessage" name="content" onBlur="if(this.value=='') this.value='Message:'"
                                                onFocus="if(this.value =='Message:' ) this.value=''">Message:</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
                            </div>
                            <button type="submit" class="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
