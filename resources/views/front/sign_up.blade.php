@extends('front/master_without_login')

@section('title', '| Sign Up')

@section('content')
	
		<!-- Header Start -->
			@include('front.partials.header_without_login')
		<!-- Title Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Sign Up</li>
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
					<div class="col-md-6" style="text-align:center;">
						<h2>Register Manually or using Social Media  </h2>
						<div class="line-shape1">
							<img src="{{ asset('public/front/images/line.svg') }}" alt="">
						</div>
					</div>
					<div class="col-md-5">
					</div>
			</div>			
			<div class="container">
				<div class="row justify-content-md-center">	
				
					<div class="col-md-1">
					</div>				
					<div class="col-md-6">
						<div class="lg_form">
							<div class="main-heading">
							</div>
							{{ Form::open(array('id'=>'registerForm','url'=>route('register'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}

							<div class="form-group">
								{{ Form::label("first_name","Select Who You Are:", ['class' => 'label15']) }}<br/>
								<div class="btn-group btn-toggle gender"> 
									<input type="button" class="btn btn-primary active" value="Customer">
									<input type="button" class="btn btn-default" value="Freelancer">
								</div>
							</div>
							{{ Form::hidden('role_id', '2') }}
							<div class="form-group">
								{{ Form::email('email', null, ['class' => 'job-input', 'placeholder'=>"Email"
								 ]) }}
				                  @error('email')
				                     <span class="help-block has-error">
				                        <strong>{{ $message }}</strong>
				                    </span>
				                  @enderror
							</div>
							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			                  {{ Form::password('password', ['class' => 'job-input', 'placeholder'=>"Password", 'autocomplete'=>"off" ]) }}
			                  @error('password')
			                     <span class="help-block has-error">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                  @enderror
			                </div>
							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
			                  {{ Form::password('password_confirmation', ['class' => 'job-input', 'placeholder'=>"Password Confirmation", 'autocomplete'=>"off" ]) }}
			                  @error('password_confirmation')
			                     <span class="help-block has-error">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                  @enderror
			                </div>
							<div class="ui checkbox apply_check check_out checked">
								{{ Form::checkbox('accept', '1', true) }}

								<label style="color:#242424 !important;">I accept the Terms of Services</label>
								@error('accept')
			                     <span class="help-block has-error">
			                        <strong>{{ $message }}</strong>
			                    </span>
			                  @enderror
							</div>
							<button type="submit" class="lr_btn">Sign Up Now</button>
							<!-- <a href="sign_up_freelancer_profile.html" class="lr_btn">Sign Up Now</a> -->
							<div class="done145">
								<div class="done146">
									Already have an account?<a href="{{ route('login') }}">Sign in Now<i class="fas fa-angle-double-right"></i></a>
								</div>
								<div class="done147">
									<a href="{{ route('forget') }}">Forgot Password?</a>
								</div>
							</div>
							{!! Form::close() !!}

						</div>						
					</div>

					<div class="col-md-1">
						<div class="vl">
							<span class="vl-innertext">or</span>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="lg_form">
							<div class="main-heading">
							</div>
							<div class="form-group">
								<a href="#" class="fb btn">
									<i class="fa fa-facebook fa-fw"></i> Login with Facebook
								</a>					
							</div>
							<div class="form-group" style="margin-top:2px;">
								<a href="#" class="google btn"><i class="fa fa-google fa-fw">
									</i> Login with Google+
								</a>					
							</div>
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
<script>
			$('.gender').click(function() {
			    $(this).find('.btn').toggleClass('active');  
			    if($(this).find('.active').attr('value') == 'Customer'){
			    	$("input[name=role_id]").val(2);
			    }else{
			    	$("input[name=role_id]").val(3);
			    }

			    if ($(this).find('.btn-primary').length>0) {
			    	$(this).find('.btn').toggleClass('btn-primary');
			    }
			    $(this).find('.btn').toggleClass('btn-default');
			});
		</script>
@endpush			

@stop