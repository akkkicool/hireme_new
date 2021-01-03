@extends('admin/master')

@section('title', '| Global Settings')

@section('content')
	<?php 
		$all_categories = [
			"G" 	=> 	"Global",
			"S" 	=> 	"Social",
		//	"PP" 	=> 	"Stripe Payment",
		]; 
	?>
	

	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						@foreach($all_categories as $cat_key => $cat_value)
							<li class="{{ ($cat_key=='G')? 'active' : '' }}"><a href="#{{ str_replace(' ','_',strtolower($cat_value)) }}" data-toggle="tab">{{$cat_value}}</a></li>
						@endforeach
					</ul>
					<div class="tab-content">
						@foreach($all_categories as $cat_key => $cat_value)
							<div class="tab-pane {{ ($cat_key=='G')? 'active' : '' }}" id="{{ str_replace(' ','_',strtolower($cat_value)) }}">
								<!-- <form class="form-horizontal"> -->
								{{ Form::open(array("method"=>"post","class"=>"form-horizontal","url"=>url('admin/profile_update'), "enctype"=>"multipart/form-data")) }}
									@if(!empty($records))
										@foreach($records as $record_key=>$record)
											@if($record->category == $cat_key)
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-field-{{ $record->id }}">{{ $record->label }}</label>
													<div class="col-sm-8">
														@if($record->type == 'textarea')
															<textarea class="form-control" id="input-field-{{ $record->id }}" name="{{ $record->slug }}" placeholder="{{ $record->label }}" rows="2" cols="40" {{ ($record->required == 1)? 'required' : '' }}>{{ ($record->value) ? $record->value : '' }}</textarea>
														@elseif($record->type == 'select')
															<select class="form-control" id="input-field-{{ $record->id }}" name="{{ $record->slug }}" {{ ($record->required == 1)? 'required' : '' }}>
																@if($record->options)
																	@foreach(json_decode($record->options) as $opt_key=>$opt_value)
																		<option value="{{$opt_key}}" {{ ($record->value == $opt_key)? "selected" : "" }}>{{ title_case($opt_value) }}</option>
																	@endforeach
																@endif
															<select>
														@elseif($record->type == 'checkbox')
															<input class="" id="input-field-{{ $record->id }}" name="{{ $record->slug }}" type="{{ $record->type }}" value="{{ $record->value }}" placeholder="{{ $record->label }}" {{ ($record->value == "true")? "checked='checked'" : "" }} {{ ($record->required == 1)? 'required' : '' }}>
														@else
															<input class="form-control" id="input-field-{{ $record->id }}" name="{{ $record->slug }}" type="{{ $record->type }}" value="{{ $record->value }}" placeholder="{{ $record->label }}" data-value_type="{{ $record->value_type }}" {{ ($record->required == 1)? 'required' : '' }}>
														@endif
														<span class="help-block" id="success-msg-{{ $record->id }}" style="display:none;">
															<strong class="text-success">{{ $record->label }} updated successfully</strong>
														</span>
														<span class="help-block" id="error-msg-{{ $record->id }}" style="display:none;">
															<strong class="text-danger">Invalid {{ $record->label }}</strong>
														</span>
														<span class="help-block " id="error-msgs-{{ $record->id }}" style="display:none;">
															<strong class="text-danger"></strong>
														</span>
													</div>
													<div class="col-sm-2">
														<img id="loader-img-{{$record->id}}" src="{{ url('public/uploads/spinner.gif') }}" style="display:none;height:50px;width:50px;" />
														<button type="button" id="btn-field-{{ $record->id }}" class="btn btn-success btn-field">Submit</button>
													</div>
												</div>
											@endif
										@endforeach
									@endif
								{{ Form::close() }}
								<!-- </form> -->
							</div>
							<!-- /.tab-pane -->
						@endforeach
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->

@endsection

@push('scripts')
	<script>
		$(document).ready(function(){
			$(".btn-field").on('click',function(e){
				var id 			=	$(this).attr("id").replace("btn-field-","");
				var loader_img 	=	$("#loader-img-"+id);
				var button 		=	$("#btn-field-"+id);
				var success_msg =	$("#success-msg-"+id);
				var error_msg 	=	$("#error-msg-"+id);
				var value 		=	$("#input-field-"+id).val();
				var type 		=	$("#input-field-"+id).attr("type");
				var required	=	$("#input-field-"+id).attr("required");
				var input_name 		=	$("#input-field-"+id).attr('name');
				var error_msgs 	=	$("#error-msgs-"+id);
				error_msgs.hide();

				/** Emoji Check Start **/
				// var regex = /(\u00a9|\u00ae|[\u2000-\u3300]|\ud83c[\ud000-\udfff]|\ud83d[\ud000-\udfff]|\ud83e[\ud000-\udfff])/g;
				// match = regex.exec(value);
				// if(match != null){
				// 	error_msg.show();
				// 	loader_img.hide();
				// 	button.show();
				// 	return false;
				// }
				/** Emoji Check End **/

				loader_img.show();
				button.hide();
				if(type == "checkbox"){
					if($("#input-field-"+id).is(":checked")){
						value 	=	true;
					}else{
						value 	=	false;
					}
				}
				if(required){

					console.log(input_name);
					
					if(!value || value.length == 0){
						error_msg.show();
						loader_img.hide();
						button.show();
						return false;
					}

					switch(input_name){

						case "site-title" :
							if(value.length > 60 ){
								error_msgs.find("strong").text('Site title length should be max 60 character');
								error_msgs.show();
								loader_img.hide();
								button.show();
								return false;
							}
						break;

						case "address" :
							if(value.length > 255 ){
								error_msgs.find("strong").text('Address should be max 255 character');
								error_msgs.show();
								loader_img.hide();
								button.show();
								return false;
							}
						break;

						case "site-description" :
							if(value.length > 255 ){
								error_msgs.find("strong").text('Description should be max 255 character');
								error_msgs.show();
								loader_img.hide();
								button.show();
								return false;
							}
						break;

						case "copyright-text" :
							if(value.length > 255 ){
								error_msgs.find("strong").text('Copyright should be max 255 character');
								error_msgs.show();
								loader_img.hide();
								button.show();
								return false;
							}
						break;


						
					}

				}
				switch(type){
					case "email" :
						var emailRegex =	/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
						if(value.length != 0 && !emailRegex.test(value)){
							error_msg.show();
							loader_img.hide();
							button.show();
							return false;
						}
						break;
					case "number" :
						// var numberRegex =	/^[0-9]+$/;
						// var numberRegex =	/^\d+(\.\d{1,2})?$/;
						var numberRegex =	/^\d+(\.\d{1,2})?$/;
						if( ( value.length != 0 || value >= 0 ) && ( !numberRegex.test(value) || value > 100000000 ) ){
							error_msg.show();
							loader_img.hide();
							button.show();
							return false;
						}
						value.replace(/^0+/, '');
						break;
					case "tel" :
						var numberRegex =	/^\+?[0-9]{5,15}$/;
						// var numberRegex =	/^\+?((\d\-|\d)+\d){7,15}$/ig;
						if(value.length != 0 && !numberRegex.test(value)){
							error_msg.show();
							loader_img.hide();
							button.show();
							return false;
						}
						break;
					case "url" :
						var urlRegex =	/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/;
						if(value.length != 0 && !urlRegex.test(value)){
							console.log("hello");
							error_msg.show();
							loader_img.hide();
							button.show();
							return false;
						}
						break;
				}
				$.ajax({
					url: "{{ route('admin.global_settings') }}",
					method:'POST',
					data:	{ "_token" : "{{ csrf_token() }}", "id" : id, "value" : value, },
					success: function(data){
						error_msgs.hide();
						error_msg.hide();
						success_msg.show();
						loader_img.hide();
						button.show();
						setTimeout(() => { success_msg.hide(); }, 1000);
					},
					error: function(error){
						console.log(error);
					}
				})
			})
		})
	</script>
@endpush