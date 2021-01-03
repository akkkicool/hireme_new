<div class="view_chart_header">
	<h4>Social Accounts</h4>								
</div>
<div class="social200">
	{{ Form::model($social, array('url'=>route('update_account'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
		<ul>
			<li>
				<div class="social201">
					{{ Form::text('fb_acc', null , ['class' => 'scl_input', 'placeholder'=>"Http://facebook.com/johndoe..." ]) }}
					<div class="icon143 f1"><i class="fab fa-facebook-f"></i></div>
				</div>
			</li>
			<li>
				<div class="social201">
					{{ Form::text('twitter_acc', null , ['class' => 'scl_input', 'placeholder'=>"Http://twitter.com/johndoe..." ]) }}
					<div class="icon143 t1"><i class="fab fa-twitter"></i></div>
				</div>
			</li>
			<li>
				<div class="social201">
					{{ Form::text('insta_acc', null , ['class' => 'scl_input', 'placeholder'=>"Http://instagram.com/johndoe..." ]) }}
					<div class="icon143 go1"><i class="fab fa-instagram"></i></div>
				</div>
			</li>
		</ul>
		<button class="post_jp_btn" type="submit">SAVE CHANGES</button>
	{!! Form::close() !!}
</div>