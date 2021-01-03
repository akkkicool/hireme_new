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
						<div class="row">
							<div class="col-md-6">
								<div class="box-header">
					              <h3 class="box-title">User Info</h3>
					            </div>
								<div class="box-body">
									<label class="col-md-3">First Name :</label>
									<div class="col-md-9">{{ $record->first_name }}</div>
								</div>
							
								<div class="box-body">
									<label class="col-md-3">Last name :</label>
									<div class="col-md-9">{{ $record->last_name }}</div>
								</div>
							
								<div class="box-body">
									<label class="col-md-3">Email :</label>
									<div class="col-md-9">{!! $record->email !!}</div>
								</div>
								<div class="box-body">
									<label class="col-md-3">Phone Number :</label>
									<div class="col-md-9">{{ $record->country_code.'-'.$record->mobile_number }}</div>
								</div>
							
								<div class="box-body">
									<label class="col-md-3">Address :</label>
									<div class="col-md-9">{{ ucwords($record->address) }}</div>
								</div>
							
								<div class="box-body">
									<label class="col-md-3">Gender :</label>
									<div class="col-md-9">{{ ucwords($record->gender) }}</div>
								</div>

								<div class="box-body">
									<label class="col-md-3">Date Of Birth :</label>
									<div class="col-md-9">{{ $record->dob }}</div>
								</div>
														
								<div class="box-body">
									<label class="col-md-3">Status :</label>
									<div class="col-md-9">{{ ($record->status == 1) ? 'Active' : 'Deactivate' }}</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="box-body text-center">
								<a class="btn btn-primary" href="{{ url('admin').'/'.$slug.getUrlParams() }}" >Back</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
@endsection

@section('scripts')
	<script>
		$(document).ready(function(){
			CKEDITOR.replace("ckeditor");
		});
	</script>
@endsection