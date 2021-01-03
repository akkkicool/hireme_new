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
		                name: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The name is required and cannot be empty'
		                        }
		                    }
		                },
		            }
		        })
		         

		});
</script>
@endpush