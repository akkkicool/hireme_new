@extends('front/master_without_login')

@section('title', '| Portfolio')

@php $segment1 = Request::segment(1); @endphp

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
							<li class="breadcrumb-item active" aria-current="page">My Profile</li>
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
					<div class="col-lg-3 col-md-4">
						@include('front/freelancer/layouts/sidebar')
					</div>
					<div class="col-lg-9 col-md-8 mainpage">
						<div class="account_heading">
							<div class="account_hd_left">
								<h2>Manage Your Store Front</h2>
							</div>
						</div>
						<div class="account_tabs">
							<ul class="nav nav-tabs">
								@include('front/freelancer/layouts/mainTab')
							</ul>
						</div>
						<div class="jobs_manage">
							<div class="row">	
								<div class="col-lg-12">
									<div class="view_chart">
										<div class="view_chart_header">
											<h4>Transactions</h4>	
											<div style="text-align:right">
								                <a href="{{ route('store_create') }}" class="btn btn-info btn-sm" style="width: 35px;" >
								                  <i class="fa fa-plus"></i></a>
								             </div>								
										</div>
										<div class="transaction_body">
											<div class="table-responsive-md">
												<table class="table table-striped">
												<thead>
													<tr>
													  <th scope="col">Freelancer</th>
													  <th scope="col">Service Offered</th>
													  <th scope="col">Payment</th>
													  <th scope="col">Action</th>
													</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">
																<div class="user_dt_trans">
																	<div class="aadd14">Maria Williams</div>
																</div>
															</th>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">Hair cut, Beard Trimming</div>
																</div>
															</td>
															<td>
																<div class="user_dt_trans">
																	<p>50</p>
																</div>
															</td>
															<td>
																<div class="trans_badge">Paid</div>
															</td>
														</tr>
													</tbody>
												</table>	
											</div>
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
	@stop