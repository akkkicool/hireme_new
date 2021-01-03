@extends('admin/master')

@section('title', 'Change Password')

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h2 class="box-title">Change Password </h2>
              <div class="box-tools pull-right">
             
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-12">

          <!-- general form elements -->
          <div class="box box-primary">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->
           {!! Form::model($data, array('route' => array('admin.change_password'), 'id'=> 'changePassword', 'autocomplete'=>'off')) !!}
              <div class="box-body">
                <div class="form-group {{ $errors->has('old_password') ? 'has-error' : '' }}">
                  <label for="exampleInputEmail1">Old Password</label>
                  {{ Form::password('old_password', ['class' => 'form-control', 'placeholder'=>"Enter Current Password" ]) }}
                 <!--  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Title"> -->
                  @error('old_password')
                     <span class="help-block has-error">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                  <label for="exampleInputEmail1">New Password</label>
                  {{ Form::password('passwords', ['class' => 'form-control', 'placeholder'=>"Password", 'autocomplete'=>"off" ]) }}
                 <!--  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Title"> -->
                  @error('password')
                     <span class="help-block has-error">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group {{ $errors->has('passwords_confirmation') ? 'has-error' : '' }}">
                  <label for="exampleInputEmail1">Confirm Password</label>
                 {{ Form::password('passwords_confirmation', ['class' => 'form-control', 'placeholder'=>"Confirm Password" ]) }}
                 <!--  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Title"> -->
                  @error('passwords_confirmation')
                     <span class="help-block has-error">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            {!! Form::close()!!}

          </div>
          <!-- /.box -->


        </div>
            </div>
            <!-- /.box-body -->
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>



@stop  