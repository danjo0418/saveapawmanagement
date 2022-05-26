@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Blog Form </title>@endsection
@section('page')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Blog Form</h1>
                </div>
                <div class="pull-right">

                </div>
            </div>
        </div>
    </section>

    <div class="auto-container mt-5">
        <div class="clearfix">
           <div class="container">
               <a href="{{ URL::to('blogs') }}" class="text-primary"><i class="fa fa-angle-left"></i> Go to Blogs</a>

                <div class="card">
                    <div class="card-body">
                       <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ URL::to('blogCreate') }}">
                           {{ csrf_field() }}
                           <div class="row">
                               <div class="col-md-5 text-center">
                                   <img id="imagePreview" class="img-fluid mt-3" src="{{ asset('asset/images/pets/pet-avatar.png') }}" />
                               </div>
                               <div class="col-md-6">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="userid">
                                   <div class="form-group">
                                        <label for="">Photo: </label>
                                        <input type="file" class="form-control" accept="image/*" name="image" onchange="loadFile(event)" required>
                                        <small><i>Image file extention must be .jpg, .jpeg, .png, and .gif</i></small><br/>
                                        <small class="text-danger"><i>{{ session('error') }}</i></small>
                                   </div>
                                   <div class="form-group mb-3">
                                        <label for="title">Title</label>
                                        <input id="title"  type="text" class="form-control" name="title">
                                   </div>

                                   <div class="form-group mb-3">
                                        <label for="description">Description</label>
                                        <textarea id="description" class="form-control" name="description" rows="9"></textarea>
                                   </div>
                                   <button class="btn btn-warning"><i class="fa fa-rss"></i> Post</button>
                               </div>
                           </div>
                       </form>
                   </div>
                </div>
           </div>
        </div>
    </div>



@endsection