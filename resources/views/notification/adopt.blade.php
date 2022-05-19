@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Adoption Request </title>@endsection
@section('page')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Adoption Request</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="auto-container mt-5">

        <a href="{{ URL::to('admin/pets-management') }}" class="text-primary"><i class="fa fa-angle-left"></i> Go to Pets Management</a>

        <section class="buttons mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="col-md-5">
                            <form class="form-inline">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search by user request" name="q">
                                    <button class="btn btn-outline-secondary" id="button-addon1"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <form class="form-inline">
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" name="date">
                                <button class="btn btn-outline-secondary" id="button-addon1">Find</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-1">
                        <a href="{{ URL::to('admin/pets-management') }}" class="btn btn-primary"><span class="fa fa-refresh"></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-content mt-3">
                    <div class="schedule-box maxwidth500 event-list clearfix mb-30">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="title mt-0"><a href="">Pet Details:</a></h3>
                                <div class="thumb text-center">
                                    <img class="img-fullwidth"  src="{{ asset('asset/images/pets/thumb/1652834282bulldog.jpg') }}">
                                </div>
                                <h5>Name</h5>
                                <p><strong>Description:</strong> <br/> Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel velit, modi a, iste dolor consequuntur dolorum facere quod dolorem, eaque voluptatem. Magnam magni qui sapiente perferendis nam eius nostrum voluptatibus?</p>
                                <ul>
                                    <li><i class="fa fa-paw"></i> Age: </li>
                                    <li><i class="fa fa-paw"></i> Gender: </li>
                                    <li><i class="fa fa-paw"></i> Color: </li>
                                    <li><i class="fa fa-paw"></i> Breed: </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="schedule-details clearfix p-15 pt-30">
                                    <div class="text-center pull-left flip bg-theme-colored p-10 pt-5 pb-5 mr-10">
                                        <ul>
                                            <li class="font-24 text-white font-weight-600 border-bottom ">28</li>
                                            <li class="font-18 text-white text-uppercase">Feb</li>
                                        </ul>
                                    </div>
                                    <h3 class="title mt-0"><a href="">Adoption Request</a></h3>
                                    <ul class="list-inline text-gray">
                                        <li><i class="fa fa-calendar"></i> Sundat at 9:30PM</li>
                                    </ul>

                                    <div class="clearfix"></div>

                                    <h3 class="title mt-0"><a href="">Request By:</a></h3>
                                    <div class="event-text">
                                        <p class="m-0" style="font-size: 20px;"><strong>Renan Escabas</strong></p>
                                        <p class="m-0">Poblacion Cordova</p>
                                        <small>enan@gmail.com</small> <br/>
                                        <small>093123</small>
                                    </div>

                                    <h3 class="title mt-0"><a href="">Reasons:</a></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut error impedit fugit praesentium vero earum laudantium nulla. Cumque, nulla, commodi? Alias blanditiis fugiat dolore nesciunt expedita non sequi delectus maxime.</p>

                                    <h3 class="title mt-0"><a href="">Identification:</a></h3>
                                    <div class="thumb">
                                        <img  src="{{ asset('asset/images/valid/placeholder.png') }}" style="width:300px; height:auto;">
                                    </div>
                                    <p class="event-text">
                                        Type: <br>
                                        Number: <br>
                                    </p>


                                    <div class="mt-10">
                                        <a href="" class="btn btn-success">
                                            <i class="fa fa-check"></i> Adopt
                                        </a>
                                        <a href="" class="btn btn-danger">
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection