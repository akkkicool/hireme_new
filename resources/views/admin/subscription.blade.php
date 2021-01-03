@extends('admin.master')

@section('title', '| Subscriptions')

@section('content')
	<!-- Main content -->
    <section class="content">
		
      <!-- 	<div class="row">
        	<div class="col-xs-12">
				<div class="box box-primary">
					<div class="box-body">
						<a class="btn btn-success" href="{{ url('admin').'/'.$slug.'/create'.getUrlParams() }}">
							<i class="fa fa-plus">&nbsp;</i>Add
						</a>
					</div>
				</div>
			</div>
		</div> -->
		
      	<!-- <div class="row">
        	<div class="col-xs-12">
				<div class="box box-primary">
					<div class="box-header">
						<h4>Search</h4>
					</div>
					<div class="box-body">
						{{ Form::open(array( "url" => $base_url, "method" => "get", "id"=>"search_form" )) }}
							<div class="col-lg-3 col-md-6 col-xs-12">
								{{ Form::label("title","Title") }}
								{{ Form::text("title",request()->title,array("class"=>"form-control","placeholder"=>"Title")) }}
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
									<th>S.no</th>
									<th>Name</th>
									<th>Plan</th>
									<th>Start Date</th>
									<th>End Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>{{ fullName(1) }}</td>
									<td>{{ getPlanName(1)->title }}</td>
									<td>{{ date('Y-m-d') }}</td>
									<td>{{ date('Y-m-d', strtotime('+1 month')); }}</td>
								</tr>	
								<tr>
									<td>1</td>
									<td>{{ fullName(1) }}</td>
									<td>{{ getPlanName(1)->title }}</td>
									<td>{{ date('Y-m-d') }}</td>
									<td>{{ date('Y-m-d', strtotime('+1 year')); }}</td>
								</tr>	
							</tbody>
						</table>
						
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