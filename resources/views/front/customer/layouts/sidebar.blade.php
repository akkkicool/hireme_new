<div class="account_dt_left">
	<div class="job-center-dt">
		@if(Auth::user()->image)
		<img src="{{ url('public/uploads/users/thumbnail_image/'.Auth::user()->image) }}" alt="" id="changeImage">
		@else
		<img src="{{ url('public/front/images/homepage/candidates/hairdresser-659145_640.jpg') }}" alt="" id="changeImage">
		@endif
		<div class="job-urs-dts">
			<div class="dp_upload">
				<input type="file" id="file">
				<label for="file">Upload Photo</label>
			</div>
			<h4>{{ Auth::user()->full_name}}</h4>
		<!-- 	<span>Hairdresser</span> -->
			<!-- <div class="avialable">Available Full Time<a href="#"><i class="far fa-edit"></i></a></div> -->
		</div>													
	</div>
	
	<div class="rlt_section">
		<div class="rtl_left">
			<h6>Location</h6>
		</div>
		<div class="rtl_right">
			<span><i class="fas fa-map-marker-alt lc_icon"></i> {{ Auth::user()->address }}</span>
		</div>
		<div class="my_location">
			<div id="map"></div>
		</div>
		<ul class="rlt_section2">
			<li>
				<div class="rtl_left2">
					<h6>Age</h6>
				</div>
				<div class="rtl_right2">
					<span>{{ calculateAge(Auth::user()->dob) }}</span>
				</div>
			</li>
			<li>
				<div class="rtl_left2">
					<h6>Gender</h6>
				</div>
				<div class="rtl_right2">
					<span>{{ ucwords(Auth::user()->gender) }}</span>
				</div>
			</li>
		</ul>
	</div>
</div>

