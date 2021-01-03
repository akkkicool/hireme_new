<div class="view_chart_header">
	<h4>Service Details</h4>								
</div>
<div class="post_job_body">
	{{ Form::model($service, array('id'=>'updateService','url'=>route('change_password'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
		<div class="row">						
			<div class="col-lg-12">
				<div class="form-group">
					<label class="label15">Tagline*</label>
					<!-- <input type="text" class="job-input" value="I am an expert hairdresser"> -->
					{{ Form::text('tagline', null,  ['class' => 'job-input', 'autocomplete'=>"off" ]) }}
				</div>
			</div>
			<div class="col-lg-12">
				<div class="form-group">
					<label class="label15">Your Story*</label>
					<div class="description_dtu">
						<!-- <textarea class="textarea70">I have been working as a hairdresser for almost 5 years. I specialize in hair cutting, curling, coloring, waxing, facials, tanning, etc.</textarea> -->
						{!! Form::textarea('description',null,['class'=>'textarea70', 'rows' => 2, 'cols' => 40]) !!}

					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label class="label15">Total Experience*</label>
					<div class="ui fluid search selection dropdown skills-search">
						<!-- <input name="tags" type="hidden" value=""> -->
						{!! Form::hidden('exp',null) !!}
						<i class="dropdown icon"></i>
						<input class="search" autocomplete="off" tabindex="0">
						<span class="sizer" style=""></span>
						<div class="default text">5 Years</div>
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
			<div class="col-lg-6">
				<div class="form-group">
					<label class="label15">Pay Rate*</label>
					<div class="ui fluid search selection dropdown skills-search">
						<!-- <input name="tags" type="hidden" value=""> -->
						{!! Form::hidden('rate',null,[]) !!}
						<i class="dropdown icon"></i>
						<input class="search" autocomplete="off" tabindex="0">
						<span class="sizer" style=""></span>
						<div class="default text">USD 25</div>
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
					<label class="label15">Category*</label>
					<div class="ui fluid search multiple selection dropdown skills-search">
						{!! Form::hidden('category',null,[]) !!}
						<i class="dropdown icon"></i>
						<input class="search" autocomplete="off" tabindex="0">
						<span class="sizer" style=""></span>
						<div class="default text">Select Your Service Category</div>
						<div class="menu transition hidden" tabindex="-1">
							<!-- <div class="item" data-value="level1">Car Detailer</div>										
							<div class="item" data-value="level2">Facials</div>										
							<div class="item" data-value="level3">Hairdresser</div>										
							<div class="item" data-value="level4">Nails</div>										
							<div class="item" data-value="level5">Computer Lessons</div>
							<div class="item" data-value="level6">CPR / First Aid</div>	 -->	
							@foreach($category as $key => $val)
								<div class="item" data-value="{{$key}}">{{$val}}</div>
							@endforeach	
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="form-group">
					<label class="label15">What's included for your rate?*</label>
					<div class="ui fluid multiple search selection dropdown skills-search sub_cat_div">
						{!! Form::hidden('sub_category',null,['class'=>'sub_cat']) !!}
						<i class="dropdown icon"></i>
						<input class="search" autocomplete="off" tabindex="0"><span class="sizer"></span><span class="sizer" style=""></span><div class="default text">Services</div>
						<div class="menu transition hidden sub_category" tabindex="-1">
							<!-- <div class="item selected" data-value="angular">Hair cut</div>
							<div class="item selected" data-value="css">Hair coloring</div>
							<div class="item selected" data-value="design">Spa</div> -->
							@foreach($sub_category as $key => $val)
								<div class="item" data-value="{{$key}}">{{$val}}</div>
							@endforeach	
						</div>
					</div>
				</div>
			</div>				
			<div class="col-lg-12">
				<button class="post_jp_btn" type="submit">SAVE CHANGES</button>
			</div>
		</div>
	{!! Form::close() !!}
</div>

@push('scripts')
<script>
 	var _token = '{{ csrf_token() }}';
			$('input[name="category"]').change(function(){
				$('.sub_cat_div').find('a').remove();
				$('.sub_category').html('');
					var html = '';
				    $.ajax({
				        type: "POST",
				        url: "{{ route('get_child_category') }}",
				        data: {_token : _token, category_id : $(this).val() },
				        success: function (data) {
				        	$('.sub_cat').val('');
				        	$.each(data,function(index, value){
								   html += '<div class="item" data-value="'+index+'">'+value+'</div>'
								});
				            // 
				            $('.sub_category').html(html);
				        }
				    });

				  
			});
		</script>
@endpush