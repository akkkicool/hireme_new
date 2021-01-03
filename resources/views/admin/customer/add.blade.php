@extends('admin.master')

@section('title', '| Patient')

@section('content')
	<!-- Main content -->
	<section class="content">
	  	<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
					<!-- /.box-header -->
					<div class="box-body">
						{{ Form::open(array( "method" => "post", "id"=>"addPatientForm", "enctype"=>"multipart/form-data", 'url' => url('admin').'/'.$slug.'/create'.getUrlParams(), "autocomplete"=>"off" )) }}
							<div class="form-group">
								{{ Form::label("first_name","First Name") }}
								{{ Form::text("first_name",null,array("class"=>"form-control","placeholder"=>"First Name")) }}
								@if($errors->has('first_name'))
									<span id="first_name-error" class="error text-danger">{{ $errors->first('first_name') }}</span>
								@endif
							</div>
							<div class="form-group">
								{{ Form::label("last_name","Last Name") }}
								{{ Form::text("last_name",null,array("class"=>"form-control","placeholder"=>"Last Name")) }}
								@if($errors->has('last_name'))
									<span id="last_name-error" class="error text-danger">{{ $errors->first('last_name') }}</span>
								@endif
							</div>
							<div class="form-group">
								{{ Form::label("email","Email") }}
								{{ Form::text("email",null,array("class"=>"form-control","placeholder"=>"Email..")) }}
								@if($errors->has('email'))
									<span id="email-error" class="error text-danger">{{ $errors->first('email') }}</span>
								@endif
							</div>
							<div class="form-group">
								{{ Form::label("password","Password") }}
								{{ Form::password("password",array("class"=>"form-control","placeholder"=>"Password..")) }}
								@if($errors->has('password'))
									<span id="password-error" class="error text-danger">{{ $errors->first('password') }}</span>
								@endif
							</div>
							<div class="form-group">
								{{ Form::label("password_confirmation","Retype Password") }}
								{{ Form::password("password_confirmation",array("class"=>"form-control","placeholder"=>"Retype Password")) }}
								@if($errors->has('password_confirmation'))
									<span id="password_confirmation-error" class="error text-danger">{{ $errors->first('password_confirmation') }}</span>
								@endif
							</div>

							<div class="form-group">
								{{ Form::label("phone_number","Mobile Number") }}
								<br/>
								{{ Form::tel("phone_number",null,array("class"=>"form-control intl_mobile_number","placeholder"=>"Mobile Number")) }}
								@if($errors->has('phone_number'))
									<span class="help-block">
										<strong class="text-danger">{{ $errors->first('phone_number') }}</strong>
									</span>
								@endif
								{{ Form::hidden("phone",null,array("class"=>"form-control")) }}
								{{ Form::hidden("country_code",null,array("class"=>"form-control")) }}
								{{ Form::hidden("mobile_number",null,array("class"=>"form-control")) }}
							</div>

							<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
			                  <label for="exampleInputEmail1">Gender</label>
			                  {{ Form::select('gender', (['' => 'Select Gender', 'male'=>'Male', 'female'=>"female"] ), null, ['class' => 'form-control']) }}
			                  @error('gender')
			                     <span class="help-block has-error">
			                        <strong>{{ $gender }}</strong>
			                    </span>
			                  @enderror
			                </div>
		                    <div class="form-group">
								{{ Form::label("city","City") }}
								{{ Form::text("city",null,array("class"=>"form-control","placeholder"=>"City")) }}
								@if($errors->has('city'))
									<span id="city-error" class="error text-danger">{{ $errors->first('city') }}</span>
								@endif
							</div>
		                    <div class="form-group">
				                <label>Date of Birth:</label>
				                <div class="input-group date">
				                  <div class="input-group-addon">
				                    <i class="fa fa-calendar"></i>
				                  </div>
				                  {{ Form::text("dob",null,array("class"=>"form-control pull-right","id"=>"datepicker")) }}
									@if($errors->has('dob'))
										<span id="dob-error" class="error text-danger">{{ $errors->first('dob') }}</span>
									@endif
				                </div>
				                <!-- /.input group -->
				              </div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group field_container">
										{{ Form::label('image',"Image") }}
										{{ Form::file("image",null,array("placeholder"=>"Email","class"=>"form-control", "accept" => "image/*", "id"=>"image")) }}
										@if($errors->has('image'))
											<span class="help-block">
												<strong class="text-danger">{{ $errors->first('image') }}</strong>
											</span>
										@endif
									</div>
								</div>	
								<div class="col-sm-6">
									<div id="imgContainer" style="margin-bottom: 5px;margin-top: 5px;">
										<img id="blah" src="#" alt="your image" height="100px" width="100px" style="display: none;"/>
									</div>
								</div>
							</div>	
							<div class="form-group">
								<a class="btn btn-primary" href="{{ url('admin').'/'.$slug.getUrlParams() }}">Back</a>
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
@endsection

