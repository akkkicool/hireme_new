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
							<li class="breadcrumb-item active" aria-current="page">My Portfolio</li>
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
								<h2>Manage Your Portfolio</h2>
							</div>
						</div>
						<div class="account_tabs">
							<ul class="nav nav-tabs">
							@include('front/freelancer/layouts/mainTab')
							</ul>
						</div>
						<div class="portfolio_heading">
							<div class="portfolio_left">
								<h4>Portfolio</h4>				
							</div>
							<!-- <div class="portfolio_right">
								<button class="add_portfolio_btn" type="button" data-toggle="modal" data-target="#addportfolioModal">Manage Portfolio</button>
							</div>		 -->
						</div>
						<div class="dsh150">
							<div class="row">
								@if($record->storePortfolio()->exists())
								<?php //gs($record->storePortfolio); die; ?>
									@foreach($record->storePortfolio()->where('type', 1)->get() as $val)
										<div class="col-lg-4 delete_row_{{$val->id}}">
											<div class="portfolio_item">
												<div class="portfolio_img">										
													<img src="{{ url('public/uploads/portfolio/'.$val->file_name ) }}" alt="">
													<div class="portfolio_overlay">
														<div class="overlay_items">
															<button class="delete_portfolio_btn" id="{{ $val->id }}"><i class="far fa-trash-alt"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									@endforeach

									@foreach($record->storePortfolio()->where('type', 2)->get() as $val)
										<div class="col-lg-4 delete_row_{{$val->id}}">
											<div class="portfolio_item">
												<div class="portfolio_img">										
													<video></video>
													<div class="portfolio_overlay">
														<div class="overlay_items">
															<button class="delete_portfolio_btn" id="{{ $val->id }}"><i class="far fa-trash-alt"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									@endforeach
								@endif
							</div>
						</div>

						
					</div>																																						
				</div>
			</div>		

			<div class="apply_job_form">
			<div class="modal fade" id="addportfolioModal" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-jb" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Add Portfolio</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="jb_frm">
								<h3>Simple & Best Way To Showcase Your Work</h3>
								<div class="form_inputs">
									<div class="form-group">
										<input type="text" class="job-input" placeholder="Title">
									</div>
									<div class="form-group">
										<input type="text" class="job-input" placeholder="http://behance.net/portfolio_name">
									</div>								
									<div class="file-form">
										<input type="file" id="file2">
										<label for="file">Browse File</label>
										<p>Size : 270x200 | Max Less Then1 MB</p>
									</div>									
								</div>
								<div class="apply_btn150">
									<button class="apply_job50" type="button">Add Portfolio</button>
									<button class="apply_job_close" type="button" data-dismiss="modal">CANCEL</button>
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


		<!-- Map Box JS -->
		<script>		

			var _token = "{{ csrf_token() }}"

			$('.delete_portfolio_btn').click(function(e){
				var id = $(this).attr('id');

				$.ajax({
			        type: "POST",
			        url: "{{ route('delete_portfolio') }}",
			        data: { _token:_token, id : id},
			        success: function (data) {
			        	$('.delete_row_'+id).remove();
			        }
			    });
				
			})
										
			// $('#file').change(function(){
			// 	var _token = "{{ csrf_token() }}"
			// 	var formData = new FormData();
			// 	formData.append('_token', _token);
			// 	formData.append('file', $(this)[0].files[0]);
			// 	$.ajax({
			//         type: "POST",
			//         url: "{{ route('update_image') }}",
			//         data: formData,
			//         processData: false,  // tell jQuery not to process the data
   //     				contentType: false,  // tell jQuery not to set contentType
			//         success: function (data) {
			//         	var imagePath =  "{{url('public/uploads/users/thumbnail_image/')}}/"+data;
			//         	$('#changeImage').attr('src', imagePath)
			//         }
			//     });
			// })

		</script>
@endpush		

@stop