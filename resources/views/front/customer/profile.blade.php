@extends('front/master_without_login')

@section('title', '| Profile')


@php $segment1 = Request::segment(1) @endphp


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
						@include('front/customer/layouts/sidebar')
					</div>
					<div class="col-lg-9 col-md-8 mainpage">
						<div class="account_heading">
							<div class="account_hd_left">
								<h2>Manage Your Profile</h2>
							</div>
						</div>
						<div class="account_tabs">
							<ul class="nav nav-tabs">
								@include('front/customer/layouts/mainTab')
							</ul>
						</div>
						<div class="jobs_manage">
							<div class="row">																									
								<div class="col-lg-3">
									<div class="jobs_tabs">
										<ul class="nav job_nav nav-tabs" id="myTab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" href="#my_profile" id="my-profile-tab" data-toggle="tab">Personal Information</a>
											</li>
											
											<li class="nav-item job_nav_item">
												<a class="nav-link" href="#change_password" id="change-password-tab" data-toggle="tab">Change Password</a>
											</li>
										</ul>
										
									</div>
								</div>
								<div class="col-lg-9">
									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="my_profile" role="tabpanel">
											@include('front/customer/tabs/profileForm')
										</div>
										
										<div class="tab-pane fade" id="change_password">
											<div class="view_chart">
												@include('front/customer/tabs/changePassForm')
											</div>
										</div><!-- 
										<div class="tab-pane fade" id="delete_account" role="tabpanel">
											<div class="view_chart">
												<div class="view_chart_header">
													<h4>Deactivate Account</h4>								
												</div>
												<div class="post_job_body">
													<form>														
														<div class="form-group">
															<label class="label15">Please Explain Further**</label>
															<textarea class="textarea_input" placeholder="Type"></textarea>
														</div>
														<div class="form-group">
															<label class="label15">Password*</label>
															<input type="password" class="job-input" placeholder="Enter Password">
														</div>
														<div class="email_chk">
															<div class="ui checkbox apply_check">
																<input type="checkbox">
																<label style="color:#242424 !important;">Email Option Out.</label>
															</div>
														</div>
														<button class="post_jp_btn" type="submit">Deactivate Account</button>
													</form>
												</div>
											</div>
										</div> -->
									</div>
								</div>	
							</div>							
						</div>					
					</div>																																						
				</div>
			</div>					
		</main>
		

	@include('front.partials.footer')

@push('scripts')	


 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFQGcJvlFIcdTynzatglFAkTpgZIs-lng&libraries=places"></script>
    <script>

        var autocompleted    =  true;
        var field_id         =  "kitchen_address";
        var old_address      =  $("#"+field_id).val();
        function init() {
            var input = document.getElementById(field_id);
            var autocomplete = new google.maps.places.Autocomplete(input);
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                old_address    =  $("#"+field_id).val();
                var place = autocomplete.getPlace();
                console.log(place);
                var lat = place.geometry.location.lat();
                var lng = place.geometry.location.lng();
               
                console.log(document.getElementsByClassName('lat')[0])
                document.getElementsByClassName('lat')[0].value = lat;
                document.getElementsByClassName('lng')[0].value = lng;
                autocompleted = true;
                return false;
            });
        }
        $(document).on('keypress', '#'+field_id, function (e) {
            if (e.which == 13) e.preventDefault();
        });
        $(document).on('keyup', '#'+field_id, function (e) {
            if($(this).val() != old_address) autocompleted = false;
            if( (e.which == 46) || (e.which == 8) ){
                autocompleted = false;   
            }
        });
        $(document).on('paste', '#'+field_id, function (e) {
            autocompleted = false;
        });
        $(document).on('blur', '#'+field_id, function (e) {
            if(autocompleted == false){
                $(this).val("");
            }
        });
        google.maps.event.addDomListener(window, 'load', init);
    </script> 	<!-- Kitchen Address Work End -->


		<!-- Map Box JS -->
		<script>												
			$('#file').change(function(){
				var _token = "{{ csrf_token() }}"
				var formData = new FormData();
				formData.append('_token', _token);
				formData.append('file', $(this)[0].files[0]);
				$.ajax({
			        type: "POST",
			        url: "{{ route('update_image') }}",
			        data: formData,
			        processData: false,  // tell jQuery not to process the data
       				contentType: false,  // tell jQuery not to set contentType
			        success: function (data) {
			        	var imagePath =  "{{url('public/uploads/users/thumbnail_image/')}}/"+data;
			        	$('#changeImage').attr('src', imagePath)
			        }
			    });
			})

		</script>
@endpush			

@stop