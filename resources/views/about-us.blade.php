@extends('layout')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Company Overview</h3>
                    <p>Pyrum Innovations is an innovative recycling technology company based in Germany. On the basis of the worldwide patented, unique thermolysis process, the company develops, builds and operates recycling plants, with the help of which Pyrum extracts raw materials of high quality from used tires, rubber and plastic waste and feeds them back into the material cycle. The raw materials obtained include thermolysis oil, for which Pyrum has received REACH certification, and recovered carbon black (rCB).</p>
                    <p>In addition, Pyrum markets the thermolysis recycling plants worldwide and supplies them to its contractual partners.</p>
                    <p>In September 2020, BASF acquired a stake in Pyrum Innovations AG as part of its ChemCyclingTM project and guarantees the acceptance of the thermolysis oil produced both in its own plants as well as in the plants of its contractual partners.</p>
                </div><!-- Col end -->

                <div class="col-md-6">
                    <h3>Our Core Values</h3>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Safety</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata</p>
                                </div>
                            </div>
                        </div><!--/ Panel 1 end-->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo"> Customer Service</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata</p>
                                </div>
                            </div>
                        </div><!--/ Panel 2 end-->


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree"> Integrity</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidata</p>
                                </div>
                            </div>
                        </div><!--/ Panel 3 end-->

                    </div><!--/ Accordion end -->

                </div><!-- Col end -->
            </div><!-- Content row end -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->


    <section class="pattern-bg">
        <div class="container">
            <div class="row text-center">
                <h2 class="border-title">Our Best Practices</h2>
                <p class="border-sub-title">
                    Collaboratively administrate empowered markets via plug-and-play networks.
                </p>
            </div><!--/ Title row end -->

            <div class="row">
                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Technology</a></h3>
                            <p>Controlled process conditions that result in controlled product quality</p>
                        </div>
                    </div>
                </div><!-- Col 1 end -->

                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Process</a></h3>
                            <p>Continuous process. Elapsed time between entry and exit of waste max. 40 minutes</p>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-tachometer"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Staff</a></h3>
                            <p>2-3 workers / shift to run 1 line</p>
                        </div>
                    </div>
                </div><!-- Col 3 end -->

                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-diamond"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">REACH</a></h3>
                            <p>Only European company with REACH certificate for oil from ELT</p>
                        </div>
                    </div>
                </div><!-- Col 4 end -->
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Reliability</a></h3>
                            <p>Dillingen plant is running on an industrial scale since May 2020</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-certificate"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Lifespan of main reactor</a></h3>
                            <p>10 years guaranteed by Pyrum as the reactor has no moving parts</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Market value oil</a></h3>
                            <p>min. 150 / max. 350 EUR per ton3</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-hand-lizard-o"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Emissions</a></h3>
                            <p>Low emissions due to electrical heating and environmentally friendly energy production</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Energy</a></h3>
                            <p>Fully self-sufficient</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-wrench"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Maintenance</a></h3>
                            <p>Stops only every 3 months2</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Market value carbon</a></h3>
                            <p>EUR 650 - 700 per ton</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="ts-service-box text-center">
                        <div class="ts-service-icon">
                            <i class="fa fa-hashtag"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Limited PAHs</a></h3>
                            <p>Just several seconds tires are exposed to temperatures between 450 and 550 °C</p>
                        </div>
                    </div>
                </div>

            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!-- Facts end -->


    <section id="ts-team" class="ts-team">
        <div class="container">
            <div class="row text-center">
                <h2 class="border-title">Our Leadership</h2>
                <p class="border-sub-title">
                    Collaboratively administrate empowered markets via plug-and-play networks.
                </p>
            </div><!--/ Title row end -->

            <div class="row">
                <div id="team-slide" class="owl-carousel owl-theme team-slide">
                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img alt="" src="assets/images/no-photo.jpg" class="img-responsive">
                            </div>
                            <div class="ts-team-content">
                                <h3 class="ts-name">Jens Weinberger</h3>
                                <p class="ts-designation">Managing Director</p>
                                <!-- p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                </div -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img alt="" src="assets/images/no-photo.jpg" class="img-responsive">
                            </div>
                            <div class="ts-team-content">
                                <h3 class="ts-name">Gyula Textor</h3>
                                <p class="ts-designation">Managing Director</p>
                                <!-- p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                </div -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img alt="" src="assets/images/no-photo.jpg" class="img-responsive">
                            </div>
                            <div class="ts-team-content">
                                <h3 class="ts-name">Lion Wunderlich</h3>
                                <p class="ts-designation">Project Manager</p>
                                <!-- p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                </div -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="ts-team-wrapper">
                            <div class="team-img-wrapper">
                                <img alt="" src="assets/images/no-photo.jpg" class="img-responsive">
                            </div>
                            <div class="ts-team-content">
                                <h3 class="ts-name">Jens Weinberger</h3>
                                <p class="ts-designation">Managing Director</p>
                                <!-- p class="ts-description">Nats Stenman began his career in construction with boots on the ground</p>
                                <div class="team-social-icons">
                                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                </div -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Team end -->
@endsection
