
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
									<h6>Rating</h6>
								</div>
								<div class="rtl_right">
									<div class="star">
										<i class="fas fa-star checked"></i>
										<i class="fas fa-star checked"></i>
										<i class="fas fa-star checked"></i>
										<i class="fas fa-star checked"></i>
										<i class="fas fa-star"></i>								
										<span>4.0</span> 									
									</div>
								</div>
							</div>
							<!-- <div class="group_skills_bar">
								<h6>Profile Completeness</h6>
								<div class="group_bar1">
									<span>85%</span>
									<div class="progress skill_process">
										<div class="progress-bar progress_bar_skills" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<p>Fill All Required Details</p>
							</div> -->
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
											<h6>Rate</h6>
										</div>
										<div class="rtl_right2">
											<span>${{ Auth::user()->profile->rate }}</span>
										</div>
									</li>
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
											<h6>Experience</h6>
										</div>
										<div class="rtl_right2">
											<span>{{ (Auth::user()->profile->exp == '10+') ? "Above 10 Years" : ((Auth::user()->profile->exp == 1)  ? Auth::user()->profile->exp." Year" : Auth::user()->profile->exp." Years") }}</span>
										</div>
									</li>
								</ul>
							</div>
							<!-- <div class="my_websites">
								<ul>
									<li><a href="#" class="web_link"><i class="fas fa-globe"></i>www.companysite.com</a></li>
								</ul>
							</div> -->
							<div class="social_section3 mb80">
								<div class="social_leftt3">
									<h6>Contact Social Account</h6>
								</div>
								<ul class="social_accounts">
									@if(Auth::user()->profile->fb_acc)
									<li><a href="{{ Auth::user()->profile->fb_acc }}" class="social_links" target="_blank"><i class="fab fa-facebook-f f1"></i>{{ Auth::user()->profile->fb_acc }}</a></li>
									@endif 
									
									@if(Auth::user()->profile->insta_acc)
									<li><a href="{{ Auth::user()->profile->insta_acc }}" class="social_links" target="_blank"><i class="fab fa-instagram l1"></i>{{ Auth::user()->profile->insta_acc }}</a></li>
									@endif

									@if(Auth::user()->profile->twitter_acc)
									<li><a href="{{ Auth::user()->profile->twitter_acc }}" class="social_links" target="_blank"><i class="fab fa-twitter t1"></i>{{ Auth::user()->profile->twitter_acc }}</a></li>
									@endif
								</ul>
							</div>
						</div>
				
