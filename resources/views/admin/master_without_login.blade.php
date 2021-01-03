<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ (getSettings('site-title'))? getSettings('site-title') : env("APP_NAME", "Laravel") }}  @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="icon" href="{{ asset('public/uploads/common/favicon.ico') }}" type="image/x-icon">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{!! asset('public/admins/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{!! asset('public/admins/bower_components/font-awesome/css/font-awesome.min.css') !!}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{!! asset('public/admins/bower_components/Ionicons/css/ionicons.min.css') !!}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('public/admins/dist/css/AdminLTE.min.css') !!}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{!! asset('public/admins/plugins/iCheck/square/blue.css') !!}">
  <!-- toastr -->
  <link rel="stylesheet" href="{{ asset('public/css/toastr.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
<script src="{!! asset('public/admins/bower_components/jquery/dist/jquery.min.js') !!}"></script>
</head>
<body class="hold-transition login-page">



    @yield('content')
  

<!-- ./wrapper -->




<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('public/admins/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('public/admins/plugins/validation/bootstrapValidator.min.js') !!}"></script>
<script src="{!! asset('public/admins/plugins/validation/formvalidation.js') !!}"></script>
<script src="{!! asset('public/admins/plugins/iCheck/icheck.min.js') !!}"></script>
<!-- iCheck -->
<script src="{{ asset('public/js/toastr.min.js') }}"></script>
@toastr_render
</body>
</html>
