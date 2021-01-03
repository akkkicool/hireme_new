@extends('admin/master')

@section('title', 'Update Profile')

@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h2 class="box-title">Update Profile </h2>
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
           {!! Form::model($data, array('route' => array('admin.profile'), 'id'=> 'updateProfile', 'autocomplete'=>'off', 'enctype'=>'multipart/form-data')) !!}
              <div class="box-body">
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                  <label for="exampleInputEmail1">First name</label>
                  {{ Form::text('first_name', null,['class' => 'form-control', 'placeholder'=>"First Name" ]) }}
                 <!--  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Title"> -->
                  @error('first_name')
                     <span class="help-block has-error">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                  <label for="exampleInputEmail1">Last Name</label>
                  {{ Form::text('last_name', null, ['class' => 'form-control', 'placeholder'=>"Last Name", 'autocomplete'=>"off" ]) }}
                 <!--  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Title"> -->
                  @error('last_name')
                     <span class="help-block has-error">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  <label for="exampleInputEmail1">Email</label>
                 {{ Form::email('email', null, ['class' => 'form-control', 'placeholder'=>"Email" ]) }}
                 <!--  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Title"> -->
                  @error('email')
                     <span class="help-block has-error">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>

               <!--  <div class="form-group">
                  <label for="exampleInputFile">Profile Image</label>
                  <input name="image" type="file" id="exampleInputFile">
                </div> -->
                <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                  <div class="row">
                  <div class="col-md-4">
                      <label for="exampleInputFile">Profile Image</label>
                      <input name="image" type="file" id="exampleInputFile">
                      @error('image')
                         <span class="help-block has-error">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                  @if($data->image)
                  <div class="col-md-8">    
                      <img src="{{asset('public/uploads/users/thumbnail_image/'.$data->image) }}" />
                  </div>
                  @endif

                </div>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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