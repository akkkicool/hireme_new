@extends('admin.master')

@section('title', '| Inquiry')

@section('content')
	<!-- Main content -->
    <section class="content">
		
      	<?php /* <div class="row">
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
		</div> */ ?>
      	<div class="row">
        	<div class="col-xs-12">
				<div class="box box-primary">
					<!-- /.box-header -->
					<div class="box-body">
						<table id="listind_table" class="table table-bordered table-hover datatable cell-border compact stripe hover">
							<thead>
								<tr>
									<th>Order Id</th>
									<th>Customer's Name</th>
									<th>Freelancer's Name</th>
									<th>Date Of Order</th>
									<th>Payment in USD</th>
									
								</tr>
							</thead>
							<tbody>
									<tr>
										<td>ORD00003</td>
										<td>James Donald</td>
										<td>Rocco Bertino</td>
										<td>{{ date('Y-m-d') }}</td>
										<td>$.100</td>
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