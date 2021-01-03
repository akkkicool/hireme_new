@extends('front/master_without_login')

@section('title', '| Home')

@section('content')

		<!-- Header Start -->
			@include('front.partials.header')
		<!-- Header End -->
		<!-- Title Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Our Blog</li>
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
					<div class="col-md-12">
						<div class="main-heading">
							<h2>Our Blog</h2>
							<div class="line-shape1">
								<img src="images/line.svg" alt="">
							</div>
						</div>
						<div class="plans150">
							<div class="row">
								<div class="col-lg-9 col-md-12">
									<div class="blog_item">
										<div class="blog_img">
											<img src="images/blog/img-1.jpg" alt="">
										</div>
										<div class="blog_dt">
											<div class="blog_body">
												<div class="blog_left">
													<p>By <a href="#">John Doe</a></p>
												</div>
												<div class="blog_right">
													<span>2 October 2018</span>
												</div>
												<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
												<p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue, a scelerisque ex. Vivamus id dignissim tortor. Donec gravida.</p>
												<a href="blog_single_view.html" class="read_btn">Read More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-12">
									<div class="subscribe_blog">
										<div class="subscribe_body">
											<div class="blog_logo">
												<img src="images/blog/blog_logo.svg" alt="">
											</div>
											<h3>Subscribe and Get Updates</h3>
											<form>
												<div class="form-group">
													<input type="email" class="blog10-input" placeholder="Email Address">
												</div>
												<button class="blogbtn142" type="submit">Subscribe Now</button>
											</form>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6">
									<div class="blog_item">
										<div class="blog_img1">
											<img src="images/blog/img-2.jpg" alt="">
										</div>
										<div class="blog_dt1">
											<div class="blog_body">
												<div class="blog_left">
													<p>By <a href="#">John Doe</a></p>
												</div>
												<div class="blog_right">
													<span>2 October 2018</span>
												</div>
												<h4>Quisque non ipsum at lacus luctus volutpat id ac odio.</h4>
												<p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue...</p>
												<a href="blog_single_view.html" class="read_btn">Read More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6">
									<div class="blog_item">
										<div class="blog_img1">
											<img src="images/blog/img-3.jpg" alt="">
										</div>
										<div class="blog_dt1">
											<div class="blog_body">
												<div class="blog_left">
													<p>By <a href="#">John Doe</a></p>
												</div>
												<div class="blog_right">
													<span>2 October 2018</span>
												</div>
												<h4>Quisque non ipsum at lacus luctus volutpat id ac odio.</h4>
												<p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue...</p>
												<a href="blog_single_view.html" class="read_btn">Read More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6">
									<div class="blog_item">
										<div class="blog_img1">
											<img src="images/blog/img-3.jpg" alt="">
										</div>
										<div class="blog_dt1">
											<div class="blog_body">
												<div class="blog_left">
													<p>By <a href="#">John Doe</a></p>
												</div>
												<div class="blog_right">
													<span>2 October 2018</span>
												</div>
												<h4>Quisque non ipsum at lacus luctus volutpat id ac odio.</h4>
												<p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue...</p>
												<a href="blog_single_view.html" class="read_btn">Read More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6">
									<div class="blog_item">
										<div class="blog_img1">
											<img src="images/blog/img-4.jpg" alt="">
										</div>
										<div class="blog_dt1">
											<div class="blog_body">
												<div class="blog_left">
													<p>By <a href="#">John Doe</a></p>
												</div>
												<div class="blog_right">
													<span>2 October 2018</span>
												</div>
												<h4>Quisque non ipsum at lacus luctus volutpat id ac odio.</h4>
												<p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue...</p>
												<a href="blog_single_view.html" class="read_btn">Read More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6">
									<div class="blog_item">
										<div class="blog_img1">
											<img src="images/blog/img-5.jpg" alt="">
										</div>
										<div class="blog_dt1">
											<div class="blog_body">
												<div class="blog_left">
													<p>By <a href="#">John Doe</a></p>
												</div>
												<div class="blog_right">
													<span>2 October 2018</span>
												</div>
												<h4>Quisque non ipsum at lacus luctus volutpat id ac odio.</h4>
												<p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue...</p>
												<a href="blog_single_view.html" class="read_btn">Read More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6">
									<div class="blog_item">
										<div class="blog_img1">
											<img src="images/blog/img-6.jpg" alt="">
										</div>
										<div class="blog_dt1">
											<div class="blog_body">
												<div class="blog_left">
													<p>By <a href="#">John Doe</a></p>
												</div>
												<div class="blog_right">
													<span>2 October 2018</span>
												</div>
												<h4>Quisque non ipsum at lacus luctus volutpat id ac odio.</h4>
												<p>Mauris sit amet lacus vel purus facilisis cursus sed dignissim dolor. Proin at accumsan augue...</p>
												<a href="blog_single_view.html" class="read_btn">Read More</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
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
		</main>
		<!-- Body End -->
		<!-- Body End -->
		<!-- footer Start -->
			@include('front.partials.footer')
	@stop