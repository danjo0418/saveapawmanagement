<header class="main-header">
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <div class="clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <li><span class="icon fa fa-map-marker"></span>Cordova, Cebu, Philippines 6017</li>
                            <li>
                                <a href="tel:+63 912 3456 1345">
                                    <span class="icon fa fa-phone"></span>
                                    +63 912 3456 1345
                                </a>
                            </li>
                            <li>
                                <a href="mailto:saveapawmanagementsystem@gmail.com">
                                    <span class="icon fa fa-envelope"></span>
                                    saveapawmanagementsystem@gmail.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="top-right clearfix">
                        <div class="social-icon">
                            <ul class="clearfix">
                                <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            </ul>
                        </div>
                        <div class="donate-box ml-3">
                            @guest
                                <a href="{{ route('login') }}" class="theme-btn btn-style-one ml-02">Login</a>
                                <a href="{{ route('register') }}" class="theme-btn btn-style-one">Register</a>
                            @else
                                <p class="p-1">Welcome! {{ Auth::user()->fname }}</p>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-upper">
        <div class="auto-container clearfix">
            <div class="pull-left logo-outer">
                <div class="logo"><a href=""><img src="{{ asset('asset/images/logo.png') }}" alt="" title=""></a></div>
            </div>
            <div class="pull-right upper-right clearfix">
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                data-bs-target=".navbar-collapse">
                                <span><i class="fa fa-bars"></i></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                @guest
                                    <li><a href="{{ URL::to('/') }}">Home</a></li>
                                @else
                                    @if(Auth::user()->role_id == 3)
                                        <li><a href="{{ URL::to('about-us') }}">About Us</a></li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0)">Pets</a>
                                            <ul>
                                                <li><a href="{{ URL::to('pets-form') }}">Form</a></li>
                                                <li><a href="{{ URL::to('adopt') }}">Adopt</a></li>
                                                <li><a href="{{ URL::to('lost-and-found') }}">Lost and Found</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ URL::to('blogs') }}">Blogs</a></li>
                                    @else
                                        <li><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
                                        <li><a href="{{ URL::to('admin/pets-management') }}">Pets</a></li>
                                        <li><a href="{{ URL::to('admin/users-management') }}">Users</a></li>
                                        <li class="dropdown">
                                            <a href="{{ URL::to('notifications') }}">Notifications</a>
                                            <ul>
                                                <li>
                                                    <a href="{{ URL::to('admin/pets-verification') }}">
                                                        Verify Pets 
                                                        <span class="badge badge-danger">
                                                            {{ App\Modules\Helpers::countUnapprovedPet() }}
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::to('admin/claim-pets') }}">
                                                        Claim Pets 
                                                        <span class="badge badge-danger">
                                                            {{ App\Modules\Helpers::countClaim() }}
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL::to('admin/adopt-pets') }}">
                                                        Adopt Pets 
                                                        <span class="badge badge-danger">
                                                            {{ App\Modules\Helpers::countAdopt() }}
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ URL::to('blogs') }}">Blogs</a></li>
                                    @endif
                                    <li class="cstm_li"><a href=""><img class="avatar" src="{{ asset('asset/images/users/thumb/'.Auth::user()->profile) }}"></a></li>
                                    <li class="cstm_li dropdown"><a href="javascript:void(0)">{{ Auth::user()->email }} <span class="fa fa-sort-desc"></span></a>
                                        <ul>
                                            @if(Auth::user()->role_id == 3)
                                                <li><a href="{{ URL::to('mypets') }}"><span class="fa fa-paw"></span> My Pets</a></li>
                                            @endif
                                            <li><a href=""><span class="fa fa-rss "></span> My Blogs</a></li>
                                            <li><a href="{{ URL::to('profile') }}"><span class="fa fa-user"></span> Profile</a></li>
                                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span> Logout</a></li>
                                        </ul>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="auto-container clearfix">
            <div class="logo pull-left mt-2">
                <a href="" class="img-responsive"><img src="{{ asset('asset/images/logo-small.png') }}" alt="" title=""></a>
            </div>
            <div class="right-col pull-right">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                            data-bs-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            @guest
                                <li><a href="{{ URL::to('/') }}">Home</a></li>
                            @else
                                @if(Auth::user()->role_id == 2)
                                    <li><a href="{{ URL::to('about-us') }}">About Us</a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0)">Pets</a>
                                        <ul>
                                            <li><a href="{{ URL::to('pets-form') }}">Form</a></li>
                                            <li><a href="{{ URL::to('adopt') }}">Adopt</a></li>
                                            <li><a href="{{ URL::to('lost-and-found') }}">Lost and Found</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                                @else
                                    <li><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
                                    <li><a href="{{ URL::to('admin/pets-management') }}">Pets</a></li>
                                    <li><a href="{{ URL::to('admin/users-management') }}">Users</a></li>
                                    <li><a href="{{ URL::to('notifications') }}">Notifications</a></li>
                                @endif
                                <li class="cstm_li"><a href=""><img class="avatar" src="{{ asset('asset/images/users/author-1.jpg') }}"></a></li>
                                <li class="cstm_li dropdown"><a href="javascript:void(0)">{{ Auth::user()->email }} <span class="fa fa-sort-desc"></span></a>
                                    <ul>
                                        <li><a href="{{ URL::to('profile') }}"><span class="fa fa-user"></span> Profile</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span> Logout</a></li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</header>

