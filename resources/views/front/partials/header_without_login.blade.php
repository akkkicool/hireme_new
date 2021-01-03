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
		<header>
			<div class="top-header">				
				<div class="container">				
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="top-header-full">
								<div class="top-left-hd">
									<ul>
										<li><div class="wlcm-text">Welcome to HIREME25</div></li>
									</ul>
								</div>
								<div class="top-right-hd">
									<ul>
										<li>
											<a href="{{ route('login') }}" class="account-link" role="button">
												<span class="header-nav">Sign In</span>
											</a>	
										</li>
										<li>
											<a href="{{ route('register') }}" class="account-link" role="button">
												<span class="header-nav">Sign Up</span>
											</a>	
										</li>											
									</ul>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>
			<div class="sub-header">				
				<div class="container">				
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
								<a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="index.html"><img src="{{ asset('public/front/images/output-onlinepngtools.png') }}" alt=""></a>
								<button class="navbar-toggler align-self-start" type="button">
									<i class="fas fa-bars"></i>
								</button>
								<div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
									<ul class="navbar-nav align-self-stretch">
										<li class="nav-item active">
											<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item dropdown">
											<a href="about.html" class="nav-link">About Us</a>
										</li>
										<li class="nav-item dropdown">
											<a href="about.html" class="nav-link">Browse Freelancers</a>
										</li>
																				
									</ul>
									<!-- <a href="#" class="search-link" role="button" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a> -->
									<!-- <a href="sign_in.html" class="add-post">SIGN IN</a>
									<a href="sign_up.html" class="add-task">REGISTER</a> -->									
								</div>
								<div class="responsive-search order-1">
									<input type="text" class="rsp-search" placeholder="Search...">
									<i class="fas fa-search r-sh1"></i>
								</div>
							</nav>							
							<div class="overlay"></div>
						</div>					
					</div>					
				</div>
			</div>
		</header>