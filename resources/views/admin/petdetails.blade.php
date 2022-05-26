@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Pet Details </title>@endsection
@section('page')
    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Pet Details</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <a href="{{ URL::to('admin/pets-management') }}" class="text-primary"><i class="fa fa-angle-left"></i> Go to Pet Management</a>
                <section class="detail-desc mt-3">
                    <div class="container white-shadow">
                        <div class="row bottom-mrg">
                            <div class="col-md-12">
                                <small>Posted By: {{ $detail->user->fname.' '.$detail->user->lname }}</small>
                                <small class="float-end"><i class="fa fa-calendar"></i> {{ date('M d, Y', strtotime($detail->created_at)) }}</small>
                            </div>
                            <hr>
                            <div class="col-md-8 col-sm-8">
                                <div class="detail-desc-caption">
                                    @if($detail->is_approved == 0)
                                        <i>For Approval</i>
                                    @endif

                                    <h4 class="mt-2">{{ $detail->name }}</h4>
                                    @if($detail->status == 'adopt')
                                        <span class="text-success">For Adoption</span>
                                    @else
                                        <span class="text-danger">Lost and Found</span>
                                    @endif
                                    <p>{{ $detail->description }}</p>
                                    <ul>
                                        <li><i class="fa fa-paw"></i> <strong>Age:</strong> {{ $detail->age }}</li>
                                        <li><i class="fa fa-paw"></i> <strong>Gender:</strong> {{ $detail->gender }}</li>
                                        <li><i class="fa fa-paw"></i> <strong>Color:</strong> {{ $detail->color }}</li>
                                        <li><i class="fa fa-paw"></i> <strong>Breed:</strong> {{ $detail->breed }}</li>
                                        <li><i class="fa fa-paw"></i> <strong>Is Vaccinated?</strong> {{ $detail->is_vaccinated }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="get-touch">
                                    <img src="{{ asset('asset/images/pets/thumb/'.$detail->filename) }}" class="img-responsive profile" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row no-padd">
                            <div class="detail pannel-footer">
                                <div class="col-md-12">
                                    <ul class="list-inline">
                                        @if($detail->is_approved == 0)
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
                                            <li class="list-inline-item">
                                                <a href="javascript:void(0)" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#update">
                                                    <i class="fa fa-pencil-square-o"></i> Update 
                                                </a>
                                            </li>
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
    @include('modal.pet.approve')
    @include('modal.pet.decline')
    @include('modal.pet.update')
@endsection