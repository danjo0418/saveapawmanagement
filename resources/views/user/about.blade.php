@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | About Us </title>@endsection
@section('page')
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>About Us</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="">Home</a></li>
                        <li>About me</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="about-style-two section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="about-img"><img src="{{  asset('asset/images/resource/welcome.jpg') }}" alt="Awesome Image"></div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-style-one-content">
                        <!--Sec Title-->
                        <div class="sec-title centered">
                            <div class="separator">
                                <span class="icon flaticon-pawprint-1"></span>
                            </div>
                            <div class="title">Because We Really Care About Your Pets</div>
                            <h2>Welcome to Save A Paw</h2>
                        </div>
                        <p class="special">Leverage agile frameworks to <span class="highlight">provide a robust synopsis</span> for high level overviews. Iterative approaches to corporate </p>
                        <p>strategy foster collaborative thinking to further the overall value the proposition. Organically grow the holistic world view of disruptive innovation via workplace </p>
                        <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud </p>
                        <a href="#" class="theme-btn btn-style-two thm-btn">Read More</a>
                    </div><!-- /.about-style-one-content -->
                </div>
            </div>
        </div>
    </section>

    <section class="about-faq-section gray-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="accrodion-grp" data-grp-name="faq-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>Our Mission</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Everage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple </p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Our Vision</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Everage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple </p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Values</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Everage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple </p>
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>New Anouncement</h4>
                            </div>
                            <div class="accrodion-content">
                                <p>Everage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple </p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-faq-section -->

    <section class="what-we-offer section-padding">
        <div class="container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="separator">
                    <span class="icon flaticon-pawprint-1"></span>
                </div>
                <div class="title">Because We Really Care About Your Pets</div>
                <h2>Welcome to Pawrex</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-what-we-offer hvr-bounce-to-bottom p-3">
                        <i class="icon flaticon-face-of-staring-dog"></i>
                        <h3>Adopt</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="" class="read-more"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-what-we-offer hvr-bounce-to-bottom p-3">
                        <i class="icon flaticon-dog-bone"></i>
                        <h3>Lost and Found</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="" class="read-more"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-what-we-offer hvr-bounce-to-bottom p-3">
                        <i class="icon flaticon-pawprint-1"></i>
                        <h3>Blog</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. </p>
                        <a href="" class="read-more"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection