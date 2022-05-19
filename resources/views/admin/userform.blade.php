@extends('layouts.apps')
@section('title')<title>{{ config('app.name') }} | Admin Form </title>@endsection
@section('page')

    <section class="page-title" style="background-image:url(asset/images/background/7.jpg)">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left">
                    <h1>Admin Form</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="auto-container mt-5">
        <div class="clearfix">
           <div class="container">
               <a href="{{ URL::to('admin/users-management') }}" class="text-primary"><i class="fa fa-angle-left"></i> Back to Previous</a>

                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ URL::to('userCreate') }}">
                            {{ csrf_field() }}
                            <input  type="hidden" class="form-control" value="$av3apAw2022" name="password">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-2 form-group">
                                        <label for="email">Email Address:</label>
                                        <input id="email" type="email" class="form-control" name="email" placeholder="Email Address"  required>
                                        <span class="help-block text-danger">{{ session("email") }}</span>
                                    </div>
                                    <div class="mb-2 form-group">
                                        <label for="fname">First Name:</label>
                                        <input id="fname" type="text" class="form-control" name="fname" placeholder="First Name" required autofocus>
                                    </div>
                                    
                                    <div class="mb-2 form-group">
                                        <label for="mname">Middle Name:</label>
                                        <input id="mname" type="text" class="form-control" name="mname" placeholder="Middle Name" required autofocus>
                                    </div>

                                    <div class="mb-2 form-group">
                                        <label for="lname">Last Name:</label>
                                        <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name" required autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mb-2 form-group">
                                        <label for="address">Address:</label>
                                        <input id="address" type="text" class="form-control" name="address" placeholder="Address" required autofocus>
                                    </div>

                                    <div class="mb-2 form-group">
                                        <label for="gender">Gender:</label>
                                        <select  id="gender" class="form-control" name="gender"  required autofocus>
                                            <option disabled selected>-- Select Gender --</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="mb-2 form-group">
                                        <label for="birthday">Birthday:</label>
                                        <input id="birthday" type="date" class="form-control" name="birthday" placeholder="Birthday"  required>
                                    </div>

                                    <div class="mb-2 form-group">
                                        <label for="contact">Contact No.:</label>
                                        <input id="contact" minlength="6" type="text" class="form-control" name="contact" placeholder="+63" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <button class="mt-3 btn btn-warning"><i class="fa fa-check"></i>  SUBMIT</button>
                        </form>
                    </div>
                </div>
               
           </div>
        </div>
    </div>
@endsection