@extends('front/master_without_login')

@section('title', '| Home')

@push('styles')
<style>
			.slidecontainer {
			  width: 100%;
			}

			.slider {
			  -webkit-appearance: none;
			  width: 100%;
			  height: 25px;
			  background: #d3d3d3;
			  outline: none;
			  opacity: 0.7;
			  -webkit-transition: .2s;
			  transition: opacity .2s;
			}

			.slider:hover {
			  opacity: 1;
			}

			.slider::-webkit-slider-thumb {
			  -webkit-appearance: none;
			  appearance: none;
			  width: 25px;
			  height: 25px;
			  background: #4CAF50;
			  cursor: pointer;
			}

			.slider::-moz-range-thumb {
			  width: 25px;
			  height: 25px;
			  background: #4CAF50;
			  cursor: pointer;
			}
		</style>
@endpush

@section('content')

		
		
		<!-- Search Model End -->
		<!-- Header Start -->
		@include('front.partials.header_without_login')
		<!-- Header End -->
		<!-- Title Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Browse Freelancers</li>
						</ol>
					</div>		
				</div>		
			</div>		
		</div>
		<!-- Title Start -->
		<!-- Body Start -->	
		<main class="browse-section">				
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-5">
						<div class="browser-job-filters">
							<div class="filter-heading">
								<div class="fh-left">
									Filters
								</div>
								<!-- <div class="fh-right">
									<a href="#">Clear All Filters</a>
								</div> -->
							</div>
							<div class="fltr-group">
								<div class="fltr-items-heading">
									<div class="fltr-item-left">
										<h6>Categories</h6>
									</div>
									<!-- <div class="fltr-item-right">
										<a href="#">Clear</a>
									</div> -->
								</div>								
								<div class="ui fluid multiple search selection dropdown skills-search">
									<input name="tags" type="hidden" value="">
									<i class="dropdown icon"></i>
									<input class="search" autocomplete="off" tabindex="0"><span class="sizer" style=""></span><div class="default text">Categories</div>
									<div class="menu transition hidden" tabindex="-1">
										<div class="item selected" data-value="angular">Car Detailer</div>
										<div class="item" data-value="css">Facials</div>
										<div class="item" data-value="design">Hairdresser</div>
										<div class="item" data-value="ember">Nails</div>
										<div class="item" data-value="html">Computer Lessons</div>
										<div class="item" data-value="ia">CPR / First Aid</div>
									</div>
								</div>
							</div>
							<div class="fltr-group">
								<div class="fltr-items-heading">
									<div class="fltr-item-left">
										<h6>Services</h6>
									</div>
									<!-- <div class="fltr-item-right">
										<a href="#">Clear</a>
									</div> -->
								</div>								
								
								<input name="tags" type="hidden" value="">
								<span class="sizer" style=""></span>
								<div class="ui fluid multiple search selection dropdown skills-search">
									<input name="tags" type="hidden" value="">
									<i class="dropdown icon"></i>
									<input class="search" autocomplete="off" tabindex="0"><span class="sizer"></span><span class="sizer" style=""></span><div class="default text">Services</div>
									<div class="menu transition hidden" tabindex="-1">
										<div class="item selected" data-value="angular">Hair cut</div>
										<div class="item" data-value="css">Hair coloring</div>
										<div class="item" data-value="design">Spa</div>
									</div>
								</div>
							</div>
							<div class="fltr-group">
								<div class="fltr-items-heading">
									<label class="label15">Pay Rate</label>
									<div class="ui fluid search selection dropdown skills-search">
										<input name="tags" type="hidden" value="">
										<i class="dropdown icon"></i>
										<input class="search" autocomplete="off" tabindex="0">
										<span class="sizer" style=""></span>
										<div class="default text">Select Your Rate</div>
										<div class="menu transition hidden" tabindex="-1">
											<div class="item" data-value="25">USD 25</div>										
											<div class="item" data-value="50">USD 50</div>										
											<div class="item" data-value="75">USD 75</div>										
											<div class="item" data-value="100">USD 100</div>
										</div>
									</div>
								</div>
							</div>
							<div class="fltr-group">
								<div class="fltr-items-heading">
									<label class="label15">Total Experience</label>								
									<div class="ui fluid search selection dropdown skills-search">
										<input name="tags" type="hidden" value="">
										<i class="dropdown icon"></i>
										<input class="search" autocomplete="off" tabindex="0">
										<span class="sizer" style=""></span>
										<div class="default text">Select Your Experience</div>
										<div class="menu transition hidden" tabindex="-1">
											<div class="item" data-value="1">1 Year</div>										
											<div class="item" data-value="2">2 Years</div>										
											<div class="item" data-value="3">3 Years</div>										
											<div class="item" data-value="4">4 Years</div>										
											<div class="item" data-value="5">5 Years</div>										
											<div class="item" data-value="6">6 Years</div>										
											<div class="item" data-value="7">7 Years</div>										
											<div class="item" data-value="8">8 Years</div>										
											<div class="item" data-value="9">9 Years</div>										
											<div class="item" data-value="10">10 Years</div>											
											<div class="item" data-value="10+">Above 10 Years</div>
										</div>
									</div>
								</div>								
							</div>
							<div class="fltr-group">
								<label class="label15">Location</label>
								<div class="smm_input">
									<input type="text" class="job-input" placeholder="Type Address">
									<div class="loc_icon"><i class="fas fa-crosshairs"></i></div>								
								</div>
								<label class="label15"></label>
								<div class="slidecontainer">
									<input type="range" min="1" max="100" value="20" class="slider" id="myRange">
									<p>Within <span id="demo"></span> Miles</p>
								</div>
							</div>
							<div class="fltr-group">
								
							</div>
							<div class="fltr-group fltr-gend">
								<div class="filter-button">
									<button class="flr-btn">Search Now</button>
								</div>	
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-7 mainpage">
						<div class="main-tabs">
							<div class="res-tabs">
								<div class="mtab-left">
									<ul class="browsr-project">
										<li>
											<span class="nav-link">Search Results</span>
										</li>																			
									</ul>
								</div>
								<div class="mtab-right">
									<ul>
										<li class="bp-block">
											<div class="ui selection dropdown skills-search sort-dropdown">
												<input name="gender" type="hidden" value="default">
												<i class="dropdown icon d-icon"></i>
												<div class="text">Sort By</div>
												<div class="menu">
													<div class="item" data-value="0">All</div>
													<div class="item" data-value="1">Top</div>
													<div class="item" data-value="2">Newest</div>
													<div class="item" data-value="3">Ranking</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="prjoects-content">
								<div class="row">
									<div class="lg-item5 col-lg-6 col-xs-6 grid-group-item5">
										<div class="job-item mt-30">
											<div class="job-top-dt1 text-center">
												<div class="job-center-dt">
													<img src="images/homepage/candidates/hairdresser-659145_640.jpg" alt="">
													<div class="job-urs-dts">
														<a href="other_freelancer_profile.html"><h4>Maria Williams</h4></a>
														<span>Hairdresser</span>
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
														<span><i class="fas fa-map-marker-alt"></i> New York City</span>
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
									
									
									<div class="col-12">
										<div class="main-p-pagination">
											<nav aria-label="Page navigation example">
												<ul class="pagination">
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Previous">
															PREV
														</a>
													</li>
													<li class="page-item"><a class="page-link active" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">...</a></li>
													<li class="page-item"><a class="page-link" href="#">24</a></li>
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Next">
															NEXT
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>										
								</div>
							</div>														
						</div>														
					</div>													
				</div>
			</div>					
		</main>
		<!-- Body End -->
		@include('front.partials.footer')

@push('scripts')
		<script>
			var slider = document.getElementById("myRange");
			var output = document.getElementById("demo");
			output.innerHTML = slider.value;

			slider.oninput = function() {
			  output.innerHTML = this.value;
			}
		</script>
@endpush		
		
@stop