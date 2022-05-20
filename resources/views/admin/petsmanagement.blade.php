@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Pets Management </title>@endsection
@section('page')

    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Pets Management</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="{{ URL::to('admin/pets-verification') }}">Verify Pets <span class="badge badge-danger">{{ $count }}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="auto-container mt-5">
        <div class="clearfix">
            <section class="buttons">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <a href="{{ URL::to('admin/pets-form') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Add Pet
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <form class="form-inline">
                                <div class="input-group mb-3">
                                    <select class="form-control" name="status">
                                        <option disabled selected>-- View Pet by Status --</option>
                                        <option value="adopt" {{ request()->get('status') == 'adopt' ? 'selected':'' }}>Adopt</option>
                                        <option value="lostandfound" {{ request()->get('status') == 'lostandfound' ? 'selected':'' }}>Lost and Found</option>
                                    </select>
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
            <section class="brows-job-category mt-3">
                <div class="container">
                    <p><i>List of Approved pets</i></p>
                    @if(count($management) > 0)
                        @foreach($management as $pet)
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
                                                    <div class="col-lg-12 pe-5">
                                                        <small class="text-primary">Posted By: {{ $pet->user->fname.' '.$pet->user->lname }}</small>
                                                        <small class="float-end text-primary">Date: {{ date('M d, Y', strtotime($pet->created_at)) }}</small>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="brows-job-position">
                                                            <h3>{{ $pet->name }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="brows-job-position">
                                                            <p>
                                                                <span class="fa fa-paw"></span> Age: {{ $pet->age }} <br/>
                                                                <span class="fa fa-paw"></span> Gender: {{ $pet->gender }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="brows-job-position">
                                                            <p>
                                                                <span class="fa fa-paw"></span> Breed: {{ $pet->breed }} <br/>
                                                                <span class="fa fa-paw"></span> Color: {{ $pet->color }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="brows-job-type text-center">
                                                            @if($pet->status == 'adopt')
                                                                <span class="full-time">Adopt</span>
                                                            @else
                                                                <span class="enternship">Lost and Found</span>
                                                            @endif
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
                        {{ $management->links() }}
                    </nav>
                </div>
            </section>

        </div>
    </div>
@endsection