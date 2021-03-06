@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Pets Verification </title>@endsection
@section('page')

    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Pets Verification</h1>
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
                        <a href="{{ URL::to('admin/pets-verification') }}" class="btn btn-primary"><span class="fa fa-refresh"></span></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix">
            
            <section class="brows-job-category mt-3">
                <div class="container">
                    @if(count($verify) > 0)
                        @foreach($verify as $pet)
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

                                                            <small><i class="text-secondary"> Click this box to check all information about this pet.</i></small> <br/>

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
                    @else
                        <div class="text-center">
                            <h1><i class="fa fa-paw"></i></h1>
                            <h2><strong>NO DATA FOUND</strong></h2>
                        </div>
                    @endif


                    <nav aria-label="Page navigation example">
                        {{ $verify->links() }}
                    </nav>
                </div>
            </section>

        </div>
    </div>
@endsection