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
    <!--End Page Title-->
    <div class="auto-container mt-5">
        <div class="clearfix">
            <a href="{{ URL::to('admin/pets-management') }}" class="text-primary"><i class="fa fa-angle-left"></i> Go to Pets Management</a>
        </div>
    </div>

@endsection