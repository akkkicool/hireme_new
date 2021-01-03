@extends('admin/master_without_login')

@section('title', '| Forget Password')

@section('content')
  <div class="login-box">
    <div class="login-logo">
      <a href="{{ url('admin/login') }}"><b>{{ (getSettings('site-title'))? getSettings('site-title') : env("APP_NAME", "Laravel") }}</b>
       <!-- <img src="{{ url('public/uploads/common/logo.png') }}" style="width:200px;" /> -->
      </a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Enter registered email address to reset password</p>
      {{ Form::open(array( "method" => "POST", 'route' => "admin.forgot_password", 'autocomplete' => "off", 'id'=>'forgetForm' )) }}
        <div class="form-group has-feedback">
          {{ Form::label("email","Email") }}
          {{ Form::email("email",null,array("class"=>"form-control","placeholder"=>"Email")) }}
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @if($errors->has('email'))
            <span class="help-block">
              <strong class="text-danger">{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        <div class="row">
          <div class="col-xs-8">
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      {{ Form::close() }}
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->


@endsection