@push('styles')
<style type="text/css">
.iti--separate-dial-code{
	width:100%;
}
</style>
@endpush


@push('scripts')
	<script>
		$(document).ready(function() {

			function readURL(input) {
			    if (input.files && input.files[0]) {
			        var reader = new FileReader();

			        reader.onload = function (e) {
			            $('#blah').attr('src', e.target.result).css('display', 'block');
			        }

			        reader.readAsDataURL(input.files[0]);
			    }
			}

			$("#image").change(function(){
			    readURL(this);
			});



			$('#datepicker').datepicker({
		      autoclose: true
		    })

		     $('#addPatientForm')
		        .bootstrapValidator({
		             excluded: [':disabled'],
		            fields: {
		                first_name: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The First Name is required and cannot be empty'
		                        },
		                        stringLength: {
			                        max: 30,
			                        message: 'The First Name must be less than 30 characters'
			                    },
			                    regexp: {
			                        regexp: /^[a-zA-Z\s]+$/,
			                      }
		                    }
		                },
		                last_name: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The Last Name is required and cannot be empty'
		                        },
		                        stringLength: {
			                        max: 30,
			                        message: 'The Last Name must be less than 30 characters'
			                    },
			                    regexp: {
			                        regexp: /^[a-zA-Z\s]+$/,
			                        message: 'You can introduce just alphabetical characters'
			                    }
		                    }
		                },
		                email: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The Email is required and cannot be empty'
		                        },
		                        regexp: {
			                        regexp: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/,
			                        message: 'Please add valid email'
			                    }
		                        
		                    }
		                },
		                gender: {
		                    validators: {
		                        notEmpty: {
		                            message: 'Please select gender'
		                        }
		                    }
		                },
		                
		                city: {
		                    validators: {
		                        stringLength: {
			                        max: 30,
			                        message: 'The City must be less than 30 characters'
			                    },
			                    regexp: {
			                        regexp: /^[a-zA-Z\s]+$/,
			                        message: 'You can introduce just alphabetical characters'
			                    }
		                    }
		                },
		                password: {
		                    validators: {
		                        notEmpty: {
		                            message: 'Please supply your password'
		                        },
		                        stringLength: {
		                            min: 6,
		                            max: 16,
		                            message: 'The password should contain 6 to 16 characters'
		                        },
		                        identical: {
		                            field: 'password_confirmation',
		                            message: 'The password and its confirm are not the same'
		                        }
		                    }
		                },
		                password_confirmation: {
		                    validators: {
		                        notEmpty: {
		                            message: 'Please supply password confirmation'
		                        },
		                        identical: {
		                            field: 'password',
		                            message: 'The password and its confirm are not the same'
		                        }
		                    }
		                },
		                phone_number: {
		                	validators: {
		                        notEmpty: {
		                            message: 'Please supply valid Phone number'
		                        },
		                        stringLength: {
		                            min: 7,
		                            max: 15,
		                            message: 'The Phone number should contain 6 to 16 characters'
		                        },
		                        regexp: {
			                        regexp: /^[0-9]+$/,
			                        message: 'You can introduce just alphabetical characters'
			                    }
		                    }
		                },
		                image: {
			                validators: {
			                    file: {
			                        extension: 'jpeg,png,jpg',
			                        type: 'image/jpeg,image/png',
			                        maxSize: 2048 * 1024,
			                        message: 'The selected file is not valid'
			                    }
			                }
			            }
		                
		            }
		        });

		        

		});
</script>

<?php mobileIntlNumberScript(); ?>
@endpush

