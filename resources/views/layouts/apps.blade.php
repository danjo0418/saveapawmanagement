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
    <link href="{{ asset('asset/css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">

    <!-- REVOLUTION SETTINGS STYLES -->
    <link href="{{ asset('asset/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/color-themes/default-theme.css') }}" rel="stylesheet" id="theme-color-file">

    @yield('stylesheet')

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};
        window.Laravel.BASE_URL = {!! json_encode(url('/')) !!};

        var token = window.Laravel.csrfToken;
        var BASE_URL = window.Laravel.BASE_URL;
    </script>
</head>
<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        
        @include('layouts.header')
        @yield('page')
        @include('layouts.footer')
    </div>

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-bs-target="html"><span class="fa fa-paw"></span></div>

    
    <script src="{{ asset('asset/js/jquery.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/toastr.min.js') }}"></script>
    <script src="{{ asset('asset/js/main-slider-script.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('asset/js/owl.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('asset/js/wow.min.js') }}"></script>
    <script src="{{ asset('asset/js/appear.js') }}"></script>
    <script src="{{ asset('asset/js/gallery.js') }}"></script>
    <script src="{{ asset('asset/js/script.js') }}"></script>

    <!--Revolution Slider-->
    <script src="{{ asset('asset/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('asset/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    
    @yield('script')

    <script type="text/javascript">
        $(document).ready(function() {
           $('ul.pagination li').addClass('page-item');

            setInterval(function() { 
                $('.js-blinker').fadeIn(); 
                $('.js-blinker').fadeOut(); 
            }, 100);
        });

        //Image Previewer
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
              var output = document.getElementById('imagePreview');
              output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };

    </script>

    @if(session('success'))
        <script>
            toastr.success('{{ session("success") }}', 'Success.', { 
                "closeButton": true, 
                "showDuration": "500" 
            });
        </script>
    @elseif(session('warning'))
        <script>
            toastr.warning('{{ session("warning") }}', 'Warning.', { 
                "closeButton": true, 
                "showDuration": "500" 
            });
        </script>
    @elseif(session('error'))
        <script>
            toastr.error('{{ session("error") }}', 'Error', { 
                "closeButton": true, 
                "showDuration": "500" 
            });
        </script>
    @endif
</body>
</html>
