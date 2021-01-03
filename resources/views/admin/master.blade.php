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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{!! asset('public/admins/dist/css/skins/_all-skins.min.css') !!}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{!! asset('public/admins/bower_components/morris.js/morris.css') !!}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{!! asset('public/admins/bower_components/jvectormap/jquery-jvectormap.css') !!}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{!! asset('public/admins/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{!! asset('public/admins/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{!! asset('public/admins/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{!! asset('public/admins/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}">

  <link rel="stylesheet" href="{!! asset('public/admins/plugins/iCheck/all.css') !!}">

    <!-- custom css -->
  <link rel="stylesheet" href="{{ asset('public/admins/css/custom.css') }}">

  <!-- toastr -->
  <link rel="stylesheet" href="{{ asset('public/css/toastr.min.css') }}">

@stack('styles')

  <!-- jQuery 3 -->
<script src="{!! asset('public/admins/bower_components/jquery/dist/jquery.min.js') !!}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('public/admins/bower_components/jquery-ui/jquery-ui.min.js') !!}"></script>




<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <?php
    $slug1  = Request::segment(1);
    $slug2  = Request::segment(2);
    $slug3  = Request::segment(3);
    $slug4  = Request::segment(4);
?>
 
<div class="wrapper">

 @include('admin/partials/header')
  <!-- Left side column. contains the logo and sidebar -->
 
    @include('admin/partials/navigation')
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        @if(empty($slug2))
          Dashboard
        @else
          {{ title_case( str_replace(["-","_"]," ",$slug2) ) }}
        @endif
        @if(!empty($slug3))
          <small>{{ title_case( str_replace(["-","_"]," ",$slug3) ) }}</small>
        @endif
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        @if(empty($slug2))
          <li class="active">Dashboard</li>
        @else
          <li class="active">
            @if( !in_array($slug2,['users']) )
              <a href="{{ url('/admin').'/'.$slug2 }}">{{ title_case( str_replace(['-', '_']," ",$slug2) ) }}</a>
            @else
              <a href="javascript:void(0);">{{ title_case( str_replace(['-', '_']," ",$slug2) ) }} </a>
            @endif
            <!-- <a href="{{ url('/admin').'/'.$slug2 }}">
              {{ title_case( str_replace(["-","_"]," ",$slug2) ) }}
            </a> -->
          </li>
        @endif
        @if(!empty($slug3))
          <li class="active">
            @if( !empty($slug4) )
              <a href="{{ url('/admin').'/'.$slug2.'/'.$slug3.'/'.$slug4 }}">{{ title_case( str_replace(['-', '_']," ",$slug3) ) }}</a>
            @else
              <a href="javascript:void(0);">{{ title_case( str_replace(['-', '_']," ",$slug3) ) }} </a>
            @endif
          </li>  
        @endif

        @if(!empty($slug4) && !is_numeric(base64_decode($slug4)) )
        <li class="active">
              {{ title_case( str_replace(["-","_"]," ",$slug4) ) }}
        </li>
        @endif
      </ol>
    </section>

    @yield('content')

 </div>   
 
  <!-- /.content-wrapper -->
 
 @include('admin/partials/footer')


  
</div>
<!-- ./wrapper -->


<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('public/admins/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('public/admins/plugins/validation/bootstrapValidator.min.js') !!}"></script>
<script src="{!! asset('public/admins/plugins/validation/formvalidation.js') !!}"></script>
<!-- Morris.js charts -->
<script src="{!! asset('public/admins/bower_components/raphael/raphael.min.js') !!}"></script>
<script src="{!! asset('public/admins/bower_components/morris.js/morris.min.js') !!}"></script>
<!-- Sparkline -->
<script src="{!! asset('public/admins/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}"></script>
<!-- DataTables -->
<script src="{!! asset('public/admins/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('public/admins/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>

<!-- jvectormap -->
<script src="{!! asset('public/admins/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
<script src="{!! asset('public/admins/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
<!-- jQuery Knob Chart -->
<script src="{!! asset('public/admins/bower_components/jquery-knob/dist/jquery.knob.min.js') !!}"></script>
<!-- daterangepicker -->
<script src="{!! asset('public/admins/bower_components/moment/min/moment.min.js') !!}"></script>
<script src="{!! asset('public/admins/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>
<!-- datepicker -->
<script src="{!! asset('public/admins/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{!! asset('public/admins/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
<!-- Slimscroll -->
<script src="{!! asset('public/admins/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('public/admins/bower_components/fastclick/lib/fastclick.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('public/admins/dist/js/adminlte.min.js') !!}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{!! asset('public/admins/dist/js/pages/dashboard.js') !!}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{!! asset('public/admins/dist/js/demo.js') !!}"></script>

<!-- iCheck 1.0.1 -->
<script src="{!! asset('public/admins/plugins/iCheck/icheck.min.js') !!}"></script>

<script src="{{ asset('public/js/toastr.min.js') }}"></script>

<script src="{{ asset('public/admins/bower_components/ckeditor/ckeditor.js') }}"></script>

<script src="{!! asset('public/admins/jquery-adapter.js') !!}"></script>

<script type="text/javascript">
  $(document).on("keypress",".numberOnly",function(event){
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
      return true;
    } else if ( key < 48 || key > 57 ) {
      return false;
    } else {
      return true;
    }
  });
</script>


@toastr_render

@stack('scripts')


</body>
</html>
