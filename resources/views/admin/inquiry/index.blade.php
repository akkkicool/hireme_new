@extends('admin.master')

@section('title', '| Inquiry')

@section('content')
	<!-- Main content -->
    <section class="content">
		
      	<!-- <div class="row">
        	<div class="col-xs-12">
				<div class="box box-primary">
					<div class="box-header">
						<h4>Search</h4>
					</div>
					<div class="box-body">
						{{ Form::open(array( "url" => $base_url, "method" => "get", "id"=>"search_form" )) }}
							<div class="col-lg-3 col-md-6 col-xs-12">
								{{ Form::label("first_name","Name") }}
								{{ Form::text("first_name",request()->first_name,array("class"=>"form-control","placeholder"=>"name or email")) }}
							</div>
							<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
								{{ Form::label("status","Status") }}
								{{ Form::select("status",[ "all" => "All", "active" => "Active", "deactive" => "Deactivate" ],request()->status,array("class"=>"form-control")) }}
							</div>
							<div class="col-lg-2 col-md-4 col-sm-6 col-xs-4">
								<label>&nbsp;</label>
								<button class="btn btn-primary form-control">Search</button>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-6 col-xs-4">
								<label>&nbsp;</label>
								<a href="{{ $base_url }}" class="btn btn-primary form-control">Reset</a>
							</div>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div> -->
      	<div class="row">
        	<div class="col-xs-12">
				<div class="box box-primary">
					<!-- /.box-header -->
					<div class="box-body">
						<table id="listind_table" class="table table-bordered table-hover datatable cell-border compact stripe hover">
							<thead>
								<tr>
									<th>{!! sortableColumn($base_url,'id','S.No.',true) !!}</th>
									<th>{!! sortableColumn($base_url,'name','Name',true) !!}</th>
									<th>{!! sortableColumn($base_url,'email','Email',true) !!}</th>
									<th>{!! sortableColumn($base_url,'subject','Subject',true) !!}</th>
									<th>{!! sortableColumn($base_url,'message','Message',false) !!}</th>
									<th>{!! sortableColumn($base_url,'action','Action',false) !!}</th>
								</tr>
							</thead>
							<tbody>
								@if($records->count() > 0)
									@foreach($records as $record)
										<?php $counter++; ?>
										<tr>
											<td>{{ $counter }}</td>
											<td>{{ title_case($record->name) }}</td>
											<td>{{ $record->email }}</td>
											<td>{{ title_case($record->subject) }}</td>
											<td>{{ add3dots($record->message, '...', 20) }}</td>
											<td>
												<a class='btn btn-info' href="{{ url($base_url.'/view/'.base64_encode($record->id)).getUrlParams() }}" title="View"><i class='fa fa-eye'></i></a>
											</td>
										</tr>
									@endforeach
								@else
									<tr><td colspan="100%"><div class="text-center"><h4>No {{$page_title}} found.</h4></div></td></tr>
								@endif
							</tbody>
						</table>
						<div class="pagination">
							{{ $records->appends(request()->except('page'))->links() }}
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
@endsection

@section('scripts')

@endsection