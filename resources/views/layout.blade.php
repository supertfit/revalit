<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Revalit GmbH</title>

    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('assets/css/colorbox.css') }}">

    <style>
        .project-item-title {
            text-align: center;
        }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <ul class="top-info">
                        <li><i class="fa fa-phone">&nbsp;</i><p class="info-text">(+49) 89 552719-23</p></li>
                        <li><i class="fa fa-envelope-o">&nbsp;</i><p class="info-text">l.wunderlich@mtech.de</p></li>
                    </ul>
                </div><!--/ Top info end -->

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
                    <ul class="unstyled">
                        <li>
                            <a title="Facebook" href="#">
                                <span class="social-icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a title="Twitter" href="#">
                                <span class="social-icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a title="Linkdin" href="#">
                                <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <!-- a title="Google+" href="#">
                                <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                            </a>
                            <a title="Rss" href="#">
                                <span class="social-icon"><i class="fa fa-rss"></i></span>
                            </a>
                            <a title="Skype" href="#">
                                <span class="social-icon"><i class="fa fa-skype"></i></span>
                            </a -->
                        </li>
                    </ul>
                </div><!--/ Top social end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </div><!--/ Topbar end -->

    <!-- Header start -->
    <header id="header" class="nav-style-boxed boxed-full">
        <div class="container">
            <div class="row">
                <div class="logo-area clearfix" style="padding-bottom: 10px;">
                    <div class="logo col-xs-12 col-md-3">
                        <a href="{{ route('main.home') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" style="height: 100px; margin-top: -30px;">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-xs-12 col-md-9 header-right">
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box"><span class="info-icon"><i class="fa fa-map-marker">&nbsp;</i></span>
                                    <div class="info-box-content">
                                        <p class="info-box-title">Find Us</p>
                                        <p class="info-box-subtitle">Fasaneriestr. 10, 80636 Munich</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box"><span class="info-icon"><i class="fa fa-phone">&nbsp;</i></span>
                                    <div class="info-box-content">
                                        <p class="info-box-title">Call Us</p>
                                        <p class="info-box-subtitle">(+49) 89 552719-23</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box last"><span class="info-icon"><i class="fa fa-compass">&nbsp;</i></span>
                                    <div class="info-box-content">
                                        <p class="info-box-title">We are Open</p>
                                        <p class="info-box-subtitle">9.00 AM - 18.00 PM</p>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-search">
                                <span id="search"><i class="fa fa-search"></i></span>
                            </li>
                        </ul>
                        <div class="search" style="display: none;">
                            <input type="text" class="form-control" placeholder="Type what you want and enter">
                            <span class="search-close">&times;</span>
                        </div><!-- Site search end -->
                    </div><!-- header right end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->

        <nav class="site-navigation navigation">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="site-nav-inner pull-left">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse navbar-responsive-collapse">
                                <?php
                                if (empty($menu_no)) {
                                    $menu_no = 1;
                                }
                                ?>
                                <ul class="nav navbar-nav">
                                    <li class="dropdown {{ $menu_no == 1 ? 'active' : '' }}">
                                        <a href="{{ route('main.home') }}">Home</a>
                                    </li>

                                    <!-- li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <i class="fa fa-angle-down"></i></a>
                                       </li -->

                                    <li class="dropdown {{ $menu_no == 2 ? 'active' : '' }}">
                                        <a href="{{ route('main.production-process') }}" class="dropdown-toggle">Production Process</a>
                                    </li>

                                    <li class="dropdown {{ $menu_no == 3 ? 'active' : '' }}">
                                        <a href="{{ route('main.news') }}">News</a>
                                    </li>

                                    <!-- li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                                       </li -->

                                    <li class="dropdown {{ $menu_no == 5 ? 'active' : '' }}">
                                        <a href="{{ route('main.about-us') }}">About Us</a>
                                    </li>

                                    <li class="dropdown {{ $menu_no == 4 ? 'active' : '' }}">
                                        <a href="{{ route('main.contact') }}">Contact</a>
                                    </li>
                                </ul><!--/ Nav ul end -->
                            </div><!--/ Collapse end -->
                        </div><!-- Site Navbar inner end -->
                    </div><!--/ Col end -->
                </div><!--/ Row end -->
            </div><!--/ Container end -->

        </nav><!--/ Navigation end -->
    </header><!--/ Header end -->

    @yield('content')

    <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 footer-widget footer-about">
                        <h3 class="widget-title">About Us</h3>
                        <img class="footer-logo" src="{{ asset('assets/images/footer-logo.png') }}" alt="" style="height: 100px;"/>
                        <p>Recycling business for scrap tyres using pyrolysis</p>
                        <div class="footer-social">
                            <ul>
                                <!-- li><a href="#"><i class="fa fa-rss"></i></a></li -->
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <!-- li><a href="#"><i class="fa fa-google-plus"></i></a></li -->
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- Footer social end -->
                    </div><!-- Col end -->

                    <div class="col-md-4 col-sm-12 footer-widget">
                        <h3 class="widget-title">Menu</h3>
                        <ul class="list-arrow">
                            <li><a href="{{ route('main.home') }}">Home</a></li>
                            <!-- li><a href="#">Products</a></li -->
                            <li><a href="{{ route('main.production-process') }}">Production Process</a></li>
                            <li><a href="{{ route('main.news') }}">News</a></li>
                            <li><a href="{{ route('main.about-us') }}">About Us</a></li>
                            <li><a href="{{ route('main.contact') }}">Contact</a></li>
                        </ul>
                    </div><!-- Col end -->

                    <div class="col-md-4 col-sm-12 footer-widget">
                        <h3 class="widget-title">Working Hours</h3>
                        <div class="working-hours">
                            We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our Hotline and Contact form.
                            <br><br> Monday - Friday: <span class="text-right">9:00 - 18:00 </span>
                            <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                            <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                        </div>
                    </div><!-- Col end -->

                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="copyright-info">
                            <span>Copyright © {{ date('Y') }} Revalit GmbH. All Rights Reserved.</span>
                        </div>
                    </div>

                    <!-- div class="col-xs-12 col-sm-6">
                        <div class="footer-menu">
                            <ul class="nav unstyled">
                                <li><a href="#">Investors</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Case Studies</a></li>
                                <li><a href="#">Videos</a></li>
                            </ul>
                        </div>
                    </div -->
                </div><!-- Row end -->

                <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
                    <button class="btn btn-primary" title="Back to Top">
                        <i class="fa fa-angle-double-up"></i>
                    </button>
                </div>

            </div><!-- Container end -->
        </div><!-- Copyright end -->
    </footer><!-- Footer end -->


    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- Color box -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.colorbox.js') }}"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="{{ asset('assets/js/isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/ini.isotope.js') }}"></script>

    <!-- Template custom -->
    <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

</div><!-- Body inner end -->
</body>
</html>
