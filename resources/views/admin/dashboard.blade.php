@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Dashboard</title>@endsection
@section('page')

    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Dashboard</h1>
                </div>
                <div class="pull-right">
                    
                </div>
            </div>
        </div>
    </section>
    <div class="auto-container mt-5">
        <div class="row clearfix">
            <!--Featured Block-->
            <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms;">
                    <a href="{{ URL::to('blogs') }}">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon fa fa-rss"></span>
                            </div>
                            <h2>0</h2>
                            <div class="text">Blogs Posted</div>
                        </div>
                    </a>
                </div>
            </div>

            <!--Featured Block-->
            <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 500ms; animation-delay: 0ms;">
                    <a href="{{ URL::to('admin/users-management') }}">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon fa fa-users"></span>
                            </div>
                            <h2>{{ $users }}<h2>
                            <div class="text">Happy Users</div>
                        </div>
                    </a>
                </div>
            </div>

            <!--Featured Block-->
            <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-duration="2500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 0ms;">
                    <a href="{{ URL::to('admin/pets-verification') }}">
                        <div class="content">
                            <div class="icon-box">
                                <span class="icon fa fa-paw"></span>
                            </div>
                            <h2>{{ $pets }}</h2>
                            <div class="text">Pending Pets</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <h2 class="mt-5">Latest Pending Pets</h2>
        <div class="container">
            @foreach($pendings as $pet)
                <a href="{{ URL::to('admin/pet-detail/'.$pet->id) }}" class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="row">
                                <div class="col-lg-2 text-center small-padding">
                                    <div class="brows-job-company-img">
                                        <img src="{{ asset('asset/images/pets/thumb/'.$pet->filename) }}" class="img-responsive circle" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-10 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="brows-job-position">
                                                <small class="text-primary">Posted By: {{ $pet->user->fname.' '.$pet->user->lname }} </small>
                                                <small class="text-primary float-end">Date: {{ date('M d, Y', strtotime($pet->created_at)) }}</small>

                                                <h3>{{ $pet->name }}</h3>
                                                <small>
                                                    @if($pet->status == 'adopt')
                                                        <span class="text-success">Adopt</span>
                                                    @else
                                                        <span class="text-danger">Lost and Found</span>
                                                    @endif
                                                </small>

                                                <p>{{ $pet->description }}</p>

                                                <span><strong class="text-warning">Pending</strong></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>     
                            </div>
                        </div>
                    </article>
                </a>
            @endforeach
        </div>
    </div>
@endsection