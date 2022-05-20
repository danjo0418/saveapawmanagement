@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} </title>@endsection
@section('page')

    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Pet Forms</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="auto-container mt-5">
        <div class="clearfix">
           <div class="container">
               <a href="{{ url()->previous() }}" class="text-primary"><i class="fa fa-angle-left"></i> Back to Previous</a>

                @if(session('success'))
                    <div class="alert alert-success text-center" role="alert">
                        <i><a href="{{ URL::to('mypets') }}">Click Here !</a> to see the status of your post.</i>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                       <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ URL::to('petCreate') }}">
                           {{ csrf_field() }}
                           <div class="row">
                               <div class="col-md-5 text-center">
                                   <img id="imagePreview" class="img-fluid mt-3" src="{{ asset('asset/images/pets/pet-avatar.png') }}" />
                               </div>
                               <div class="col-md-6">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="userid">
                                    <input type="hidden" value="0" name="is_approved">
                                   <div class="form-group">
                                        <label for="">Pet: </label>
                                        <input type="file" class="form-control" accept="image/*" name="image" onchange="loadFile(event)" required>
                                        <small><i>Image file extention must be .jpg, .jpeg, .png, and .gif</i></small><br/>
                                        <small class="text-danger"><i>{{ session('error') }}</i></small>
                                   </div>
                                   <div class="form-group mt-3">
                                       <label for="status">Status: </label>
                                       <select id="status" class="form-control" name="status" required>
                                           <option selected disabled>-- Select Status --</option>
                                           <option value="adopt">Adopt</option>
                                           <option value="lostandfound">Lost and Found</option>
                                       </select>
                                   </div>
                                   <div class="form-group">
                                        <label for="name">Name: </label>
                                        <input id="name" type="text" class="form-control" name="name">
                                   </div>
                                   <div class="form-group">
                                        <label for="breed">Breed: </label>
                                        <input id="breed" type="text" class="form-control" name="breed" required>
                                   </div>
                                   <div class="form-group">
                                        <label for="color">Color: </label>
                                        <input id="color" type="text" class="form-control" name="color" required>
                                   </div>
                                   <div class="form-group">
                                        <label for="gender">Gender: </label>
                                        <select id="gender" class="form-control" name="gender" required>
                                            <option disabled selected>-- Select Gender --</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                   </div>
                                   <div class="form-group">
                                        <label for="age">Age: </label>
                                        <input id="age"  type="text" class="form-control" name="age">
                                   </div>
                                   <div class="form-group mb-3">
                                        <label for="description">Description</label>
                                        <textarea id="description" class="form-control" name="description" rows="5"></textarea>
                                   </div>

                                   <button class="btn btn-warning"><i class="fa fa-paw"></i> Submit</button>
                               </div>
                           </div>
                       </form>
                   </div>
                </div>
           </div>
        </div>
    </div>
@endsection