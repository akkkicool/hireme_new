@extends('front/master_without_login')

@section('title', '| Home')

@push('styles')
<style>
			@media  (min-width: 796px) {
				.btn {
				  width: 75%;
				  padding: 12px;
				  border: none;
				  border-radius: 4px;
				  margin: 5px 0;
				  opacity: 0.85;
				  display: inline-block;
				  font-size: 17px;
				  line-height: 20px;
				  text-decoration: none; /* remove underline from anchors */
				}
			}

			@media  (max-width: 796px) {
				.btn {
				  width: 100%;
				  padding: 12px;
				  border: none;
				  border-radius: 4px;
				  margin: 5px 0;
				  opacity: 0.85;
				  display: inline-block;
				  font-size: 17px;
				  line-height: 20px;
				  text-decoration: none; /* remove underline from anchors */
				}
			}
		</style>
		
@endpush

@section('content')

		<!-- Header Start -->
			@include('front.partials.header_without_login')
		
			<!-- Title Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
						</ol>
					</div>		
				</div>		
			</div>		
		</div>
		<!-- Title Start -->
		<!-- Body Start -->	
		<main class="browse-section">				
			<div class="container">
				<div class="row justify-content-md-center">					
					<div class="col-md-6">
						<div class="lg_form">
							<div class="main-heading">
								<h2>Reset Password</h2>
								<div class="line-shape1">
									<img src="{{ asset('public/front/images/line.svg') }}" alt="">
								</div>
							</div>
							<p class="forgot_des">Enter your email and we'll send a link to reset your password.</p>
							{{ Form::open(array('id'=>'loginForm','url'=>route('reset', ['token' => $slug]),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
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
							<button class="lr_btn" type="submit">Reset Password</button>
							{!! Form::close() !!}
							<div class="done140">
								Go to<a href="sign_in.html">Sign in<i class="fas fa-angle-double-right"></i></a>
							</div>
						</div>						
					</div>																																										
				</div>				
			</div>					
		</main>
		<!-- Body End -->
				<!-- footer Start -->
			@include('front.partials.footer')
	@stop