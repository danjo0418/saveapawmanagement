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
            <a href="{{ URL::to('blog-form') }}" class="btn btn-warning"><i class="fa fa-plus"></i> Post Blog</a>
            <div class="row clearfix mt-3">
                 @if(count($blogs) > 0)
                    @foreach($blogs as $blog)
                        <div class='news-block-two col-md-4 col-sm-6 col-xs-12'>
                            <div class='inner-box'>
                                <div class='image'>
                                    <img src='{{ asset('asset/images/blogs/'.$blog->filename) }}' alt=''>
                                    <div class='post-date'>
                                        {{ date('d', strtotime($blog->created_at)) }} 
                                        <span>{{ date('M', strtotime($blog->created_at)) }}</span>
                                    </div>
                                </div>
                                <div class='lower-content'>
                                    <small>Posted By:</small>
                                    <ul class='post-meta'>
                                        <li>{{ ucfirst($blog->user->fname).' '.ucfirst($blog->user->lname) }}</li>
                                        <li><span class="fa fa-calendar"></span> {{ date('M d, Y',strtotime($blog->created_at)) }}</li>
                                        <li>
                                            {{ App\Modules\Helpers::countComments($blog->id) }}

                                            @if(App\Modules\Helpers::countComments($blog->id) >= 2)
                                                Comments
                                            @else
                                                Comment
                                            @endif
                                        </li>
                                        {{-- <li><span class='icon fa fa-heart'></span> 196</li> --}}
                                    </ul>
                                    <h3><a href="{{ URL::to('blogs/'.$blog->id) }}">{{ $blog->title }}</a></h3>
                                    <div class='text'>{{ str_limit($blog->description, 200)  }}.</div>
                                    <a href='{{ URL::to('blogs/'.$blog->id) }}' class='theme-btn btn-style-eight'>read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center">
                        <h1><i class="fa fa-paw"></i></h1>
                        <h2><strong>NO DATA FOUND</strong></h2>
                    </div>
                @endif

                <nav aria-label="Page navigation example">
                    {{ $blogs->links() }}
                </nav>
            </div>
        </div>
    </section>



@endsection