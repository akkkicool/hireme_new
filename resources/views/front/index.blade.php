@extends('front/master_without_login')

@section('title', '| Home')

@section('content')
		<!-- Search Model Start -->
		<div class="modal srch-model fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header sheader">
						<button type="button" class="close srch-close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="text" class="srch-input" placeholder="Search Keywords...">
					</div>				
				</div>
			</div>
		</div>
		<!-- Search Model End -->
		<!-- Header Start -->
		@if(Auth::check())
			@include('front.partials.header')
		@else
			@include('front.partials.header_without_login')
		@endif		
		<!-- Header End -->
		<!-- Body Start -->	
		<main class="body-section">	
			<div class="banner_single version_4">
				<div class="wrapper">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-md-10">
								<div class="banner_text">
									<h2>Find a Provider</h2>
								</div>
								<div class="banner_form">
									<div class="row">
										<div class="col-xl-2 col-lg-4">
											<div class="form-group">
												<!-- <label class="label15">Hourly Rate</label> -->
												<div class="ui fluid search selection dropdown skills-search">
													<input name="tags" type="hidden" value="">
													<i class="dropdown icon"></i>
													<input class="search" autocomplete="off" tabindex="0">
													<span class="sizer" style=""></span>
													<div class="default text">Hourly Rate</div>
													<div class="menu transition hidden" tabindex="-1">
														<div class="item selected" data-value="Job1">$25</div>
														<div class="item" data-value="Job2">$50</div>										
														<div class="item" data-value="Job3">$75</div>										
														<div class="item" data-value="Job4">$100</div>																	
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-4">
											<div class="form-group">
												<!-- <label class="label15">Job Type*</label> -->
												<div class="ui fluid search selection dropdown skills-search">
													<input name="tags" type="hidden" value="">
													<i class="dropdown icon"></i>
													<input class="search" autocomplete="off" tabindex="0">
													<span class="sizer" style=""></span>
													<div class="default text">Select a service</div>
													<div class="menu transition hidden" tabindex="-1">
														<div class="item selected" data-value="Job1">Web, Mobile & Software Dev</div>										
														<div class="item" data-value="Job2">Customer Support</div>										
														<div class="item" data-value="Job3">Hairdresser</div>										
														<div class="item" data-value="Job4">Plumber</div>										
														<div class="item" data-value="Job5">Painter</div>										
														<div class="item" data-value="Job6">Electrician</div>										
														<div class="item" data-value="Job7">Home Renovation</div>										
														<div class="item" data-value="Job8">Writing & Translation</div>										
														<div class="item" data-value="Job9">Cleaning & Disinfection</div>										
														<div class="item" data-value="Job10">Massage Service</div>										
														<div class="item" data-value="Job11">Car Repair</div>										
														<div class="item" data-value="Job12">Laundry Service</div>																		
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 col-lg-5">
											<div class="form-group">
												<!-- <label class="label15">Location*</label> -->
												<div class="smm_input">
													<input type="text" class="job-input" placeholder="Location (e.g. New York, California, etc.)">
													<div class="loc_icon"><i class="fas fa-crosshairs"></i></div>
												</div>
											</div>
										</div>
										<div class="col-xl-2 col-lg-3">
											<button class="srch-btn" type="submit">Search Now</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="achivements">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-12">
							<div class="achive-text"></div>
						</div>
						<div class="col-lg-8 col-md-6 col-12">
							<ul class="post-buttons">
								<li><h2>Become a Service Provider</h2></li>
								<li>Become a service provider. Create your <strong>free</strong> virtual storefront now!</li>
								<li><button class="add-job" onclick="window.location.href = 'post_a_job.html';">Build Your Free<br/> Store Now</button></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<div class="achive-text"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="featured-candidates" style="background:#fafafa !important;">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="main-heading">
								<h2>Categories</h2>
								<span>Find freelancers in various categories for your job.</span>
								<div class="line-shape1">
									<img src="{{ asset('public/front/images/line.svg') }}" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-12 col-12">
							<!-- Top content -->
							<div class="top-content">
							    <div class="container-fluid">
							        <div id="carousel-example" class="carousel slide" data-ride="carousel">
							            <div class="carousel-inner row w-100 mx-auto" role="listbox">
							                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
							                    <div class="p-category">
													<a href="#" title="">
														<img src="{{ asset('public/front/images/homepage/categories/icons8-automatic-car-wash-96.png') }}" alt="">
														<span>Car Detailer</span>
													</a>
												</div>
							                </div>
							                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							                    <div class="p-category">
													<a href="#" title="">
														<img src="{{ asset('public/front/images/homepage/categories/icons8-mechanic-96.png') }}" alt="">
														<span>Mechanic</span>
													</a>
												</div>
							                </div>
							                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							                    <div class="p-category">
													<a href="#" title="">
														<img src="{{ asset('public/front/images/homepage/categories/icons8-massage-96.png') }}" alt="">
														<span>Facials</span>
													</a>
												</div>
							                </div>
							                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							                    <div class="p-category">
													<a href="#" title="">
														<img src="{{ asset('public/front/images/homepage/categories/icons8-hairdresser-96.png') }}" alt="">
														<span>Hairdresser</span>
													</a>
												</div>
							                </div>
							                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							                    <div class="p-category">
													<a href="#" title="">
														<img src="{{ asset('public/front/images/homepage/categories/icons8-nails-96.png') }}" alt="">
														<span>Nails</span>
													</a>
												</div>
							                </div>
							                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							                    <div class="p-category">
													<a href="#" title="">
														<img src="{{ asset('public/front/images/homepage/categories/icons8-google-classroom-96.png') }}" alt="">
														<span>Computer Lessons</span>
													</a>
												</div>
							                </div>
							                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							                    <div class="p-category">
													<a href="#" title="">
														<img src="{{ asset('public/front/images/homepage/categories/icons8-first-aid-kit-96.png') }}" alt="">
														<span>CPR/First Aid</span>
													</a>
												</div>
							                </div>
							                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
							                    <div class="p-category">
													<a href="#" title="">
														<img src="{{ asset('public/front/images/homepage/categories/icons8-car-96.png') }}" alt="">
														<span>Driver’s Education</span>
													</a>
												</div>
							                </div>
							            </div>
							            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
							                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							                <span class="sr-only">Previous</span>
							            </a>
							            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
							                <span class="carousel-control-next-icon" aria-hidden="true"></span>
							                <span class="sr-only">Next</span>
							            </a>
							        </div>
							    </div>
							</div>					
						</div>						
					</div>
				</div>
			</div>

			<div class="featured-candidates">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="main-heading">
								<h2>Featured Specialists</h2>
								<span>Discover, Intelligent, Experienced, Professional, and Trustworthy Specialists for your jobs.</span>
								<div class="line-shape1">
									<img src="{{ asset('public/front/images/line.svg') }}" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-12 col-12">
							<div class="lts-jobs-slider">
								<div class="owl-carousel jobs-owl owl-theme">
									<div class="item">
										<div class="job-item">
											<div class="job-top-dt1 text-center">
												<div class="job-center-dt">
													<img src="{{ asset('public/front/images/homepage/candidates/people-2587251_640.jpg') }}" alt="">
													<div class="job-urs-dts">
														<a href="#"><h4>John Doe</h4></a>
														<span>Beauty Stylist</span>
														<div class="avialable">10 AM - 6 PM</div>
													</div>													
												</div>	
												<div class="job-price hire-price">$50/hr</div>
											</div>
											<div class="rating-location">
												<div class="left-rating">
													<div class="rtitle">Rating</div>
													<div class="star">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>								
														<span>4.9</span> 
													</div>
												</div>
												<div class="right-location">
													<div class="text-left">
														<div class="rtitle">Location</div>
														<span><i class="fas fa-map-marker-alt"></i> New York</span>
													</div>
												</div>
											</div>
											<div class="job-buttons">
												<ul class="link-btn">
													<li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
													<li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
													<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="job-item">
											<div class="job-top-dt1 text-center">
												<div class="job-center-dt">
													<img src="{{ asset('public/front/images/homepage/candidates/plumber-4427401_640.jpg') }}" alt="">
													<div class="job-urs-dts">
														<a href="#"><h4>Albert Dua</h4></a>
														<span>Plumber</span>
														<div class="avialable">11 AM - 4 PM</div>
													</div>													
												</div>	
												<div class="job-price hire-price">$50/hr</div>
											</div>
											<div class="rating-location">
												<div class="left-rating">
													<div class="rtitle">Rating</div>
													<div class="star">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>								
														<span>4.9</span> 
													</div>
												</div>
												<div class="right-location">
													<div class="text-left">
														<div class="rtitle">Location</div>
														<span><i class="fas fa-map-marker-alt"></i> Los Angeles</span>
													</div>
												</div>
											</div>
											<div class="job-buttons">
												<ul class="link-btn">
													<li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
													<li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
													<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="job-item">
											<div class="job-top-dt1 text-center">
												<div class="job-center-dt">
													<img src="{{ asset('public/front/images/homepage/candidates/electrician-2755683_640.jpg') }}" alt="">
													<div class="job-urs-dts">
														<a href="#"><h4>Rock William</h4></a>
														<span>Electrician</span>
														<div class="avialable">9 AM - 5 PM</div>
													</div>													
												</div>	
												<div class="job-price hire-price">$60/hr</div>
											</div>
											<div class="rating-location">
												<div class="left-rating">
													<div class="rtitle">Rating</div>
													<div class="star">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>								
														<span>5.0</span> 
													</div>
												</div>
												<div class="right-location">
													<div class="text-left">
														<div class="rtitle">Location</div>
														<span><i class="fas fa-map-marker-alt"></i> Florida</span>
													</div>
												</div>
											</div>
											<div class="job-buttons">
												<ul class="link-btn">
													<li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
													<li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
													<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="job-item">
											<div class="job-top-dt1 text-center">
												<div class="job-center-dt">
													<img src="{{ asset('public/front/images/homepage/candidates/entrepreneur-593372_640.jpg') }}" alt="">
													<div class="job-urs-dts">
														<a href="#"><h4>Joy Smith</h4></a>
														<span>IT Professional</span>
														<div class="avialable">Available Full Time</div>
													</div>													
												</div>	
												<div class="job-price hire-price">$100/hr</div>
											</div>
											<div class="rating-location">
												<div class="left-rating">
													<div class="rtitle">Rating</div>
													<div class="star">
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>								
														<span>5.0</span> 
													</div>
												</div>
												<div class="right-location">
													<div class="text-left">
														<div class="rtitle">Location</div>
														<span><i class="fas fa-map-marker-alt"></i> Washington</span>
													</div>
												</div>
											</div>
											<div class="job-buttons">
												<ul class="link-btn">
													<li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
													<li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
													<li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
												</ul>
											</div>
										</div>
									</div>
																	
								</div>					
							</div>						
						</div>						
					</div>
				</div>
			</div>

			<div class="get-listed">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-12">
							<div class="main-heading mt-80">
								<h2>Be a part of HIREME25</h2>
								<span>Get discoverd by customers looking to hire skilled specialists.</span>
								<div class="line-shape1">
									<img src="{{ asset('public/front/images/line.svg') }}" alt="">
								</div>
							</div>
							<div class="text152">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu purus et diam blandit vehicula sit amet sed metus. Fusce condimentum non neque at fringilla.</p>
							</div>
							<div class="text-steps">
								<div class="text-step1">
									<div class="btext-heading">
										<i class="far fa-check-circle"></i>Get your profile listed.
									</div>
									<p>Aenean malesuada aliquet tincidunt. Nam a nisl mi. Fusce ornare fermentum enim, id interdum velit posuere quis.<p>
								</div>
								<div class="text-step1">
									<div class="btext-heading">
										<i class="far fa-check-circle"></i>Customize your profile.
									</div>
									<p>Aenean malesuada aliquet tincidunt. Nam a nisl mi. Fusce ornare fermentum enim, id interdum velit posuere quis.<p>
								</div>
								<div class="btns15">
									<button class="btn-152" onclick="window.location.href = 'browse_freelancers.html';">Get Listed</button>
									<!-- <button class="btn-153" onclick="window.location.href = '#';">Learn More</button> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="testimonial-slider">
				<div class="col-md-12 col-12">
					<div class="main-heading main-heading-1">
						<h2>Our Testimonials</h2>
						<span>What customer says about specialists at HIREME25.</span>
						<div class="line-shape1">
							<img src="{{ asset('public/front/images/line.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="carrousel">					
					<input type="radio" name="slides" id="radio-1" checked>
					<input type="radio" name="slides" id="radio-2">
					<input type="radio" name="slides" id="radio-3">
					<input type="radio" name="slides" id="radio-4">
					<ul class="slides">
						<li class="slide">
						    <p>
						       <q>HIREME25 is a really useful site. I can find freelancers for any kind of service at any time.</q>
						      <span class="author">
						      <img src="{{ asset('public/front/img/dp1.jpg') }}">
						      Rocco Bertino
						      </span>
						    </p>
						</li>     
			            <li class="slide">
						    <p>
						       <q>HIREME25 is a really useful site. I can find freelancers for any kind of service at any time.</q>
						      <span class="author">
						      <img src="{{ asset('public/front/img/dp1.jpg') }}">
						      Rocco Bertino
						      </span>
						    </p>
						</li> 
		          		<li class="slide">
						    <p>
						       <q>HIREME25 is a really useful site. I can find freelancers for any kind of service at any time.</q>
						      <span class="author">
						      <img src="{{ asset('public/front/img/dp1.jpg') }}">
						      Rocco Bertino
						      </span>
						    </p>
						</li> 
					</ul>
					<div class="slidesNavigation">
						<label for="radio-1" id="dotForRadio-1"></label>
						<label for="radio-2" id="dotForRadio-2"></label>
						<label for="radio-3" id="dotForRadio-3"></label>
					</div>
				</div>
			</div>
		</main>
		<!-- Body End -->
		<!-- footer Start -->
			@include('front.partials.footer')
	@stop