    <section class="content-header">
      <h1>
       Admin Panel
      </h1>
      <ol class="breadcrumb">
        <li><a href="{!! url('/admin') !!}"><i class="fa fa-dashboard"></i> Home</a></li>
       <!--  <li class="active">Dashboard</li> -->
        @for($i = 2; $i <= count(Request::segments()); $i++)
          @if(!is_numeric(base64_decode(Request::segment($i) && Request::segment($i) != 'users') ) )
              <li>
                 <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                    {{ucwords(str_replace("-"," ",Request::segment($i)))}}
                 </a>
              </li>
          @endif
         @endfor
      </ol>
    </section>
