@extends('front/master_without_login')

@section('title', '| Home')

@section('content')
	
		<!-- Header Start -->
			@include('front.partials.header_without_login')
		<!-- Header End -->
		<!-- Body Start -->	
		<!-- Header End -->
		<!-- Title Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Sign In</li>
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
						<h2>Login Manually or using Social Media  </h2>
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
							{{ Form::open(array('id'=>'loginForm','url'=>route('login'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
							<div class="main-heading">
							</div>
							 <div class="form-group">
						        {{ Form::text('email', null, ['class' => 'job-input', 'placeholder'=>"Email"]) }}

						         @error('email')
						           <span class="help-block">
						              <strong>{{ $message }}</strong>
						          </span>
						        @enderror
						      </div>
							<div class="form-group">
						     {{ Form::password('password', ['class' => 'job-input', 'placeholder'=>"Password" ]) }}
						         @error('password')
						           <span class="help-block">
						              <strong>{{ $message }}</strong>
						          </span>
						        @enderror
						     </div>	
							{!! Form::submit('Sign In Now', ['class' => 'lr_btn']) !!}					
							<div class="done145">
								<div class="done146">
									Need an account?<a href="{{ route('register') }}">Join us Now<i class="fas fa-angle-double-right"></i></a>
								</div>
								<div class="done147">
									<a href="{{ route('forget') }}">Forgot Password?</a>
								</div>
							</div>
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
	@stop