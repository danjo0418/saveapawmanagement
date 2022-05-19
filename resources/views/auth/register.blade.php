<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="icon" href="" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">


</head>
<body>

    <div class="page-wrapper">
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="clearfix">
                    <div id="login" class="ptb ptb-xs-40 page-signin">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    @if(session('success'))
                                        <div class="alert alert-success text-center" role="alert">
                                            <i class="fa fa-check"></i> {{ session("success") }}
                                        </div>
                                    @endif
                                    <div class="main-body">
                                        <div class="body-inner">
                                            <div class="card bg-white">
                                                <div class="card-content">
                                                    <section class="logo text-center">
                                                        <!--Sec Title-->
                                                        <div class="sec-title centered">
                                                            <img src="{{ asset('asset/images/logo-small.png') }}">
                                                            <div class="title">Because We Really Care About Your Pets</div>
                                                            <h2>Register</h2>
                                                        </div>
                                                    </section>
                                                    <form class="form-horizontal ng-pristine ng-valid" method="POST" action="{{ URL::to('newregister') }}">
                                                        {{ csrf_field() }}
                                                        <div class="mb-2 form-group">
                                                            <label for="email" class="control-label">Email Address:</label>
                                                            <input id="email" type="email" class="form-control" name="email" placeholder="Email Address"  required>
                                                            <span class="help-block text-danger">{{ session("email") }}</span>
                                                        </div>

                                                        <div class="mb-2 form-group">
                                                            <label for="password" class="control-label">Password:</label>
                                                            <input id="password" minlength="6" type="password" class="form-control" name="password" placeholder="Password" required>
                                                        </div>

                                                        <div class="mb-2 form-group">
                                                            <label for="password-confirm" class="control-label">Confirm Password:</label>
                                                            <input id="password-confirm" minlength="6" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                                            <span class="help-block text-danger">{{ session("confirm") }}</span>
                                                        </div>

                                                        <div class="mb-2 form-group">
                                                            <label for="fname" class="control-label">First Name:</label>
                                                            <input id="fname" type="text" class="form-control" name="fname" placeholder="First Name" required autofocus>
                                                        </div>
                                                        
                                                        <div class="mb-2 form-group">
                                                            <label for="mname" class="control-label">Middle Name:</label>
                                                            <input id="mname" type="text" class="form-control" name="mname" placeholder="Middle Name" required autofocus>
                                                        </div>

                                                        <div class="mb-2 form-group">
                                                            <label for="lname" class="control-label">Last Name:</label>
                                                            <input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name" required autofocus>
                                                        </div>


                                                        <div class="mb-2 form-group">
                                                            <label for="address" class="control-label">Address:</label>
                                                            <input id="address" type="text" class="form-control" name="address" placeholder="Address" required autofocus>
                                                        </div>

                                                        <div class="mb-2 form-group">
                                                            <label for="gender" class="control-label">Gender:</label>
                                                            <select  id="gender" class="form-control" name="gender"  required autofocus>
                                                                <option disabled selected>-- Select Gender --</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-2 form-group">
                                                            <label for="birthday" class="control-label">Birthday:</label>
                                                            <input id="birthday" type="date" class="form-control" name="birthday" placeholder="Birthday"  required>
                                                        </div>

                                                        <div class="mb-2 form-group">
                                                            <label for="contact" class="control-label">Contact No.:</label>
                                                            <input id="contact" minlength="6" type="text" class="form-control" name="contact" placeholder="+63" required autofocus>
                                                        </div>

                                                        <div class="mb-2 form-group">
                                                            <label for="own_pet" class="control-label">Do You Own A Pet?</label>
                                                            <select  id="own_pet" class="form-control" name="own_pet"  required autofocus>
                                                                <option disabled selected>-- Do You Own A Pet? --</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>

                                                        
                                                        <div class="card-action no-border text-end"><button class="btn btn-secondary">SUBMIT</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="additional-info mt-4"> 
                                                <a href="{{ route('login') }}">Login</a><span class="divider-h"></span>
                                                <a href="{{ URL::to('/') }}">Back to Home</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('asset/js/owl.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('asset/js/wow.min.js') }}"></script>
    <script src="{{ asset('asset/js/appear.js') }}"></script>
    <script src="{{ asset('asset/js/gallery.js') }}"></script>
</body>
</html>


