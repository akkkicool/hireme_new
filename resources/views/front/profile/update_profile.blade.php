@extends('front/master_without_login')

@section('title', '| Sign Up')

@push('styles')
<style>
	.btn-152{
		padding: 0px 20px;
		height: 50px;
		border: 0;
		margin: 45px 0 0;
		width: 100%;
	}

	.lr_btn{
		font-size: 16px;
		font-weight: 500;
		background-color: #ffcc00;
		box-shadow: 0 16px 29px #0BBEAD69;
		border-radius: 50px;
	}
</style>
@endpush		


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
							<li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Create Customer Profile</li>
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
					<div class="col-md-1">
					</div>
					<div class="col-md-10" style="background: #fafafa; padding: 50px;">							
						<div class="main-heading bids_heading">
							<h2>Fill Personal Details</h2>
							<div class="line-shape1">
								<img src="{{ asset('public/front/images/line.svg') }}" alt="">
							</div>
						</div>
						<div class="post501">
						{{ Form::open(array('id'=>'updateProfileForm','url'=>route('update_profile'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}	
								<div class="row">
									<!-- <div class="col-lg-12" style="margin-top: 50px; text-align:right;">
										<h3>Personal Details</h3>
									</div>	 -->													
									<div class="col-lg-6">
										<div class="form-group">
											<label class="label15">First Name*</label>
											{{ Form::text('first_name', null, ['class' => 'job-input', 'placeholder'=>"Your First Name"
											 ]) }}
							                  @error('first_name')
							                     <span class="help-block has-error">
							                        <strong>{{ $message }}</strong>
							                    </span>
							                  @enderror
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<label class="label15">Last Name*</label>
											{{ Form::text('last_name', null, ['class' => 'job-input', 'placeholder'=>"Your Last Name"
											 ]) }}
							                  @error('last_name')
							                     <span class="help-block has-error">
							                        <strong>{{ $message }}</strong>
							                    </span>
							                  @enderror
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="label15">Gender*</label>
											<div style="width: 100%;">
												 {{ Form::radio('gender', 'male' , true) }} Male &nbsp;&nbsp;&nbsp;
												 {{ Form::radio('gender', 'female' , false) }} Female 
												 @error('gender')
								                     <span class="help-block has-error">
								                        <strong>{{ $message }}</strong>
								                    </span>
								                  @enderror
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="label15">Birthday*</label>
											<div class="smm_input">
												{{ Form::text('dob', null, ['class' => 'job-input datepicker-here', 'placeholder'=>"Enter Your Birth Date", 'data-language'=>"en"
													 ]) }}
												<div class="mix_max"><i class="fas fa-calendar-alt"></i></div>	
												 @error('dob')
								                     <span class="help-block has-error">
								                        <strong>{{ $message }}</strong>
								                    </span>
								                  @enderror														
											</div>															
										</div>
									
									<input class="lat" id="lat" name="lat" type="hidden">
									<input class="lng" id="lng" name="lng" type="hidden">
									<input class="form-control" id="tz" name="timezone" type="hidden">
								</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label class="label15">Location*</label>
											<div class="smm_input">
												{{ Form::text('address', null, ['class' => 'job-input', 'placeholder'=>"Type Address", 'id'=>"kitchen_address"
													 ]) }}
												<div class="loc_icon"><i class="fas fa-crosshairs"></i></div>
												@error('address')
								                     <span class="help-block has-error">
								                        <strong>{{ $message }}</strong>
								                    </span>
								                  @enderror								
											</div>															
										</div>															
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="avtar_dp">
												<img id="blah" src="{{ asset('public/front/images/profile_dp.jpg') }}" alt="">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="image-upload-wrap1 ml5">
												{{ Form::file('image', ['class'=>"file-upload-input1", "id"=>"file3", "onchange"=>"readURL(this);", 'accept'=>"image/*"]) }}
												<!-- <input class="file-upload-input1" id="file3" type="file" onchange="readURL(this);" accept="image/*"> -->

												<div class="drag-text1">
													Upload Image
												</div>																
											</div>
											@error('image')
								                     <span class="help-block has-error">
								                        <strong>{{ $message }}</strong>
								                    </span>
								                  @enderror		
										</div>																
									</div>			
									<div class="col-lg-12">
										<button type="submit" class="lr_btn">Submit</button> 
									</div>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
					<div class="col-md-1">
					</div>
					<div class="col-md-4">
						</div>
					</div>																																					
				</div>
			</div>					
		</main>
		<!-- Body End -->
		<!-- footer Start -->
			@include('front.partials.footer')

@push('scripts')
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFQGcJvlFIcdTynzatglFAkTpgZIs-lng&libraries=places"></script>
    <script>

    	 $(document).ready(function(){
		      $('#tz').val(moment.tz.guess());
		    })

    	function readURL(input) {
			    if (input.files && input.files[0]) {
			        var reader = new FileReader();

			        reader.onload = function (e) {
			            $('#blah').attr('src', e.target.result).css('display', 'block');
			        }

			        reader.readAsDataURL(input.files[0]);
			    }
			}

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

@endpush			

@stop