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
                        {{-- <div class="col-md-5">
                            <form class="form-inline">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search by user request" name="q">
                                    <button class="btn btn-outline-secondary" id="button-addon1"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                    <div class="col-lg-3">
                        <form class="form-inline">
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" name="filter">
                                <button class="btn btn-outline-secondary" id="button-addon1"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-1">
                        <a href="{{ URL::to('admin/adopt-pets') }}" class="btn btn-primary"><span class="fa fa-refresh"></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-content mt-3">
                    @if(count($adopts) > 0)
                        @foreach($adopts as $adopt)
                            <div class="schedule-box maxwidth500 event-list clearfix mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="title mt-0"><a href="">Pet Details:</a></h3>
                                        <div class="thumb text-center">
                                            <img class="img-fullwidth"  src="{{ asset('asset/images/pets/thumb/'.$adopt->pet->filename) }}">
                                        </div>
                                        <h5>{{ ucfirst($adopt->pet->name) }}</h5>
                                        <p><strong>Description:</strong> <br/> {{ $adopt->pet->description }}</p>
                                        <ul>
                                            <li><i class="fa fa-paw"></i> Age: {{ $adopt->pet->age }}</li>
                                            <li><i class="fa fa-paw"></i> Gender:  {{ $adopt->pet->gender}}</li>
                                            <li><i class="fa fa-paw"></i> Color: {{ $adopt->pet->color }}</li>
                                            <li><i class="fa fa-paw"></i> Breed:  {{ $adopt->pet->breed }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="schedule-details clearfix p-15 pt-30">
                                            <div class="text-center pull-left flip bg-theme-colored p-10 pt-5 pb-5 mr-10">
                                                <ul>
                                                    <li class="font-24 text-white font-weight-600 border-bottom ">
                                                        {{ date('d', strtotime($adopt->created_at)) }}
                                                    </li>
                                                    <li class="font-18 text-white text-uppercase">
                                                        {{ date('M', strtotime($adopt->created_at)) }}
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title mt-0"><a href="javascript:void(0)">Adoption Request</a></h3>
                                            <ul class="list-inline text-gray">
                                                <li>
                                                    <i class="fa fa-calendar"></i> 
                                                    {{ date('l h:i A', strtotime($adopt->created_at)) }}
                                                </li>
                                            </ul>

                                            <div class="clearfix"></div>
                                            <h3 class="title mt-0"><a href="javascript:void(0)">Request By:</a></h3>
                                            <div class="event-text">
                                                <p class="m-0" style="font-size: 20px;"><strong>{{ ucfirst($adopt->user->fname).' '.ucfirst($adopt->user->lname) }}</strong></p>
                                                <p class="m-0"><i class="fa fa-map-marker"></i> {{ $adopt->user->address }}</p>
                                                <small><i class="fa fa-envelope-o"></i> {{ $adopt->user->email }}</small> <br/>
                                                <small><i class="fa fa-phone"></i> {{ $adopt->user->contact }}</small>
                                            </div>

                                            <h3 class="title mt-0"><a href="javascript:void(0)">Reasons:</a></h3>
                                            <p>{{ $adopt->reason }}</p>

                                            <h3 class="title mt-0"><a href="javascript:void(0)">Identification:</a></h3>
                                            <div class="thumb">
                                                <img  src="{{ asset('asset/images/valid/'.$adopt->filename) }}" style="width:300px; height:auto;">
                                            </div>
                                            <p class="event-text">
                                                Type: {{ $adopt->id_type }}<br>
                                                Number: <span class="text-primary">{{ $adopt->id_no }}</span><br>
                                            </p>


                                            <div class="mt-10">
                                                <a href="javascript:void(0)" class="btn btn-success">
                                                    <i class="fa fa-check"></i> 
                                                    Adopt Approved
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-danger">
                                                    Declined
                                                </a>
                                            </div>
                                        </div>
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
                </div>
            </div>
        </section>
    </div>

@endsection