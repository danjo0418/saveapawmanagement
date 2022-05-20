<!--Main Footer-->
<footer class="main-footer">
    <div class="auto-container">
        @guest()
        @else
            @if(Auth::user()->role_id == 3)
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!--big column-->
                        <div class="big-column col-md-5 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <!--Footer Column-->
                                <div class="footer-column col-xs-12">
                                    <div class="footer-widget logo-widget">
                                        <div class="logo">
                                            <a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
                                        </div>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</div>
                                        <ul class="social-icon-two">
                                            <li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--big column-->
                        <div class="big-column col-md-3 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <!--Footer Column-->
                                <div class="footer-column col-xs-12">
                                    <div class="footer-widget links-widget">
                                        <h2>Web Links</h2>
                                        <ul class="links">
                                            @if(Auth::user()->role_id == 3)
                                                <li><a href="{{ URL::to('about-us') }}">About Us</a></li>
                                                <li><a href="{{ URL::to('adopt') }}">Adopt</a></li>
                                                <li><a href="{{ URL::to('lost-and-found') }}">Lost and Found</a></li>
                                                <li><a href="{{ URL::to('blog') }}">Blog</a></li>
                                            @else
                                                <li><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
                                                <li><a href="{{ URL::to('admin/pets-management') }}">Pets</a></li>
                                                <li><a href="{{ URL::to('admin/users-management') }}">Users</a></li>
                                            @endif
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--big column-->
                        <div class="big-column col-md-3 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <!--Footer Column-->
                                <div class="footer-column col-xs-12">
                                    <div class="footer-widget info-widget">
                                        <h2>Get In Touch</h2>
                                        <ul>
                                            <li><span class="icon fa fa-map-marker"></span>Cordova, Cebu
                                                <br> Philippines, 6017
                                            </li>
                                            <li>
                                                <span class="icon fa fa-phone"></span>
                                                <a href="tel:+63 912 3456 1345">+63 912 3456 1345</a>
                                            </li>
                                            <li>
                                                <span class="icon fa fa-envelope"></span>
                                                <a href="mailto: saveapawmanagementsystem@gmail.com"> saveapawmanagementsystem@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endguest
        <div class="footer-bottom m5-3">
            <div class="copyright">Copyrights {{ date('Y') }} <span>SAVE A PAW</span> • All Rights Reserved.</div>
        </div>
    </div>
</footer>
<!--End Main Footer-->