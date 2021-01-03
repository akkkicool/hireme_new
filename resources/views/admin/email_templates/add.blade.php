@extends('admin.master')

@section('title', '| Email Templates')

@section('content')
	<!-- Main content -->
	<section class="content">
	  	<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
					<!-- /.box-header -->
					<div class="box-body">
						{{ Form::open(array( "method" => "post", "id"=>"add_form", "enctype" => "multipart/form-data", 'url' => url('admin').'/'.$slug.'/create'.getUrlParams() )) }}
							<div class="form-group field_container">
								{{ Form::label("name","Title") }}
								{{ Form::text("name",null,array("class"=>"form-control","placeholder"=>"Title")) }}
								@if($errors->has('name'))
									<span id="name-error" class="error text-danger">{{ $errors->first('name') }}</span>
								@endif
							</div>
							<div class="form-group field_container">
								{{ Form::label("subject","Subject") }}
								{{ Form::text("subject",null,array("class"=>"form-control","placeholder"=>"Subject")) }}
								@if($errors->has('subject'))
									<span id="subject-error" class="error text-danger">{{ $errors->first('subject') }}</span>
								@endif
							</div>
							<div class="form-group field_container">
								{{ Form::label("content","Content") }}
								{{ Form::textarea("content",null,array("class"=>"form-control","placeholder"=>"Content","id"=>"ckeditor")) }}
								@if($errors->has('content'))
									<span id="content-error" class="error text-danger">{{ $errors->first('content') }}</span>
								@endif
							</div>
							<div class="form-group">
								<a class="btn btn-primary" href="{{ url('admin').'/'.$slug.getUrlParams() }}">Back</a>
								<button class="btn btn-success">Submit</button>
							</div>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
@endsection


@push('scripts')
	<script>
		$(document).ready(function() {
		     $('#emailTemplateForm')
		        .bootstrapValidator({
		             excluded: [':disabled'],
		            // feedbackIcons: {
		            //     valid: 'glyphicon glyphicon-ok',
		            //     invalid: 'glyphicon glyphicon-remove',
		            //     validating: 'glyphicon glyphicon-refresh'
		            // },
		            fields: {
		                title: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The title is required and cannot be empty'
		                        }
		                    }
		                },
		                subject: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The title is required and cannot be empty'
		                        }
		                    }
		                },
		                content: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The description is required and cannot be empty'
		                        },
		                        callback: {
		                            message: 'The bio must be less than 200 characters long',
		                            callback: function(value, validator, $field) {
		                                // Get the plain text without HTML
		                                var div  = $('<div/>').html(value).get(0),
		                                    text = div.textContent || div.innerText;

		                                return text.length <= 200;
		                            }
		                        }
		                    }
		                }
		            }
		        })
		        .find('[name="content"]')
		            .ckeditor()
		            .editor
		                // To use the 'change' event, use CKEditor 4.2 or later
		                .on('change', function() {
		                    // Revalidate the bio field
		                    $('#emailTemplateForm').bootstrapValidator('revalidateField', 'content');
		                }); 

		});
</script>
@endpush