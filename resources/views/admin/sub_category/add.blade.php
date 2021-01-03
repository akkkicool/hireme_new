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
						{{ Form::open(array( "method" => "post", "id"=>"specialityAddForm", "enctype" => "multipart/form-data", 'url' => url('admin').'/'.$slug.'/create'.getUrlParams() )) }}
							<div class="form-group field_container">
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
			                        <strong>{{ $parent_id }}</strong>
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
		     $('#specialityAddForm')
		        .bootstrapValidator({
		             excluded: [':disabled'],
		            // feedbackIcons: {
		            //     valid: 'glyphicon glyphicon-ok',
		            //     invalid: 'glyphicon glyphicon-remove',
		            //     validating: 'glyphicon glyphicon-refresh'
		            // },
		            fields: {
		                name: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The Name is required and cannot be empty'
		                        },
		                        stringLength: {
		                            min: 2,
		                            max: 60,
		                            message: 'The Name must be greater than 2 and less than 50 characters'
		                        }
		                    }
		                },
		                common_name: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The Common Name is required and cannot be empty'
		                        },
		                        stringLength: {
		                            min: 2,
		                            max: 60,
		                            message: 'The Common Name must be greater than 2 and less than 50 characters'
		                        }
		                    }
		                },
		            }
		        })
		});
</script>
@endpush