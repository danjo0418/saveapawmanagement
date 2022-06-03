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

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
        window.Laravel.BASE_URL = {!! json_encode(url('/')) !!};

        var token = window.Laravel.csrfToken;
        var BASE_URL = window.Laravel.BASE_URL;
    </script>

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
                                    <div class="main-body register-body">
                                        <div class="body-inner">
                                            <div id="js-success-alert" class="alert alert-success text-center d-none" role="alert">
                                                <h3><strong><i class="fa fa-check"></i> SUCCESS</strong></h3>
                                                <p>Your account has been successfuly created.</p>
                                            </div>
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
                                                    <form class="form-horizontal ng-pristine ng-valid" id="js-register-form">
                                                        {{ csrf_field() }}
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="mb-2 form-group">
                                                                    <label for="email" class="control-label">Email Address:</label>
                                                                    <input id="email" type="email" class="form-control" name="email" placeholder="Email Address"  required>
                                                                    <span id="js-email-alert" class="help-block text-danger d-none">Email is already in use.</span>
                                                                </div>

                                                                <div class="mb-2 form-group">
                                                                    <label for="password" class="control-label">Password:</label>
                                                                    <input id="password" minlength="6" type="password" class="form-control" name="password" placeholder="Password" required>
                                                                </div>

                                                                <div class="mb-2 form-group">
                                                                    <label for="password-confirm" class="control-label">Confirm Password:</label>
                                                                    <input id="password-confirm" minlength="6" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                                                    <span id="js-pass-alert" class="help-block text-danger d-none">Password does not match</span>
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
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
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
                                                                    <input id="birthday" type="date" class="form-control" name="birthday" placeholder="Birthdate"  required>
                                                                </div>

                                                                <div class="mb-2 form-group">
                                                                    <label for="contact" class="control-label">Contact No.:</label>
                                                                    <input type="contact"id="contact" minlength="6" maxlength="11" type="text" class="form-control" name="contact" placeholder="+63" required autofocus>
                                                                </div>

                                                                <div class="mb-2 form-group">
                                                                    <label for="own_pet" class="control-label">Do You Own A Pet?</label>
                                                                    <select  id="own_pet" class="form-control" name="own_pet"  required autofocus>
                                                                        <option disabled selected>-- Do You Own A Pet? --</option>
                                                                        <option value="yes">Yes</option>
                                                                        <option value="no">No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-12">
                                                                <button class="btn btn-secondary">SUBMIT</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="additional-info mt-4"> 
                                                <a href="{{ route('login') }}">Login</a><span class="divider-h"></span>
                                                <a href="{{ URL::to('/') }}">Go to home page.</a>
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
    <script type="text/javascript">
        $(document).ready(function() {
            
            $('#js-register-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: BASE_URL+'/newregister',
                    type: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success:function(response) {
                        console.log(response.status);

                        if(response.status == 'success') {
                            $('#js-success-alert').removeClass('d-none');
                            $("#js-register-form")[0].reset();
                        } else if(response.status == "invalid_email") {
                            $('#js-email-alert').removeClass('d-none');
                        } else if(response.status == "pass_notmatch") {
                            $('#js-pass-alert').removeClass('d-none');
                        }

                    }, error:function(response) {
                        console.log('YAWA');
                    }
                });
            });

            $('#email').keyup(function(e){
                e.preventDefault();
                $('#js-email-alert').addClass('d-none');
            });

            $('#password-confirm').keyup(function(e){
                e.preventDefault();
                $('#js-pass-alert').addClass('d-none');
            });
        });
    </script>
</body>
</html>


