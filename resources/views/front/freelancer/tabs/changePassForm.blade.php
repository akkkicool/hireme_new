<div class="view_chart_header">
	<h4>Change Password</h4>								
</div>
<div class="post_job_body">
	{{ Form::open(array('id'=>'changePassword','url'=>route('change_password'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
		<div class="form-group">
			<label class="label15">Old Password*</label>
			{{ Form::password('old_password', ['class' => 'job-input', 'placeholder'=>"Enter Old Password", 'autocomplete'=>"off" ]) }}
		</div>
		<div class="form-group">
			<label class="label15">New Password*</label>
			{{ Form::password('password', ['class' => 'job-input', 'placeholder'=>"Password", 'autocomplete'=>"off" ]) }}
		</div>
		<div class="form-group">
			<label class="label15">Confirm Password*</label>
			{{ Form::password('password_confirmation', ['class' => 'job-input', 'placeholder'=>"Password", 'autocomplete'=>"off" ]) }}
		</div>
		<button class="post_jp_btn" type="submit">Change Password</button>
	{!! Form::close() !!}
</div>