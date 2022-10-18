@extends('layout')

@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url(assets/images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-heading">
                            <h1 class="border-title border-left">Contact Us</h1>
                            <ol class="breadcrumb">
                                <li>Home</li>
                                <li>Contact Us</li>
                            </ol>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-left">
                        <div class="widget contact-info">
                            <h3 class="widget-title">Contact Us</h3>

                            <div class="contact-info-box">
                                <i class="fa fa-map">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Visit Us</h4>
                                    <p>Fasaneriestr. 10, 80636 Munich</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-envelope">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Mail Us</h4>
                                    <p>l.wunderlich@mtech.de</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-phone-square">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Call Us</h4>
                                    <p>(+49) 89 552719-23</p>
                                </div>
                            </div>

                        </div><!-- Widget end -->
                    </div><!-- Sidebar left end -->
                </div><!-- Sidebar col end -->

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h3 class="border-title border-left">Contact Form</h3>
                    <form id="contact-form" action="contact-form.php" method="post" role="form">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-email" name="email" id="email"
                                           placeholder="" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control form-control-subject" name="subject" id="subject"
                                           placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div><!-- Content row -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->

    <!-- section id="map-wrapper" class="no-padding">
        <div id="map" class="map"></div>
    </section --><!-- Map end -->

    <section class="subscribe no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="subscribe-call-to-acton">
                        <h3>Can We Help?</h3>
                        <h4>(+49) 89 552719-23</h4>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="ts-newsletter">
                        <div class="newsletter-introtext">
                            <h4>Newsletter Sign-up</h4>
                            <p>Latest updates and news</p>
                        </div>

                        <div class="newsletter-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Your Email Here" autocomplete="off">
                                    <button class="btn btn-primary">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- Newsletter end -->
                </div><!-- Col end -->

            </div><!-- Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Subscribe end -->
@endsection
