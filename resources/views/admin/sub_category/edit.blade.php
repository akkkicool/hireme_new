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
						{{ Form::model($record,array( "method" => "post", "id"=>"specialityEditForm", "enctype" => "multipart/form-data", 'url' => url('admin').'/'.$slug.'/edit/'.base64_encode($record->id).getUrlParams() )) }}
							<div class="form-group">
								{{ Form::label("name","Name") }}
								{{ Form::text("name",null,array("class"=>"form-control","placeholder"=>"Title")) }}
								@if($errors->has('name'))
									<span id="name-error" class="error text-danger">{{ $errors->first('name') }}</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
			                  <label for="exampleInputEmail1">Parent Category</label>
			                  {{ Form::select('parent_id', $parent, null, ['class' => 'form-control']) }}
			                  @error('parent_id')
			                     <span class="help-block has-error">
			                        <strong>{{ $errors->first('parent_id') }}</strong>
			                    </span>
			                  @enderror
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

@push('scripts')
	<script>
		$(document).ready(function() {
		     $('#specialityEditForm')
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