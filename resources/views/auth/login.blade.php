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
                                    <div class="main-body">
                                        <div class="body-inner">
                                            <div class="card bg-white">
                                                <div class="card-content">
                                                    <section class="logo text-center">
                                                        <!--Sec Title-->
                                                        <div class="sec-title centered">
                                                            <img src="{{ asset('asset/images/logo-small.png') }}">
                                                            <div class="title">Because We Really Care About Your Pets</div>
                                                            <h2>Login</h2>
                                                        </div>
                                                    </section>
                                                    <form class="form-horizontal ng-pristine ng-valid" method="POST" action="{{ URL::to('newlogin') }}">
                                                        {{ csrf_field() }}
                                                        <fieldset class="p-3">
                                                            <div class="mb-3 form-group">
                                                                <label>Email</label>
                                                                <input type="text"  class="form-control" name="email" placeholder="Email address" required autofocus>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password</label>
                                                                <input type="password" class="form-control"  name="password" placeholder="Password" required>
                                                                <span class="help-block text-danger">{{ session("invalid") }}</span>
                                                            </div>
                                                        </fieldset>
                                                        <div class="card-action no-border text-end"><button class="btn btn-secondary">LOGIN</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="additional-info mt-4"> 
                                                <a href="{{ route('register') }}">Register</a><span class="divider-h"></span>
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


