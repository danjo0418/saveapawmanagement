@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Users Management </title>@endsection
@section('page')
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Users Management</h1>
                </div>
                <div class="pull-right">
                    <ul class="page-breadcrumb">
                        <li><a href="{{ URL::to('admin/users-verification') }}">Verify Users<span class="badge badge-danger">{{ $countUnapproved }}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="auto-container mt-3">
        <div class="clearfix">
            <section class="buttons">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <a href="{{ URL::to('admin/users-form') }}" class="btn btn-primary">
                                <i class="fa fa-plus"></i> Add Admin
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <form class="form-inline">
                                <div class="input-group mb-3">
                                    <select class="form-control" name="status">
                                        <option disabled selected>-- View Users by Status --</option>
                                        <option value="active" {{ request()->get('status') == 'active' ? 'selected':'' }}>Active</option>
                                        <option value="inactive" {{ request()->get('status') == 'inactive' ? 'selected':'' }}>Inactive</option>
                                    </select>
                                    <button class="btn btn-outline-secondary" id="button-addon1">Find</button>
                                </div>

                            </form>
                        </div>
                        <div class="col-lg-1">
                            <a href="{{ URL::to('admin/users-management') }}" class="btn btn-primary"><span class="fa fa-refresh"></span></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="brows-job-category mt-3">
                <div class="container">
                    @if(count($users) > 0)
                        @foreach($users as $user)
                            @if($user->id != Auth::user()->id)
                                <a href="{{ URL::to('admin/users-detail/'.$user->id) }}">
                                    <article>
                                        <div class="brows-job-list">
                                            <div class="row">
                                                <div class="col-lg-2 small-padding text-center">
                                                    <div class="brows-job-company-img"><img src="{{ asset('asset/images/users/thumb/'.$user->profile) }}" class="img-responsive" alt=""></div>
                                                </div>
                                                <div class="col-lg-10">
                                                    <div class="row">
                                                        <div class="col-lg-11 mb-3">
                                                            <div class="brows-job-position">
                                                                <h3 class="mb-0">{{ $user->fname.' '.$user->mname.' '.$user->lname }}</h3>
                                                                <span class="text-secondary"><i class="fa fa-map-marker"></i> {{ $user->address }}</span><br/>
                                                                <small class="label text-primary">
                                                                    @if($user->role_id == 1)
                                                                        Administrator
                                                                    @else
                                                                        Users
                                                                    @endif
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <p class="text-center">
                                                                <i class="fa fa-circle {{ $user->status == 'active' ? "text-success":"text-danger" }}"></i>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            @endif
                        @endforeach
                    @else
                        <div class="text-center">
                            <h1><i class="fa fa-paw"></i></h1>
                            <h2><strong>NO DATA FOUND</strong></h2>
                        </div>
                    @endif

                    <nav aria-label="Page navigation example">
                        {{ $users->links() }}
                    </nav>
                </div>
            </section>
        </div>
    </div>
@endsection