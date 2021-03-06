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
                            <h2>All passion.<span>All pets.</span></h2>
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
                            <div class="text">A pet is a domesticated animal that lives with people, but is not forced to work and is not eaten, in most instances. In most cases, a pet is kept to entertain people or for companionship.</div>
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
                           <!--  <div class="btns-box">
                                <a href="contact.html" class="theme-btn btn-style-two">Book Appointment</a>
                            </div> -->
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
                <!-- <div class="title">Because We Really Care About Your Pets</div> -->
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
                            <p>Save A Paw manages animal adoption facilities in three locations (Cordova, Lapu Lapu, and Mandaue).Save A Paw operates with a life-saving philosophy to provide care for healthy, adoptable pets until they are placed into permanent, suitable homes regardless of time or space constraints. Save a Paw also operates two retail locations that helps raise funds, but donations are vital to maintaining the current level of care for homeless cats and dogs, and to support low-income pet owners. There are many ways to donate and your help is always greatly appreciated.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


