@extends('admin.master')

@section('title', '| Freelancer')

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

								<div class="box-body">
									<label class="col-md-3">Is Approved :</label>
									<div class="col-md-9">{{ ($record->is_approved == 1) ? 'Yes' : 'No' }}</div>
								</div>

								
							</div>
						</div>
						<?php /*<div class="box-body">
							<div class="box-header">
					              <h3 class="box-title">Schedule</h3>
					            </div>
							<table id="listind_table" class="table table-bordered table-hover datatable cell-border compact stripe hover">
								<thead>
									<tr>
										<th>Schedule Id.</th>
										<th>Doctor Timezone</th>
										<th>Date</th>
										<th>Shift 1 Start time</th>
										<th>Shift 1 End time</th>
										<th>Shift 2 Start time</th>
										<th>Shift 2 End time</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@forelse($data as $val)
									<tr>
										<td>{{ $val->id }}</td>
										<td>{{ $record->timezone }}</td>
										<td>{{ $val->date }}</td>
										<td>{{ $val->shift_1_start_time }}</td>
										<td>{{ $val->shift_1_end_time }}</td>
										<td>{{ $val->shift_2_start_time }}</td>
										<td>{{ $val->shift_2_end_time }}</td>
										<td>action</td>
									</tr>
									@empty
										<td colspan="7" class="text-center">No Record Found</td>
									@endforelse
								</tbody>
							</table>
							<div class="pagination">
								{{ $data->appends(request()->except('page'))->links() }}
							</div>
						</div> */ ?>
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