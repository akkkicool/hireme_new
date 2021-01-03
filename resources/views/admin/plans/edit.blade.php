@extends('admin.master')

@section('title', '| Plan')

@section('content')
	<!-- Main content -->
	<section class="content">
	  	<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
					<!-- /.box-header -->
					<div class="box-body">
						{{ Form::model($record,array( "method" => "post", "id"=>"emailTemplateForm", "enctype" => "multipart/form-data", 'url' => url('admin').'/'.$slug.'/edit/'.base64_encode($record->id).getUrlParams() )) }}
							<div class="form-group ">
								{{ Form::label("title","Title") }}
								{{ Form::text("title",null,array("class"=>"form-control","placeholder"=>"Title")) }}
								@if($errors->has('title'))
									<span id="title-error" class="error text-danger">{{ $errors->first('title') }}</span>
								@endif
							</div>
							
							<div class="form-group {{ $errors->has('billing_type') ? 'has-error' : '' }}">
			                  <label for="exampleInputEmail1">Duration</label>
			                  {{ Form::select('billing_type', (['' => 'Select Duration', '1'=>'Monthly', '2'=>"Yearly"] ), null, ['class' => 'form-control']) }}
			                  @error('billing_type')
			                     <span class="help-block has-error">
			                        <strong>{{ $billing_type }}</strong>
			                    </span>
			                  @enderror
			                </div>
			                <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
			                  <label for="exampleInputEmail1">Price</label>
			                  {{ Form::number('price', null, ['class' => 'form-control', 'step'=>"0.01"]) }}
			                  @error('price')
			                     <span class="help-block has-error">
			                        <strong>{{ $price }}</strong>
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
		                billing_type: {
		                    validators: {
		                        notEmpty: {
		                            message: 'Please select duration'
		                        }
		                    }
		                },
		                price: {
		                    validators: {
		                        notEmpty: {
		                            message: 'The price is required and cannot be empty'
		                        }
		                    }
		                }
		            }
		        })
		        
		});
</script>
@endpush