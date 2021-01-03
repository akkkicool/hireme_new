<div class="view_chart">
	<div class="view_chart_header">
		<h4>Personal Information</h4>								
	</div>
	<div class="post_job_body">
		{{ Form::model($user, array('id'=>'','url'=>route('customer_profile'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
			<div class="row">														
				<div class="col-lg-6">
					<div class="form-group">
						<label class="label15">First Name*</label>
						{{ Form::text('first_name', null, ['class' => 'job-input' ]) }}

						@if($errors->has('first_name'))
				           <span class="help-block">
				              <strong>{{ $errors->first('first_name') }}</strong>
				          </span>
						@endif
					</div>
					
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="label15">Last Name*</label>
						{{ Form::text('last_name', null, ['class' => 'job-input' ]) }}
						@if($errors->has('last_name'))
				           <span class="help-block">
				              <strong>{{ $errors->first('last_name') }}</strong>
				          </span>
						@endif
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="label15">Email Address*</label>
						{{ Form::text('email', null, ['class' => 'job-input', 'disabled'=>'disabled' ]) }}
						<!-- <input type="email" class="job-input" value="mariawilliams@gmail.com" disabled> -->

					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label class="label15">Birthday*</label>
						<div class="smm_input">
							<!-- <input type="text" class="job-input datepicker-here" data-language="en"  value="07/28/1987"> -->
							{{ Form::text('dob', null, ['class' => 'job-input datepicker-here', 'data-language'=>"en" ]) }}
							<div class="mix_max"><i class="fas fa-calendar-alt"></i></div>	

							@if($errors->has('dob'))
					           <span class="help-block">
					              <strong>{{ $errors->first('dob') }}</strong>
					          </span>
							@endif														
						</div>															
					</div>
				</div>
				<!-- <div class="col-lg-12">
					<div class="form-group">
						<label class="label15">Languages*</label>
						<div class="ui fluid multiple search selection dropdown skills-search">
							<input name="tags" type="hidden" value="">
							<i class="dropdown icon"></i>
							<input class="search" autocomplete="off" tabindex="0"><span class="sizer"></span><span class="sizer" style=""></span><div class="default text">Language You Speak</div>
							<div class="menu transition hidden" tabindex="-1">
								<div class="item selected" data-value="angular">English</div>
								<div class="item selected" data-value="css">French</div>
								<div class="item selected" data-value="design">Italian</div>
								<div class="item selected" data-value="design">Spanish</div>
							</div>
						</div>
					</div>
				</div>	 -->													
				<div class="col-lg-12">
					<div class="form-group">
						<label class="label15">Location*</label>
						<div class="smm_input">
							{{ Form::hidden('lat', null, ['class'=>'lat']) }}
							{{ Form::hidden('lng', null, ['class'=>'lng']) }}
							{{ Form::text('address', null, ['class' => 'job-input', 'id'=>"kitchen_address" ]) }}
							<div class="loc_icon"><i class="fas fa-crosshairs"></i></div>		

							@if($errors->has('address'))
					           <span class="help-block">
					              <strong>{{ $errors->first('address') }}</strong>
					          </span>
							@endif													
						</div>															
					</div>															
				</div>				
				<div class="col-lg-12">
					<button class="post_jp_btn" type="submit">SAVE CHANGES</button>
				</div>
			</div>
		{!! Form::close() !!}
	</div>
</div>