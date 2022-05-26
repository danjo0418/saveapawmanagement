@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Blogs Details</title>@endsection
@section('page')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Blog Details</h1>
                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-single padding-right">
                        <div class="inner-box">
                            
                            <div class="mb-4">
                                <a href="{{ URL::to('blogs') }}"><i class="fa fa-angle-left"></i> Go to Blogs</a>
                                @if($detail->user_id == Auth::user()->id)
                                    <a href="javascript:void(0)" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#update"><i class="fa fa-pencil-square-o"></i> Update</a>
                                 @endif
                            </div>
                           
                            <div class="image">
                                <img src="{{ asset('asset/images/blogs/'.$detail->filename) }}" alt="">
                            </div>
                            <div class="lower-content">
                                <div class="title-box">
                                    <div class="date-box">
                                        {{ date('d', strtotime($detail->created_at)) }}  
                                        <span><span>{{ date('M', strtotime($detail->created_at)) }}</span></span>
                                    </div>
                                    <h3>{{ $detail->title }}</h3>
                                    <ul class="post-meta">
                                        <li>Posted By: {{ ucfirst($detail->user->fname).' '.ucfirst($detail->user->lname) }}</li>
                                        <li><span class="fa fa-calendar"></span> {{ date('M d, Y',strtotime($detail->created_at)) }}</li>
                                        <li>
                                            {{ App\Modules\Helpers::countComments($detail->id) }}
                                            @if(App\Modules\Helpers::countComments($detail->id) >= 2)
                                                Comments
                                            @else
                                                Comment
                                            @endif
                                        </li>
                                        {{-- <li><span class="icon fa fa-heart"></span> 196</li> --}}
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>{{ $detail->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <!--Comments Area-->
                    <div class="comments-area">
                        <div class="group-title">
                            <h2>Comments</h2>
                        </div>
                        <div class="js_comments_wrapper">
                            
                        </div>
                        {{-- @if(count($detail->comments) > 0)
                            @foreach($detail->comments as $comment)
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb">
                                            <img src="{{ asset('asset/images/users/thumb/'.$comment->owner->profile) }}" alt="">
                                        </div>
                                        <div class="comment-inner">
                                            <div class="comment-info clearfix">
                                                <strong>{{ ucfirst($comment->owner->fname).' '.ucfirst($comment->owner->lname) }}</strong>
                                                <div class="comment-time">{{ date('M d, Y', strtotime($comment->created_at)) }}  </div>
                                            </div>
                                            <div class="text">{{ $comment->message }}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center">
                                <p>NO DATA FOUND</p>
                            </div>
                        @endif --}}

                    </div>
                    <!--End Comments Area-->

                    <!-- Comment Form -->
                    <div class="comment-form">
                        <div class="group-title">
                            <h2>Leave Reply</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-2 text-center">
                                <div class="user-com">
                                    <img src="{{ asset('asset/images/users/thumb/'.Auth::user()->profile) }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <form id="js-comment-form">
                                    @csrf
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="userid">
                                    <input type="hidden" value="{{ $detail->id }}" name="blogid">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <textarea class="js-message" name="message" placeholder="Hi! {{ Auth::user()->fname }}'s you can write your comments here."></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                            <button class="theme-btn btn-style-four" type="submit" name="submit-form">leave
                                                a comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <aside class="sidebar">

                            <!--Blog Category Widget-->
                            <div class="sidebar-widget sidebar-blog-category">
                                <div class="sidebar-title">
                                    <h2>MENU</h2>
                                </div>
                                <ul class="cat-list">
                                    <li><a href="{{ URL::to('blogs') }}">Blogs</a></li>
                                    <li><a href="{{ URL::to('myblogs') }}">My Blogs</a></li>
                                    <li><a href="{{ URL::to('blog-form') }}">Post Blog</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
            </div>
        </div>
    </div>

    @include('modal.blog.update')
@endsection

@section('script')
    <script>

        function commentsView() {

            let blogid = {{ request()->segment(2) }};
            let html;

            $.get(BASE_URL+'/comments/'+blogid, function(response) {
                $.each(response, function(index, data) {
                    html+="<div class='comment-box'>";
                        html+="<div class='comment'>";
                            html+="<div class='author-thumb'>";
                                html+="<img src='"+BASE_URL+"/asset/images/users/thumb/"+data.owner.profile+"' alt=''>";
                            html+="</div>";
                            html+="<div class='comment-inner'>";
                                html+="<div class='comment-info clearfix'>";
                                    html+="<strong>"+data.owner.fname+" "+data.owner.lname+"</strong>";
                                    html+="<div class='comment-time'>"+data.created_at+"</div>";
                                html+="</div>";
                                html+="<div class='text'>"+data.message+"</div>";
                            html+="</div>";
                        html+="</div>";
                    html+="</div>";
                });

                $('.js_comments_wrapper').html(html);
            });
        }

        $(document).ready(function(){

            setTimeout(function() { 
                commentsView();
            }, 100);

            $('#js-comment-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: BASE_URL+'/leavecomment',
                    type: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success:function(response) {
                      console.log(response.status);

                        if(response.status == 'success') {
                            commentsView();
                            $('.js-message').val('');
                        }
                    }
                });
            });


        });

    </script>
@endsection


