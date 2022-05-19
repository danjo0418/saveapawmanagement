@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | User Details </title>@endsection
@section('page')
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>User Details</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <a href="{{ URL::to('admin/users-management') }}" class="text-primary"><i class="fa fa-angle-left"></i> Go to User Management</a>
                <section class="detail-desc mt-3">
                    <div class="container white-shadow {{ $details->status == 'inactive' ? "border border-danger":"" }}">
                        <div class="row bottom-mrg">
                            <div class="col-md-8 col-sm-8">
                                <div class="detail-desc-caption">
                                    <h4>{{ ucfirst($details->fname).' '.ucfirst($details->mname).' '.ucfirst($details->lname) }}</h4>

                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> {{ $details->address }}</li>
                                        <li><i class="fa fa-envelope"></i> {{ $details->email }}</li>
                                        <li><i class="fa fa-phone"></i> {{ $details->contact }}</li>
                                        <li><i class="fa fa-venus-double "></i><span>{{ $details->gender }}</span></li>
                                        <li><i class="fa fa-calendar"></i><span>{{ date('M d, Y', strtotime($details->birthday)) }}</span></li>
                                        <li><i class="fa fa-paw"></i> Do you own a pet? {{ $details->own_pet }}</li>
                                        @if($details->is_approved == 1)
                                            <li class="{{ $details->status == 'active' ? "text-success":"text-danger" }}">
                                                {{ ucfirst($details->status) }}
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="get-touch">
                                    <img src="{{ asset('asset/images/users/thumb/'.$details->profile) }}" class="img-responsive profile" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row no-padd">
                            <div class="detail pannel-footer">
                                <div class="col-md-5 col-sm-5">
                                    <ul class="list-inline">
                                        @if($details->is_approved == 0)
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#decline">
                                                    <i class="fa fa-ban"></i> Decline
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#approve">
                                                    <i class="fa fa-check"></i> Approved
                                                </a>
                                            </li>
                                        @else
                                            @if($details->status == 'active')
                                                <li class="list-inline-item">
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deactivate">
                                                        <i class="fa fa-trash"></i> Inactive
                                                    </a>
                                                </li>
                                            @else
                                                 <li class="list-inline-item">
                                                    <a href="javascript:void(0)" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activate">
                                                        <i class="fa fa-check"></i> Activate
                                                    </a>
                                                </li>
                                            @endif
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @include('modal.user.decline')
    @include('modal.user.approved')
    @include('modal.user.inactive')
    @include('modal.user.activate')
@endsection