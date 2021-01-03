@extends('admin/master_without_login')

@section('title', '| Login')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="{!! url('/') !!}"><b>{{ (getSettings('site-title'))? getSettings('site-title') : env("APP_NAME", "Laravel") }}</b>
    <!-- <img src="{{ url('public/uploads/common/logo.png') }}" style="width:200px;" /> -->
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    {{ Form::open(array('id'=>'loginForm','url'=>route('admin.login'),'enctype'=>'multipart/form-data', 'autocomplete' => "off")) }}
    
      <div class="form-group has-feedback">
        <!-- <input type="email" class="form-control" placeholder="Email" name="email" > -->
        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder'=>"Email"]) }}

        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
         @error('email')
           <span class="help-block">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      
      <div class="form-group has-feedback">
     {{ Form::password('password', ['class' => 'form-control', 'placeholder'=>"Password" ]) }}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
         @error('password')
           <span class="help-block">
              <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-xs-7">
         <!--  <div class="checkbox icheck">
            <label>
               <input type="checkbox" name="remember" value="1"> Remember Me
            </label>
          </div> -->
          <a href="{{ route('admin.forgot_password') }}">I forgot my password</a><br>

        </div>
        <!-- /.col -->
        <div class="col-xs-5">
          {!! Form::submit('Sign In', ['class' => 'btn btn-primary btn-block btn-flat']) !!}
        </div>
        <!-- /.col -->
      </div>
    {!! Form::close() !!}

   <!--  <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <!-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->




<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });

  });
</script>

@stop
