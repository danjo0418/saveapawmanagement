@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Claim Request</title>@endsection
@section('page')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Claim Request</h1>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

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
                                <input type="date" class="form-control" value="{{ request()->get('filter') }}" name="filter">
                                <button class="btn btn-outline-secondary" id="button-addon1"><i class="fa fa-search"></i></button>
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
                @if(count($claims) > 0)
                    @foreach($claims as $claim)
                        <div class="section-content mt-3 mb-5">
                            <div class="schedule-box maxwidth500 event-list clearfix mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h3 class="title mt-0"><a href="">Pet Details:</a></h3>
                                        <div class="thumb text-center">
                                            <img class="img-fullwidth"  src="{{ asset('asset/images/pets/thumb/'.$claim->pet->filename) }}">
                                        </div>
                                        <h5>{{ ucfirst($claim->pet->name) }}</h5>
                                        <p><strong>Description:</strong> <br/> {{ $claim->pet->description }}</p>
                                        <ul>
                                            <li><i class="fa fa-paw"></i> Age: {{ $claim->pet->age }}</li>
                                            <li><i class="fa fa-paw"></i> Gender:  {{ $claim->pet->gender}}</li>
                                            <li><i class="fa fa-paw"></i> Color: {{ $claim->pet->color }}</li>
                                            <li><i class="fa fa-paw"></i> Breed:  {{ $claim->pet->breed }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="schedule-details clearfix p-15 pt-30">
                                            <div class="text-center pull-left flip bg-theme-colored p-10 pt-5 pb-5 mr-10">
                                                <ul>
                                                    <li class="font-24 text-white font-weight-600 border-bottom ">
                                                        {{ date('d', strtotime($claim->created_at)) }}
                                                    </li>
                                                    <li class="font-18 text-white text-uppercase">
                                                        {{ date('M', strtotime($claim->created_at)) }}
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3 class="title mt-0"><a href="javascript:void(0)">Claim Request</a></h3>
                                            <ul class="list-inline text-gray">
                                                <li>
                                                    <i class="fa fa-calendar"></i>
                                                    {{ date('l h:i A', strtotime($claim->created_at)) }}
                                                </li>
                                            </ul>

                                            <div class="clearfix"></div>

                                            <h3 class="title mt-0"><a href="javascript:void(0)">Photo of Lost Pet:</a></h3>
                                            <div class="thumb">
                                                <img class="img-fullwidth"  src="{{ asset('asset/images/lost/'.$claim->filename) }}">
                                            </div>

                                            <h3 class="title mt-0"><a href="javascript:void(0)">Request By:</a></h3>
                                            <div class="event-text">
                                                <p class="m-0" style="font-size: 20px;"><strong>{{ ucfirst($claim->user->fname).' '.ucfirst($claim->user->lname) }}</strong></p>
                                                <p class="m-0"><i class="fa fa-map-marker"></i> {{ $claim->user->address }}</p>
                                                <small><i class="fa fa-envelope-o"></i> {{ $claim->user->email }}</small> <br/>
                                                <small><i class="fa fa-phone"></i> {{ $claim->user->contact }}</small>
                                            </div>

                                            <h3 class="title mt-0"><a href="javascript:void(0)">Witness Details:</a></h3>
                                            <p class="event-text">
                                                Name: {{ $claim->witness_email }}<br>
                                                Email: {{ $claim->witness_name }}<br>
                                                Contact: {{ $claim->witness_contact }}<br>
                                            </p>


                                            <div class="mt-10">
                                                <a href="javascript:void(0)" class="btn btn-success">
                                                    <i class="fa fa-check"></i> 
                                                    Claim Approved
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-danger">
                                                    Declined
                                                </a>
                                            </div>
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

                <nav aria-label="Page navigation example">
                    {{ $claims->links() }}
                </nav>
            </div>
        </section>
    </div>


@endsection