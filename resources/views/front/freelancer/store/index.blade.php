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
							<li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
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
											<h4>Store-Front</h4>	
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
													  <th scope="col">Category</th>
													  <th scope="col">Subscription</th>
													  <th scope="col">Action</th>
													</tr>
													</thead>
													<tbody>
														@forelse($record as $v)
														<tr>
															<td>
																<div class="user_dt_trans">
																	<div class="aadd14">{{ getCategoryName($v->category_id) }}</div>
																</div>
															</td>
															<td>
																<div class="trans_badge">Unpaid</div>
															</td>
															<td style="max-width:100%;">
																<a style="width: 35px;" class='btn btn-primary' href="{{ url('store-front/edit/'.base64_encode($v->id)) }}" title="Edit"><i class='fa fa-edit'></i></a>
																<a style="width: 35px;" class='btn btn-primary' href="{{ url('store-front/view/'.base64_encode($v->id)) }}" title="View"><i class='fa fa-eye'></i></a>
															</td>
														</tr>
														@empty
														<tr>
															<td colspan="4" class="text-center">
																No Record found
															</td>
														</tr>
														@endforelse
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