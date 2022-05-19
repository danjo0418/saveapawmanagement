@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Profile </title>@endsection
@section('page')
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Profile</h1>
                </div>
                <div class="pull-right">
                    
                </div>
            </div>
        </div>
    </section>
    <div class="auto-container mt-3">
        <section class="admin-wrapper">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="{{ URL::to('profile') }}">
                            {{ csrf_field() }}
                            <input  type="hidden" class="form-control" value="{{ Auth::user()->id }}" name="userid">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img id="imagePreview" class="img-fluid mt-3 users-profile" src="{{ asset('asset/images/users/thumb/'.Auth::user()->profile) }}" />
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-2form-group">
                                                <label for="">Profile: </label>
                                                <input type="file" class="form-control" accept="image/*" name="image" onchange="loadFile(event)">
                                                <small><i>Image file extention must be .jpg, .jpeg, .png, and .gif</i></small><br/>
                                                <small class="text-danger">{{ session('error')  }}</small>
                                           </div>
                                            <div class="mb-2 form-group">
                                                <label for="fname">First Name:</label>
                                                <input id="fname" type="text" class="form-control" name="fname" value="{{ Auth::user()->fname }}" required autofocus>
                                            </div>
                                            <div class="mb-2 form-group">
                                                <label for="mname">Middle Name:</label>
                                                <input id="mname" type="text" class="form-control" name="mname" value="{{ Auth::user()->mname }}" required autofocus>
                                            </div>
                                            <div class="mb-2 form-group">
                                                <label for="lname">Last Name:</label>
                                                <input id="lname" type="text" class="form-control" name="lname" value="{{ Auth::user()->lname }}" required autofocus>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2 form-group">
                                                <label for="address">Address:</label>
                                                <input id="address" type="text" class="form-control" name="address" value="{{ Auth::user()->address }}" required autofocus>
                                            </div>
                                            <div class="mb-2 form-group">
                                                <label for="gender">Gender:</label>
                                                <select  id="gender" class="form-control" name="gender"  required autofocus>
                                                    <option value="male" {{ Auth::user()->gender == "male" ? 'selected':'' }}>Male</option>
                                                    <option value="female" {{ Auth::user()->gender == "female" ? 'selected':'' }}>Female</option>
                                                </select>
                                            </div>

                                            <div class="mb-2 form-group">
                                                <label for="birthday">Birthday:</label>
                                                <input id="birthday" type="date" class="form-control" name="birthday" value="{{ Auth::user()->birthday }}"  required>
                                            </div>

                                            <div class="mb-2 form-group">
                                                <label for="contact">Contact No.:</label>
                                                <input id="contact" minlength="6" type="text" class="form-control" name="contact" value="{{ Auth::user()->contact }}" required autofocus>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection