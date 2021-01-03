@extends('front/master_without_login')

@section('title', '| Profile')


@php $segment1 = Request::segment(1) @endphp

@push('styles')
		<style>
			.btn-152{
				padding: 0px 20px;
				height: 50px;
				border: 0;
				margin: 45px 0 0;
				width: 100%;
			}

			.slidecontainer {
			  width: 100%;
			}

			.slider {
			  -webkit-appearance: none;
			  width: 100%;
			  height: 25px;
			  background: #d3d3d3;
			  outline: none;
			  opacity: 0.7;
			  -webkit-transition: .2s;
			  transition: opacity .2s;
			}

			.slider:hover {
			  opacity: 1;
			}

			.slider::-webkit-slider-thumb {
			  -webkit-appearance: none;
			  appearance: none;
			  width: 25px;
			  height: 25px;
			  background: #4CAF50;
			  cursor: pointer;
			}

			.slider::-moz-range-thumb {
			  width: 25px;
			  height: 25px;
			  background: #4CAF50;
			  cursor: pointer;
			}

			.box1{
				display: none;
			}

			.fileinput-button {
			  position: relative;
			  overflow: hidden;
			  padding: 8px 30px;
			}

			.fileinput-button input {
			  position: absolute;
			  top: 0;
			  right: 0;
			  margin-bottom: 0;
			  opacity: 0;
			  -ms-filter: "alpha(opacity=0)";
			  font-size: 15px;
			  direction: ltr;
			  cursor: pointer;
			}

			.thumb {
			  height: 80px;
			  width: 100%;
			  border: 1px solid #000;
			}

			ul.thumb-Images li {
			  width: 120px;
				float: left;
				display: inline-block;
				vertical-align: top;
				min-height: 137px;
				border: 1px solid #dedede;
				padding: 5px;
				margin: 0px 5px 5px 0;
			}

			.img-wrap {
			  position: relative;
			  display: inline-block;
			  font-size: 0;
			}

			.img-wrap .close {
			  position: absolute;
			  top: 2px;
			  right: 2px;
			  z-index: 100;
			  background-color: #d0e5f5;
			  padding: 5px 2px 2px;
			  color: #000;
			  font-weight: bolder;
			  cursor: pointer;
			  opacity: 0.5;
			  font-size: 23px;
			  line-height: 10px;
			  border-radius: 50%;
			}

			.img-wrap:hover .close {
			  opacity: 1;
			  background-color: #ff0000;
			}

			.FileNameCaptionStyle {
			    font-size: 10px;
			    line-height: 15px;
			    overflow: hidden;
			}

			.btn-success {
			    color: #fff;
			    background-color: #54a6d6;
			    border-color: #54a6d6;
			}

			video {
			  border: 1px solid black;
			  display: block;
			}

			#Filelist{
				margin-top: 20px;
			    background: #fff;
			    border: 1px solid #e0e0e0;
			    min-height: 200px;
			    width: 100%;
			    padding: 10px;
			}

			.lr_btn{
				font-size: 16px;
    			font-weight: 500;
				background-color: #ffcc00;
				box-shadow: 0 16px 29px #0BBEAD69;
				border-radius: 50px;
			}



		</style>
		@endpush	

@section('content')

	<!-- Header Start -->
			@include('front.partials.header')
		<!-- Header End -->
		<!-- Title Start -->
		<div class="title-bar">			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ol class="title-bar-text">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">My Profile</li>
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
					<div class="col-lg-3 col-md-4">
						@include('front/freelancer/layouts/sidebar')
					</div>
					<div class="col-lg-9 col-md-8 mainpage">
						<div class="account_heading">
							<div class="account_hd_left">
								<h2>Manage Your Profile</h2>
							</div>
						</div>
						<div class="account_tabs">
							<ul class="nav nav-tabs">
								@include('front/freelancer/layouts/mainTab')
							</ul>
						</div>
						<div class="jobs_manage">
							<div class="row">		
								<div class="col-lg-12">
									{{ Form::open(array('id'=>'updateService','url'=>route('change_password'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
									<div class="view_chart_header">
										<h4>Service Details</h4>								
									</div>
									<div class="post_job_body">
										
											<div class="row">		
												<div class="col-lg-6">
													<div class="form-group">
														<label class="label15">Category*</label>
														<div class="ui fluid search selection dropdown skills-search">
															{!! Form::hidden('category',null, [] ) !!}
															<i class="dropdown icon"></i>
															<input class="search" autocomplete="off" tabindex="0">
															<span class="sizer" style=""></span>
															<div class="default text">Select Your Service Category</div>
															<div class="menu transition hidden" tabindex="-1">   
																<div class="item" data-value="">Select Category</div>
																@foreach($category as $key => $val)
																	<div class="item" data-value="{{$key}}">{{$val}}</div>
																@endforeach	
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label class="label15">Total Experience*</label>
														<div class="ui fluid search selection dropdown skills-search">
															
															{!! Form::hidden('exp',null) !!}
															<i class="dropdown icon"></i>
															<input class="search" autocomplete="off" tabindex="0">
															<span class="sizer" style=""></span>
															<div class="default text">Select Experience</div>
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
												<div class="col-lg-12 sub_cate_data">
													
												</div>					
												<div class="col-lg-12">
													<div class="form-group">
														<label class="label15">Tagline*</label>
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
											</div>
										
									</div>

								
									<div class="view_chart_header">
										<h4>Portfoilio</h4>								
									</div>
								<div class="post501">
										<div class="row">
											<div class="col-lg-8">
												<div class="form-group">
													<div>
												        <label class="label15" style="width: 100%;">Upload Your Work Images (Max. 5 Images)*</label>
												        <span class="btn btn-success fileinput-button">
												            <span>Select Image</span>
												            <input type="file" name="files[]" id="files" multiple accept="image/jpeg, image/png, image/gif," required><br />
												        </span>
												        <output id="Filelist" style="margin-top: 20px;"></output>
												    </div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="form-group">
													<label class="label15">Upload Your Work Video (Max. 1 video)*</label>
													<input id="file-input" name="video" type="file" accept="video/*">
													<video id="video" width="300" height="200" controls style="margin-top: 38px;"></video>
												</div>
											</div>		
											<div class="col-lg-12">
													<button class="post_jp_btn" type="submit">SAVE CHANGES</button>
												</div>
										</div>
								</div>
								{!! Form::close() !!}
								</div>
							</div>							
						</div>					
					</div>																																						
				</div>
			</div>					
		</main>
		

	@include('front.partials.footer')
	
@push('scripts')
<script>
 	var _token = '{{ csrf_token() }}';
			$('input[name="category"]').change(function(){

				if($(this).val()){
					var html = '<div class="form-group"><label class="label15">What\'s included for your rate?*</label><div class="row"><div class="col-lg-3"><label class="label15">Select Services*</label></div><div class="col-lg-3"><label class="label15">Price*</label></div><div class="col-lg-3"><label class="label15">Time*</label></div></div>';
						
				    $.ajax({
				        type: "POST",
				        url: "{{ route('get_child_category') }}",
				        data: {_token : _token, category_id : $(this).val() },
				        success: function (data) {
				        	console.log(data);
				        	$.each(data,function(index, value){
				        		html += '<div class="row"><div class="col-lg-3"><input type="checkbox" name="sub_cat_id[]" value="'+index+'" required> <label>'+value+'</label></div><div class="col-lg-3"><input type="text" name="price[]" class="job-input" value="" placeholder="Price in USD" required></div><div class="col-lg-3"><input type="text" class="job-input" value="" placeholder="Time in minute" required></div></div>';
								   // html += '<div class="item" data-value="'+index+'">'+value+'</div>'
								});

				        	html += '</div>';
				        	var $option = $("input[name='sub_cat_id[]']");
				        	 $('#updateService').bootstrapValidator('addField', $option);
				            $('.sub_cate_data').html(html);
				        }
				    });
				}  
			});
		</script>

		<script>
			//I added event handler for the file upload control to access the files properties.
			document.addEventListener("DOMContentLoaded", init, false);

			//To save an array of attachments
			var AttachmentArray = [];

			//counter for attachment array
			var arrCounter = 0;

			//to make sure the error message for number of files will be shown only one time.
			var filesCounterAlertStatus = false;

			//un ordered list to keep attachments thumbnails
			var ul = document.createElement("ul");
			ul.className = "thumb-Images";
			ul.id = "imgList";

			function init() {
			  //add javascript handlers for the file upload event
			  document
			    .querySelector("#files")
			    .addEventListener("change", handleFileSelect, false);
			}

			//the handler for file upload event
			function handleFileSelect(e) {
			  //to make sure the user select file/files
			  if (!e.target.files) return;

			  //To obtaine a File reference
			  var files = e.target.files;

			  // Loop through the FileList and then to render image files as thumbnails.
			  for (var i = 0, f; (f = files[i]); i++) {
			    //instantiate a FileReader object to read its contents into memory
			    var fileReader = new FileReader();

			    // Closure to capture the file information and apply validation.
			    fileReader.onload = (function(readerEvt) {
			      return function(e) {
			        //Apply the validation rules for attachments upload
			        ApplyFileValidationRules(readerEvt);

			        //Render attachments thumbnails.
			        RenderThumbnail(e, readerEvt);

			        //Fill the array of attachment
			        FillAttachmentArray(e, readerEvt);
			      };
			    })(f);

			    // Read in the image file as a data URL.
			    // readAsDataURL: The result property will contain the file/blob's data encoded as a data URL.
			    // More info about Data URI scheme https://en.wikipedia.org/wiki/Data_URI_scheme
			    fileReader.readAsDataURL(f);
			  }
			  document
			    .getElementById("files")
			    .addEventListener("change", handleFileSelect, false);
			}

			//To remove attachment once user click on x button
			jQuery(function($) {
			  $("div").on("click", ".img-wrap .close", function() {
			    var id = $(this)
			      .closest(".img-wrap")
			      .find("img")
			      .data("id");

			    //to remove the deleted item from array
			    var elementPos = AttachmentArray.map(function(x) {
			      return x.FileName;
			    }).indexOf(id);
			    if (elementPos !== -1) {
			      AttachmentArray.splice(elementPos, 1);
			    }

			    //to remove image tag
			    $(this)
			      .parent()
			      .find("img")
			      .not()
			      .remove();

			    //to remove div tag that contain the image
			    $(this)
			      .parent()
			      .find("div")
			      .not()
			      .remove();

			    //to remove div tag that contain caption name
			    $(this)
			      .parent()
			      .parent()
			      .find("div")
			      .not()
			      .remove();

			    //to remove li tag
			    var lis = document.querySelectorAll("#imgList li");
			    for (var i = 0; (li = lis[i]); i++) {
			      if (li.innerHTML == "") {
			        li.parentNode.removeChild(li);
			      }
			    }
			  });
			});

			//Apply the validation rules for attachments upload
			function ApplyFileValidationRules(readerEvt) {
			  //To check file type according to upload conditions
			  if (CheckFileType(readerEvt.type) == false) {
			    alert(
			      "Only jpg/png/gif files allowed"
			    );
			    e.preventDefault();
			    return;
			  }

			  //To check file Size according to upload conditions
			  if (CheckFileSize(readerEvt.size) == false) {
			    alert(
			      "Max file size should not exceed 1 MB"
			    );
			    e.preventDefault();
			    return;
			  }

			  //To check files count according to upload conditions
			  if (CheckFilesCount(AttachmentArray) == false) {
			    if (!filesCounterAlertStatus) {
			      filesCounterAlertStatus = true;
			      alert(
			        "Max 5 images allowed"
			      );
			    }
			    e.preventDefault();
			    return;
			  }
			}

			//To check file type according to upload conditions
			function CheckFileType(fileType) {
			  if (fileType == "image/jpeg") {
			    return true;
			  } else if (fileType == "image/png") {
			    return true;
			  } else if (fileType == "image/jpg") {
			    return true;
			  } else {
			    return false;
			  }
			  return true;
			}

			//To check file Size according to upload conditions
			function CheckFileSize(fileSize) {
			  if (fileSize < 1024000) {
			    return true;
			  } else {
			    return false;
			  }
			  return true;
			}

			//To check files count according to upload conditions
			function CheckFilesCount(AttachmentArray) {
			  //Since AttachmentArray.length return the next available index in the array,
			  //I have used the loop to get the real length
			  var len = 0;
			  for (var i = 0; i < AttachmentArray.length; i++) {
			    if (AttachmentArray[i] !== undefined) {
			      len++;
			    }
			  }
			  //To check the length does not exceed 10 files maximum
			  if (len > 4) {
			    return false;
			  } else {
			    return true;
			  }
			}

			//Render attachments thumbnails.
			function RenderThumbnail(e, readerEvt) {
			  var li = document.createElement("li");
			  ul.appendChild(li);
			  li.innerHTML = [
			    '<div class="img-wrap"> <span class="close">&times;</span>' +
			      '<img class="thumb" src="',
			    e.target.result,
			    '" title="',
			    escape(readerEvt.name),
			    '" data-id="',
			    readerEvt.name,
			    '"/>' + "</div>"
			  ].join("");

			  var div = document.createElement("div");
			  div.className = "FileNameCaptionStyle";
			  li.appendChild(div);
			  div.innerHTML = [readerEvt.name].join("");
			  document.getElementById("Filelist").insertBefore(ul, null);
			}

			//Fill the array of attachment
			function FillAttachmentArray(e, readerEvt) {
			  AttachmentArray[arrCounter] = {
			    AttachmentType: 1,
			    ObjectType: 1,
			    FileName: readerEvt.name,
			    FileDescription: "Attachment",
			    NoteText: "",
			    MimeType: readerEvt.type,
			    Content: e.target.result.split("base64,")[1],
			    FileSizeInBytes: readerEvt.size
			  };
			  arrCounter = arrCounter + 1;
			}

		</script>

		<script>
			const input = document.getElementById('file-input');
			const video = document.getElementById('video');
			const videoSource = document.createElement('source');

			input.addEventListener('change', function() {
			  const files = this.files || [];

			  if (!files.length) return;
			  
			  const reader = new FileReader();

			  reader.onload = function (e) {
			    videoSource.setAttribute('src', e.target.result);
			    video.appendChild(videoSource);
			    video.load();
			    video.play();
			  };
			  
			  reader.onprogress = function (e) {
			    console.log('progress: ', Math.round((e.loaded * 100) / e.total));
			  };
			  
			  reader.readAsDataURL(files[0]);
			});
		</script>
@endpush

@stop