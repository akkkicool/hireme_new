
@extends('front/master_without_login')

@section('title', '| Update Services')

@push('styles')
<style>
			.btn-152{
				padding: 0px 20px;
				height: 50px;
				border: 0;
				margin: 45px 0 0;
				width: 100%;
			}

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

			.box1{
				display: none;
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
							<li class="breadcrumb-item active" aria-current="page">My Preferences</li>
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
							<h2>Fill Your Preferences</h2>
							<div class="line-shape1">
								<img src="{{ asset('public/front/images/line.svg') }}" alt="">
							</div>
						</div>
						<div class="post501">
							{{ Form::open(array('id'=>'preferenceForm','url'=>route('preference'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
								<div class="row">
									<!-- <div class="col-lg-12" style="margin-top: 50px; text-align:right;">
										<h3>Personal Details</h3>
									</div>	 -->
									<div class="col-lg-12">
										<div class="form-group">
											<label class="label15">Meeting Preference*</label>
											<div style="width: 100%; line-height: 30px;">
												<input type="radio" name="location_preference" id="travel_to_client" value="travel_to_client"> You Travel to Client<br/>
												<input type="radio" name="location_preference" id="client_travel_to_me"  value="client_travel_to_me"> Client Travel to You 
											</div>
										</div>
									</div>													
									<div class="col-lg-12 box1 travel_to_client" style="height: 110px;">
										<div class="form-group">
											<label class="label15">Maximum Distance You Can Travel*</label>
											<div class="slidecontainer">
												<input name="range_in_km" type="range" min="1" max="100" value="20" class="slider" id="myRange">
												<p><span id="demo"></span> KMs</p>
											</div>
										</div>
									</div>
									<div class="col-lg-12 box1 client_travel_to_me" style="height: 110px;">
										<input class="lat" id="lat" name="lat" type="hidden">
										<input class="lng" id="lng" name="lng" type="hidden">
										<div class="form-group box1 client_travel_to_me">
											<label class="label15">Location Where Your Client Can Visit*</label>
											<div class="smm_input">
												<input name="location" type="text" class="job-input" placeholder="Type Address" id="kitchen_address">
												<div class="loc_icon"><i class="fas fa-crosshairs"></i></div>								
											</div>															
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="label15">Cell for Client Contact*</label>
											<input type="tel" placeholder="1-234-567-8910" class="job-input" id="phone" name="phone">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="label15">Email for Client Contact*</label>
											<input name="email" type="email" class="job-input" placeholder="Enter Your Email Address">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label class="label15">Category*</label>
											<div class="ui fluid multiple search selection dropdown skills-search">
												<input name="category" type="hidden" value="" data-validate="true">
												<i class="dropdown icon"></i>
												<input class="search" autocomplete="off" tabindex="0">
												<span class="sizer" style=""></span>
												<div class="default text">Select Your Service Category</div>
												<div class="menu transition hidden category" tabindex="-1">
													@foreach($category as $key => $val)
													<div class="item" data-value="{{$key}}">{{$val}}</div>
													@endforeach									
																																				
												</div>
											</div>
										</div>
									</div>												
									<div class="col-lg-6">
										<div class="form-group">
											<label class="label15">Pay Rate*</label>
											<div class="ui fluid search selection dropdown skills-search">
												<input name="rate" type="hidden" value="" data-validate="true">
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
									<div class="col-lg-12">
										<div class="form-group">
											<label class="label15">What's included for your rate?*</label>
											<div class="ui fluid multiple search selection dropdown skills-search">
												<input name="sub_category" type="hidden" value="">
												<i class="dropdown icon"></i>
												<input class="search" autocomplete="off" tabindex="0"><span class="sizer"></span><span class="sizer" style=""></span><div class="default text">Services</div>
												<div class="menu transition hidden sub_category" tabindex="-1">
													<!-- <div class="item selected" data-value="angular">Hair cut</div>
													<div class="item" data-value="css">Hair coloring</div>
													<div class="item" data-value="design">Spa</div> -->
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label class="label15">Total Experience*</label>
											<div class="ui fluid search selection dropdown skills-search">
												<input name="exp" type="hidden" value="">
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
									<div class="col-lg-9">
										<div class="form-group">
											<label class="label15">Tagline*</label>
											<input name="tagline" type="text" class="job-input" placeholder="I am an expert hairdresser">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label class="label15">Your Story*</label>
											<div class="description_dtu">
												<textarea name="description"  class="textarea70" placeholder="Describe your experience, skills, etc. In complete details. This is your chance to show off."></textarea>
											</div>
										</div>
									</div>

									<div class="col-lg-12">
										
										<button type="submit" class="lr_btn">Continue</button>
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
	<!-- footer Start -->
			@include('front.partials.footer')

@push('scripts')
 <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFQGcJvlFIcdTynzatglFAkTpgZIs-lng&libraries=places"></script>
 <script>
 	var _token = '{{ csrf_token() }}';
		$(document).ready(function(){
			if($('input[name="category"]').val()){
				var html = '';
				    $.ajax({
				        type: "POST",
				        url: "{{ route('get_child_category') }}",
				        data: {_token : _token, category_id : $('input[name="category"]').val() },
				        success: function (data) {
				        	$.each(data,function(index, value){
								   html += '<div class="item" data-value="'+index+'">'+value+'</div>'
								});
				            // 
				            $('.sub_category').html(html);
				        }
				    });
			}
					

			$('input[name="category"]').change(function(){
					var html = '';
				    $.ajax({
				        type: "POST",
				        url: "{{ route('get_child_category') }}",
				        data: {_token : _token, category_id : $(this).val() },
				        success: function (data) {
				        	$.each(data,function(index, value){
								   html += '<div class="item" data-value="'+index+'">'+value+'</div>'
								});
				            // 
				            $('.sub_category').html(html);
				        }
				    });

				  
			});

		    $('input[type="radio"]').click(function(){
		        var inputValue = $(this).attr("id");
		        var targetBox = $("." + inputValue);
		        $(".box1").not(targetBox).hide();
		        $(targetBox).show();
		    });

		    var slider = document.getElementById("myRange");
			var output = document.getElementById("demo");
			output.innerHTML = slider.value;

			slider.oninput = function() {
			  output.innerHTML = this.value;
			}
		});
		</script>

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
                // document.getElementsByClassName('location')[0].value = place.formatted_address;
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