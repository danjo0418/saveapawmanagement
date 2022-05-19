@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} </title>@endsection
@section('page')
    
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689"
                        data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-rotate="0" data-saveperformance="off" data-slotamount="default"
                        data-thumb="images/main-slider/image-1.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="{{ asset('asset/images/main-slider/image-1.jpg') }}">
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['650','700','650','420']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-85','-100','-100','-85']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <h2>We Give Special Care <br> to Your <span>Loving Pets</span></h2>
                        </div>
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','750','600','420']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['40','35','20','10']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="text">Elit sed eiusmod tempor incididunt sed laboret dolore magna aliquat
                                enim <br> veniam nostrud exercitation ullamco laboris nisi</div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on" data-type="text" data-height="none"
                            data-width="['550','550','550','420']" data-whitespace="normal"
                            data-hoffset="['15','15','15','15']" data-voffset="['130','130','130','110']"
                            data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="btns-box">
                                <a href="contact.html" class="theme-btn btn-style-two">Book Appointment</a>
                            </div>
                        </div>
                    </li>
                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687"
                        data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-rotate="0" data-saveperformance="off" data-slotamount="default"
                        data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title"
                        data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="{{ asset('asset/images/main-slider/image-2.jpg') }}">
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['850','700','650','420']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-105','-100','-100','-85']"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <h2 class="text-center alternate light">Caring Cildren & Loving Pets</h2>
                        </div>
                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-width="['700','700','600','420']"
                            data-whitespace="normal" data-hoffset="['15','15','15','15']"
                            data-voffset="['-10','35','20','10']" data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="text light text-center">Elit sed eiusmod tempor incididunt sed laboret
                                dolore magna <br> veniam nostrud exercitation ullamco laboris</div>
                        </div>
                        <div class="tp-caption tp-resizeme" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on" data-type="text" data-height="none"
                            data-width="['550','550','550','420']" data-whitespace="normal"
                            data-hoffset="['15','15','15','15']" data-voffset="['80','130','130','110']"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                            style="z-index: 7; white-space: nowrap;">
                            <div class="btns-box text-center">
                                <a href="contact.html" class="theme-btn btn-style-two">Learn About Pawrex</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!--Welcome Section-->
    <section class="welcome-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="separator">
                    <span class="icon flaticon-pawprint-1"></span>
                </div>
                <div class="title">Because We Really Care About Your Pets</div>
                <h2>Welcome to Save A Paw</h2>
            </div>
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="{{ asset('asset/images/resource/welcome.jpg') }}" alt="" />
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <ul class="list-style-one">
                            <li>Abore et dolore magna aliqua ut enim veniam</li>
                            <li>Quis nostrud exercitation ullamco laboris nisi aliquip</li>
                            <li>Eiusmod tempor incididunt labore.</li>
                        </ul>
                        <a href="services.html" class="theme-btn btn-style-two">view our services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Welcome Section-->

    <!--Featured Section-->
    <section class="featured-section" style="background-image:url(images/background/2.png)">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Featured Block-->
                <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="0ms">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-face-of-staring-dog"></span>
                            </div>
                            <h3><a href="#">we heal pets</a></h3>
                            <div class="text">quick veterinary services</div>
                        </div>
                    </div>
                </div>
                <!--Featured Block-->
                <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-dog-bone"></span>
                            </div>
                            <h3><a href="#">we care pets</a></h3>
                            <div class="text">pet sheltering & adoption</div>
                        </div>
                    </div>
                </div>
                <!--Featured Block-->
                <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-duration="2500ms" data-wow-delay="0ms">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon flaticon-pawprint-1"></span>
                            </div>
                            <h3><a href="#">we love pets</a></h3>
                            <div class="text">Show love & donate us</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Featured Section-->

    <!--Services Section-->
    <section class="services-section" style="background-image:url(images/resource/services-image-1.png)">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="separator">
                    <span class="icon flaticon-pawprint-1"></span>
                </div>
                <div class="title">Because We Really Care About Your Pets</div>
                <h2>Services of Pawrex</h2>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme">
                <div class="slide">
                    <!--Services Block-->
                    <div class="row">       
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-pet-grooming"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Grooming</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Block-->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-dog-1"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Adoption</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Block-->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-dog-1"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Training</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Block-->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-animal-1"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Vaccination</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <!--Services Block-->
                    <div class="row">
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-pet-grooming"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Grooming</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Block-->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-dog-1"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Adoption</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Block-->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-dog-1"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Training</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Block-->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-animal-1"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Vaccination</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <!--Services Block-->
                    <div class="row">
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-pet-grooming"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Grooming</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Block-->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-dog-1"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Adoption</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Block-->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-dog-1"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Training</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Block-->
                        <div class="services-block col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-animal-1"></span>
                                    </div>
                                    <h3><a href="services.html">Pet Vaccination</a></h3>
                                    <div class="text">Abore et dolore magna aliqua ut enim minim veniam quis nostrud
                                        exercitation ullamco laboris nisi aliquip eiusmod tempor incididunt labore.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section-->

    <!--Appointment Section-->
    <section class="appointment-section" style="background-image:url(images/background/3.png)">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title light centered">
                <div class="separator">
                    <span class="icon flaticon-pawprint-1"></span>
                </div>
                <div class="title">Because We Really Care About Your Pets</div>
                <h2>Get An Appointment</h2>
            </div>
            <!--Default Form-->
            <div class="default-form">
                <div class="form-box">
                    <form method="post" action="contact-form">
                        <div class="row clearfix">
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="text" name="name" value="" placeholder="Name" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="email" name="email" value="" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="text" name="phone" value="" placeholder="Phone #" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <span class="clock-icon"><span class="icon fa fa-calendar"></span></span>
                                <input class="datepicker" type="text" name="date" value="" placeholder="Date & Time"
                                    required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="text" name="category" value="" placeholder="Pet Category" required>
                            </div>
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <input type="text" name="service" value="" placeholder="Service Type" required>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <textarea placeholder="Your Comments..."></textarea>
                            </div>
                            <div class="form-group text-center col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" class="theme-btn btn-style-two">Send request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Default Form-->
        </div>
    </section>
    <!--End Appointment Section-->

    <!--Team Section-->
    <section class="team-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="separator">
                    <span class="icon flaticon-pawprint-1"></span>
                </div>
                <div class="title">Because We Really Care About Your Pets</div>
                <h2>Our Team Members</h2>
            </div>
            <div class="row clearfix">
                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="team-detail.html">
                                <img src="images/resource/team-1.jpg" alt="" />
                            </a>
                        </div>
                        <div class="lower-box">
                            <h3><a href="team-detail.html">Thomas Nick</a></h3>
                            <div class="designation">founder</div>
                            <div class="social-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="team-detail.html">
                                <img src="images/resource/team-2.jpg" alt="" />
                            </a>
                        </div>
                        <div class="lower-box">
                            <h3><a href="team-detail.html">James Harry</a></h3>
                            <div class="designation">pet lover</div>
                            <div class="social-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="team-detail.html">
                                <img src="images/resource/team-3.jpg" alt="" />
                            </a>
                        </div>
                        <div class="lower-box">
                            <h3><a href="team-detail.html">Lucy Anderson</a></h3>
                            <div class="designation">donator</div>
                            <div class="social-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="team-detail.html">
                                <img src="images/resource/team-4.jpg" alt="" />
                            </a>
                        </div>
                        <div class="lower-box">
                            <h3><a href="team-detail.html">Daniel Jacob</a></h3>
                            <div class="designation">pet Adopter</div>
                            <div class="social-box">
                                <ul class="social-icon-one">
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section-->

    <!--Counter Section-->
    <section class="counter-section">
        <div class="auto-container">
            <div class="image-layer" style="background-image:url(images/background/4.jpg)"></div>
            <h2><span>We Offers The Best</span>Pet Care Solutions</h2>
            <div class="counter-box">
                <div class="fact-counter">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-easter-bunny"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="748">0</span>
                                </div>
                                <h4 class="counter-title">Pet Adoptions</h4>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-award"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="120">0</span>
                                </div>
                                <h4 class="counter-title">Pet Awards</h4>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-brush"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="2000" data-stop="350">0</span>
                                </div>
                                <h4 class="counter-title">Pets Gromming</h4>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                            <div class="inner">
                                <div class="icon-box">
                                    <span class="icon flaticon-money-bag"></span>
                                </div>
                                <div class="count-outer count-box">
                                    <span class="count-text" data-speed="3000" data-stop="916">0</span>
                                </div>
                                <h4 class="counter-title">Our Donators</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Counter Section-->

    <!--Save Pets Section-->
    <section class="save-pets-section">
        <div class="auto-container">
            <h2>Help Us & Save More Pets</h2>
            <div class="text">More forwardly echidna outside tiger split thanks vibrantly gosh hence pangolin
                however notwithstanding <br> leapt untruthful gauchely yikes komodo successful concentrically dully
                more.</div>
            <div class="prices-block">
                <div class="row clearfix">
                    <!--Price Block-->
                    <div class="price-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h3>$35</h3>
                            <a href="#" class="theme-btn btn-style-three">For Pets Food</a>
                        </div>
                    </div>
                    <!--Price Block-->
                    <div class="price-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h3>$60</h3>
                            <a href="#" class="theme-btn btn-style-four">For Medicine</a>
                        </div>
                    </div>
                    <!--Price Block-->
                    <div class="price-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h3>$85</h3>
                            <a href="#" class="theme-btn btn-style-five">For Vet Visit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Save Pets Section-->

    <!--Fluid Section One-->
    <section class="fluid-section-one">
        <div class="outer-container clearfix">
            <!--Image Column-->
            <div class="image-column" style="background-image:url(images/resource/image-1.jpg);">
                <a class="overlay-box lightbox-image video-btn" href="https://www.youtube.com/watch?v=IcsQ4PfnqCo">
                    <span class="icon-box">
                        <span class="icon flaticon-play-button-1"></span>
                        Featured Video
                    </span>
                </a>
                <figure class="image-box"><img src="images/resource/image-1.jpg" alt=""></figure>
            </div>
            <!--Content Column-->
            <div class="content-column" style="background-image:url(images/resource/image-2.jpg)">
                <div class="inner-column">
                    <div class="featured-block-two">
                        <div class="featured-inner">
                            <div class="icon-box">
                                <span class="icon flaticon-dog"></span>
                            </div>
                            <h3>Largest non-profit pet’s shelter</h3>
                            <div class="text">Well gaudy hound hired inset flailed luxuriant much followed less this
                                maternal oh well unavoidable crudely aloof in more save groomed.</div>
                        </div>
                    </div>
                    <div class="featured-block-two">
                        <div class="featured-inner">
                            <div class="icon-box">
                                <span class="icon flaticon-animal"></span>
                            </div>
                            <h3>Convenient pet adoption for public </h3>
                            <div class="text">Well gaudy hound hired inset flailed luxuriant much followed less this
                                maternal oh well unavoidable crudely aloof in more save groomed.</div>
                        </div>
                    </div>
                    <div class="featured-block-two">
                        <div class="featured-inner">
                            <div class="icon-box">
                                <span class="icon flaticon-animals-1"></span>
                            </div>
                            <h3>Innovative ways to help animals</h3>
                            <div class="text">Well gaudy hound hired inset flailed luxuriant much followed less this
                                maternal oh well unavoidable crudely aloof in more save groomed.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fluid Section One-->

    <!--Testimonial Section-->
    <section class="testimonial-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="separator">
                    <span class="icon flaticon-pawprint-1"></span>
                </div>
                <div class="title">Because We Really Care About Your Pets</div>
                <h2>Read Testimonials</h2>
            </div>
            <div class="testimonials-item-carousel owl-carousel owl-theme">
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon">
                            <span class="icon flaticon-quotation-marks"></span>
                        </div>
                        <div class="text">And taped a amazingly lazily far gosh oh bald oh raffishly ouch ladybug
                            far that the and alas slapped alas far brusque pridefully kneeled python horse alas
                            sound because more prodigiously outgrew tortoise characteristic stupidly barring
                            therefore so sniffed before drank.</div>
                        <div class="author-image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="author-name">Tina Cambell</div>
                        <div class="designation">pet owner</div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon">
                            <span class="icon flaticon-quotation-marks"></span>
                        </div>
                        <div class="text">And taped a amazingly lazily far gosh oh bald oh raffishly ouch ladybug
                            far that the and alas slapped alas far brusque pridefully kneeled python horse alas
                            sound because more prodigiously outgrew tortoise characteristic stupidly barring
                            therefore so sniffed before drank.</div>
                        <div class="author-image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="author-name">Tina Cambell</div>
                        <div class="designation">pet owner</div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="quote-icon">
                            <span class="icon flaticon-quotation-marks"></span>
                        </div>
                        <div class="text">And taped a amazingly lazily far gosh oh bald oh raffishly ouch ladybug
                            far that the and alas slapped alas far brusque pridefully kneeled python horse alas
                            sound because more prodigiously outgrew tortoise characteristic stupidly barring
                            therefore so sniffed before drank.</div>
                        <div class="author-image">
                            <img src="images/resource/author-1.jpg" alt="" />
                        </div>
                        <div class="author-name">Tina Cambell</div>
                        <div class="designation">pet owner</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section-->
@endsection


