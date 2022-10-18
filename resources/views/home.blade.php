@extends('layout')

@section('content')
	<div id="box-slide" class="owl-carousel owl-theme page-slider">

		<div class="item" style="background-image:url({{ asset('assets/images/slider-main/bg1.jpg') }})">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title">Used Tires</h2>
						<h3 class="box-slide-sub-title">A Global Environmental Problem</h3>
                	    <p class="box-slide-description">The world produces around 31 million tonnes of tires that need to be disposed of. </p>
                        <p>
                        <a href="#" class="slider btn btn-primary">Our Service</a>
                    </p>
					</div>
        		</div>
			</div>

		</div><!-- Item 1 end -->

		<div class="item" style="background-image:url({{ asset('assets/images/slider-main/bg2.jpg') }})">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title">Patented Technology</h2>
						<h3 class="box-slide-sub-title">Chemical Recycling Boom is Starting</h3>
                	<p class="box-slide-description">Mechanical recycling is quite difficult and energy-intensive. Further, the use of the end product is problematic.</p>
                	<p>
                   	<a href="#" class="slider btn btn-primary">Know Us</a>
                   </p>
					</div>
        		</div>
			</div>
		</div><!-- Item 2 end -->

		<div class="item" style="background-image:url({{ asset('assets/images/slider-main/bg3.jpg') }})">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title">Fighting climate change by reducing CO²</h2>
						<h3 class="box-slide-sub-title">We Have The Solutions</h3>
                	<p class="box-slide-description">Green planet is better than a warm planet.</p>
                	<p>
                   	<a href="#" class="slider btn btn-primary">Get a Quote</a>
                   </p>
					</div>
        		</div>
			</div>
		</div><!-- Item 3 end -->
	</div><!-- Box owl carousel end-->

	<section class="call-to-action-box no-padding">
		<div class="container">
			<div class="action-style-box">
				<div class="row">
					<div class="col-md-10">
						<div class="call-to-action-text">
							<h3 class="action-title">Recycling business for scrap tyres using pyrolysis</h3>
						</div>
					</div><!-- Col end -->
					<!-- div class="col-md-2">
						<div class="call-to-action-btn">
							<a class="btn btn-dark" href="#">Request Quote</a>
						</div>
					</div --><!-- col end -->
				</div><!-- row end -->
			</div><!-- Action style box -->
		</div><!-- Container end -->
	</section><!-- Action end -->

	<section id="ts-features-top" class="ts-features-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				   <div class="ts-feature-box text-center">
                       <div class="ts-service-box" style="display: inline-block;">
                           <div class="ts-service-icon">
                               <i class="fa fa-plug"></i>
                           </div>
                       </div>
			           <div class="ts-feature-content text-center">
                           <h3 class="feature-box-title">100% autonomous energy supply</h3>
			       	   </div>
				   </div><!-- Feature1 end -->
				</div><!-- Col 1 end -->

                <div class="col-md-3">
                    <div class="ts-feature-box text-center">
                        <div class="ts-service-box" style="display: inline-block;">
                            <div class="ts-service-icon">
                                <i class="fa fa-cloud"></i>
                            </div>
                        </div>
                        <div class="ts-feature-content text-center">
                            <h3 class="feature-box-title">Conserving 98% of CO2 emissions</h3>
                        </div>
                    </div><!-- Feature1 end -->
                </div><!-- Col 1 end -->

                <div class="col-md-3">
                    <div class="ts-feature-box text-center">
                        <div class="ts-service-box" style="display: inline-block;">
                            <div class="ts-service-icon">
                                <i class="fa fa-puzzle-piece"></i>
                            </div>
                        </div>
                        <div class="ts-feature-content text-center">
                            <h3 class="feature-box-title">Flexible upgradable system</h3>
                        </div>
                    </div><!-- Feature1 end -->
                </div><!-- Col 1 end -->

                <div class="col-md-3">
                    <div class="ts-feature-box text-center">
                        <div class="ts-service-box" style="display: inline-block;">
                            <div class="ts-service-icon">
                                <i class="fa fa-recycle"></i>
                            </div>
                        </div>
                        <div class="ts-feature-content text-center">
                            <h3 class="feature-box-title">Recovery of raw material from waste</h3>
                        </div>
                    </div><!-- Feature1 end -->
                </div><!-- Col 1 end -->


			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section><!-- Feature are end -->

  	<section id="facts" class="facts-area bg-overlay no-padding">
		<div class="container">
			<div class="row">
				<div class="facts-wrapper">
					<div class="col-md-3 col-sm-6 ts-facts">
						<div class="ts-facts-img">
							<img src="{{ asset('assets/images/icon-image/fact1.png') }}" alt="">
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">7</span></h2>
							<h3 class="ts-facts-title">Affordable And <br/> Clean Energy</h3>
						</div>
					</div><!-- Col 1 end -->

					<div class="col-md-3 col-sm-6 ts-facts">
						<div class="ts-facts-img">
							<img src="{{ asset('assets/images/icon-image/fact4.png') }}" alt="">
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">9</span></h2>
							<h3 class="ts-facts-title">Industry, Innovation <br/> And Infrastructure</h3>
						</div>
					</div><!-- Col 2 end -->

					<div class="col-md-3 col-sm-6 ts-facts">
						<div class="ts-facts-img">
							<img src="{{ asset('assets/images/icon-image/fact3.png') }}" alt="">
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">11</span></h2>
							<h3 class="ts-facts-title">Sustainable Cities <br/> And Communities</h3>
						</div>
					</div><!-- Col 3 end -->

					<div class="col-md-3 col-sm-6 ts-facts">
						<div class="ts-facts-img">
							<img src="{{ asset('assets/images/icon-image/fact2.png') }}" alt="">
						</div>
						<div class="ts-facts-content">
							<h2 class="ts-facts-num"><span class="counterUp">13</span></h2>
							<h3 class="ts-facts-title">Climate <br/> Action</h3>
						</div>
					</div><!-- Col 4 end -->

				</div> <!-- Facts end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Facts end -->

	<section id="ts-service-area" class="ts-service-area">
		<div class="container">
			<div class="row text-center">
				<h2 class="border-title">Global ELTs in 2019</h2>
				<p class="border-sub-title">
					Global End-of-Life-Tire (ELT) market accounts for approx. 30.9 mt p.a.
				</p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-4">
					<div class="ts-service-box">
			        	<div class="ts-service-icon pull-left">
			          	<i class="fa fa-plane"></i>
			        	</div>
			        	<div class="ts-service-box-info">
			          	<h3 class="service-box-title"><a href="#">Landfill Ban</a></h3>
			          	<p>The landfill of End-of-Life-Tires and shredded tires is prohibited</p>
			        </div>
			      </div><!-- Service 1 end -->

			      <div class="ts-service-box">
			        	<div class="ts-service-icon pull-left">
			          	<i class="fa fa-ship"></i>
			        	</div>
			        	<div class="ts-service-box-info">
			          	<h3 class="service-box-title"><a href="#">Ban on incineration</a></h3>
			          	<p>Prohibition of burning rubber products. Prohibited the use of shredded tire granulate outdoors</p>
			        </div>
			      </div><!-- Service 2 end -->

			       <div class="ts-service-box">
			        	<div class="ts-service-icon pull-left">
			          	<i class="fa fa-truck"></i>
			        	</div>
			        	<div class="ts-service-box-info">
			          	<h3 class="service-box-title"><a href="#">Extended Producer Responsibility (EPR)</a></h3>
			          	<p>Recycling becomes a corporate concern</p>
			        </div>
			      </div><!-- Service 3 end -->
				</div><!-- Col end -->

				<div class="col-md-4 text-center">
					<img class="service-center-img img-responsive" src="{{ asset('assets/images/services/service-center.png') }}" alt="" />
				</div><!-- Col end -->

				<div class="col-md-4">
					<div class="ts-service-box">
			        <div class="ts-service-icon pull-left">
			          	<i class="fa fa-university"></i>
			        	</div>
			        	<div class="ts-service-box-info">
			          	<h3 class="service-box-title"><a href="#">EU Waste Directive</a></h3>
			          	<p>Impediment of recovered materials usage</p>
			        </div>
			      </div><!-- Service 4 end -->

			     	<div class="ts-service-box">
			        	<div class="ts-service-icon pull-left">
			          	<i class="fa fa-sitemap"></i>
			        	</div>
			        	<div class="ts-service-box-info">
			          	<h3 class="service-box-title"><a href="#">Increasing cost of CO2</a></h3>
			          	<p>Burning tires becomes more and more expensive</p>
			        </div>
			      </div><!-- Service 5 end -->

			      <div class="ts-service-box">
			        	<div class="ts-service-icon pull-left">
			          	<i class="fa fa-tasks"></i>
			        	</div>
			        	<div class="ts-service-box-info">
			          	<h3 class="service-box-title"><a href="#">Worldwide annual volume of ELT</a></h3>
			          	<p>30.9 million tonnes </p>
			        </div>
			      </div><!-- Service 6 end -->
				</div><!-- Col end -->
			</div><!-- Content row end -->

		</div><!--/ Container end -->
	</section><!-- Service end -->

    <section id="project-area" class="project-area">
        <div class="container">
            <div class="row text-center">
                <h2 class="border-title">Our Products</h2>
                <p class="border-sub-title">
                    Collaboratively administrate empowered markets via plug-and-play networks.
                </p>
            </div><!--/ Title row end -->

            <div class="row">
                <div id="isotope" class="isotope">
                    <div class="col-md-4 col-sm-6 col-xs-12 airfreight isotope-item">
                        <div class="isotope-img-container">
                            <a class="gallery-popup" href="{{ asset('assets/images/projects/01.png') }}">
                                <img class="img-responsive" src="{{ asset('assets/images/projects/01.png') }}" alt="">
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Oil</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div><!-- Isotope item 1 end -->

                    <div class="col-md-4 col-sm-6 col-xs-12 healthcare isotope-item">
                        <div class="isotope-img-container">
                            <a class="gallery-popup" href="{{ asset('assets/images/projects/02.png') }}">
                                <img class="img-responsive" src="{{ asset('assets/images/projects/02.png') }}" alt="">
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Recovered Carbon Black</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div><!-- Isotope item 2 end -->

                    <div class="col-md-4 col-sm-6 col-xs-12 government isotope-item">
                        <div class="isotope-img-container">
                            <a class="gallery-popup" href="{{ asset('assets/images/projects/03.png') }}">
                                <img class="img-responsive" src="{{ asset('assets/images/projects/03.png') }}" alt="">
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Gas</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div><!-- Isotope item 3 end -->
                </div><!-- Isotope end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </section><!-- Project area end -->

	<section id="ts-quote-block" class="ts-quote-block pattern-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">

					<h3 class="border-title border-left">Why Work With Us?</h3>

					<div class="panel-group" id="accordion">
	              	<div class="panel panel-default">
		                <div class="panel-heading">
			                <h4 class="panel-title">
			                	<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">50 Years of Experience</a>
			                </h4>
		                </div>
		                <div id="collapseOne" class="panel-collapse collapse in">
		                  <div class="panel-body">
		                  	<img class="pull-left" src="{{ asset('assets/images/services/service1.jpg') }}" alt="" />
		                    	<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
		                  </div>
		                </div>
	              	</div><!--/ Panel 1 end-->

	              	<div class="panel panel-default">
		                <div class="panel-heading">
			                <h4 class="panel-title">
			                	<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo"> We have World Wide Transport</a>
			            	</h4>
		                </div>
		                <div id="collapseTwo" class="panel-collapse collapse">
		                  <div class="panel-body">
			                  <img class="pull-right" src="{{ asset('assets/images/services/service2.jpg') }}" alt="" />
			                  <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
		                  </div>
		                </div>
	              	</div><!--/ Panel 2 end-->

	              	<div class="panel panel-default">
		                <div class="panel-heading">
			                <h4 class="panel-title">
			                	<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree"> You will get Cost Saving Solutions</a>
			            	</h4>
		                </div>
		                <div id="collapseThree" class="panel-collapse collapse">
		                  <div class="panel-body">
		                  	<img class="pull-left" src="{{ asset('assets/images/services/service3.jpg') }}" alt="" />
		                    	<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
		                  </div>
		                </div>
	              	</div><!--/ Panel 3 end-->

	              	<div class="panel panel-default">
		                <div class="panel-heading">
			                <h4 class="panel-title">
			                	<a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseFour"> We Care About Your Cargo</a>
			            	</h4>
		                </div>
		                <div id="collapseFour" class="panel-collapse collapse">
		                  <div class="panel-body">
		                  	<img class="pull-left" src="{{ asset('assets/images/services/service4.jpg') }}" alt="" />
		                    	<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor</p>
		                  </div>
		                </div>
	              	</div><!--/ Panel 3 end-->

            	</div><!--/ Accordion end -->

				</div><!-- Block left -->

				<div class="col-md-6">
					<h3 class="border-title border-left">Get a Quick Quote</h3>

					<form id="contact-form" action="contact-form.php" method="post" role="form">
    					<div class="error-container"></div>
						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
								<input class="form-control form-control-name" name="name" id="name" placeholder="Name" type="text" required>
								</div>
							</div>

							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<input class="form-control form-control-email" name="email" id="email"
									placeholder="Email" type="email" required>
								</div>
							</div>
						</div><!-- row end -->

						<div class="row">
							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<input class="form-control form-control-subject" name="subject" id="subject"
									placeholder="Subject" required>
								</div>
							</div><!-- Col end -->

							<div class="col-xs-12 col-md-6">
								<div class="form-group">
									<select id="expertise" class="selectpicker form-control show-menu-arrow">
									  	<option>Air Transportation</option>
									  	<option>Ocean Transportation</option>
									  	<option>Road Transportation</option>
									  	<option>Ground Transport Housing</option>
									  	<option>War Housing</option>
									</select>

								</div>
							</div><!-- Col end -->
						</div><!-- row end -->

						<div class="form-group">
							<textarea class="form-control form-control-message" name="message" id="message" placeholder="Message" rows="8" required></textarea>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit">Send Message</button>
						</div>
					</form>
				</div><!-- Block right -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Content end -->

	<section id="testimonial-area" class="testimonial-area bg-overlay">
		<div class="container">
			<div class="row text-center">
				<h2 class="border-title">What People Said</h2>
				<p class="border-sub-title">
					Collaboratively administrate empowered markets via plug-and-play networks.
				</p>
			</div><!--/ Title row end -->

			<div class="row">
				<div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
				  <div class="item">
				     <div class="quote-item">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip commodo.
				         </span>

				         <div class="quote-item-footer">
				         	<img class="testimonial-thumb" src="{{ asset('assets/images/clients/testimonial1.png') }}" alt="testimonial">
				         	<div class="quote-item-info">
				         		<h3 class="quote-author">Gabriel Denis</h3>
					         	<span class="quote-subtext">Chairman, OKT</span>
				         	</div>
				         </div>
				     </div><!-- Quote item end -->
				  </div><!--/ Item 1 end -->

				   <div class="item">
				     <div class="quote-item">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi aliquip consequat.
				         </span>

				         <div class="quote-item-footer">
				         	<img class="testimonial-thumb" src="{{ asset('assets/images/clients/testimonial2.png') }}" alt="testimonial">
				         	<div class="quote-item-info">
				         		<h3 class="quote-author">Weldon Cash</h3>
					         	<span class="quote-subtext">CFO, First Choice</span>
				         	</div>
				         </div>
				     </div><!-- Quote item end -->
				  </div><!--/ Item 2 end -->

				  	<div class="item">
				     <div class="quote-item">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut commodo consequat.
				         </span>

				         <div class="quote-item-footer">
				         	<img class="testimonial-thumb" src="{{ asset('assets/images/clients/testimonial3.png') }}" alt="testimonial">
				         	<div class="quote-item-info">
				         		<h3 class="quote-author">Minter Puchan</h3>
					         	<span class="quote-subtext">Director, AKT</span>
				         	</div>
				         </div>
				     </div><!-- Quote item end -->
				  	</div><!--/ Item 3 end -->

				  	<div class="item">
				     <div class="quote-item">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>

				         <div class="quote-item-footer">
				         	<img class="testimonial-thumb" src="{{ asset('assets/images/clients/testimonial4.png') }}" alt="testimonial">
				         	<div class="quote-item-info">
				         		<h3 class="quote-author">Tian Gray</h3>
					         	<span class="quote-subtext">Accountant</span>
				         	</div>
				         </div>
				     </div><!-- Quote item end -->
				  	</div><!--/ Item 4 end -->

				  	<div class="item">
				     <div class="quote-item">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>

				         <div class="quote-item-footer">
				         	<img class="testimonial-thumb" src="{{ asset('assets/images/clients/testimonial5.png') }}" alt="testimonial">
				         	<div class="quote-item-info">
				         		<h3 class="quote-author">Jeroge Tinker</h3>
					         	<span class="quote-subtext">Official</span>
				         	</div>
				         </div>
				     </div><!-- Quote item end -->
				  	</div><!--/ Item 5 end -->

				</div><!--/ Testimonial carousel end-->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Testimonial end -->

    <!-- Partners start -->
    <section id="partners-area" class="partners-area">
        <div class="container">
            <div class="row text-center">
                <h2 class="border-title">Our Partners</h2>
                <p class="border-sub-title">
                    Collaboratively administrate empowered markets via plug-and-play networks.
                </p>
            </div><!--/ Title row end -->

            <div class="row">
                <div id="partners-carousel" class="col-sm-12 owl-carousel owl-theme text-center partners">
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('assets/images/partners/partner1.png') }}" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('assets/images/partners/partner2.png') }}" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('assets/images/partners/partner3.png') }}" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('assets/images/partners/partner4.png') }}" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo last">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('assets/images/partners/partner5.png') }}" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-responsive" src="{{ asset('assets/images/partners/partner6.png') }}" alt="client">
                        </a>
                    </figure>

                </div><!--/ Owl carousel end -->

            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </section><!--/ Partners end -->

	<section class="subscribe no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="subscribe-call-to-acton">
						<h3>Can We Help?</h3>
						<h4>+(49) 89 552719-23</h4>
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
	</section><!--/ News end -->
@endsection
