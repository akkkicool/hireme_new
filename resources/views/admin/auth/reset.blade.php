@extends('admin/master_without_login')

@section('title', '| Reset Password')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{!! url('/') !!}"><b>{{ (getSettings('site-title'))? getSettings('site-title') : env("APP_NAME", "Laravel") }}</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  @include('alert_message')
    <p class="login-box-msg">Reset Password</p>

    {{ Form::open(array('id'=>'resetForm','url'=>route('admin.reset', ['token'=>Request()->segment(3)]),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
      <div class="form-group has-feedback">
        <!-- <input type="email" class="form-control" placeholder="Email" name="email" > -->
        {{ Form::password('password', ['class' => 'form-control', 'placeholder'=>"Password" ]) }}

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         @error('email')
           <span class="help-block">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      
      <div class="form-group has-feedback">
     <!--    <input type="password" class="form-control" placeholder="Password" name="password"> -->
     {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder'=>"Confirm Password" ]) }}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         @error('password')
           <span class="help-block">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-xs-7">
        </div>
      
        <!-- /.col -->
        <div class="col-xs-5">
          {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block btn-flat ']) !!}
        </div>
        <!-- /.col -->
      </div>
    {!! Form::close() !!}



  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@stop

