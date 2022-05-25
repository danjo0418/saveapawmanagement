@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Blogs </title>@endsection
@section('page')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Blogs</h1>
                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <section class="blog-page-section">
        <div class="auto-container">
            <div class="row clearfix">
                @foreach($blogs as $blog)
                    <div class='news-block-two col-md-4 col-sm-6 col-xs-12'>
                        <div class='inner-box'>
                            <div class='image'>
                                <img src='{{ asset('asset/images/blogs/'.$blog->filename) }}' alt=''>
                                <div class='post-date'>{{ date('d', strtotime($blog->created_at)) }} <span>{{ date('M', strtotime($blog->created_at)) }}</span></div>
                            </div>
                            <div class='lower-content'>
                                <ul class='post-meta'>
                                    <li>Pet Care</li>
                                    <li>20 Comments</li>
                                    {{-- <li><span class='icon fa fa-heart'></span> 196</li> --}}
                                </ul>
                                <h3><a href="{{ URL::to('blogs/'.$blog->id) }}">{{ $blog->title }}</a></h3>
                                <div class='text'>{{ str_limit($blog->description, 300)  }}.</div>
                                <a href='{{ URL::to('blogs/'.$blog->id) }}' class='theme-btn btn-style-eight'>read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection