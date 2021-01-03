<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>{{ (getSettings('site-title'))? getSettings('site-title') : env("APP_NAME", "Laravel") }}  @yield('title')</title>
    
    <!-- Favicon Icon -->
    <link href="{{ asset('public/front/images/fav.png') }}" rel="icon" type="image/png" >
    
    <!-- Stylesheets -->
    <link href="{{ asset('public/front/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('public/front/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/demo.css') }}" />
    <link href="{{ asset('public/front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/front/css/datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/front/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('public/front/vendor/OwlCarousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('public/front/vendor/OwlCarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet"> -->  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- Semantic Css -->
    <link href="{{ asset('public/front/vendor/semantic/semantic.min.css') }}" rel="stylesheet" type="text/css">

    @if(Auth::check())
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.css' rel='stylesheet' />
    <style type="text/css">
      .checked {
        color: #b2c322;
      }
    </style>
  @endif

    <!-- <link rel="stylesheet" type="text/css" href="./slick/slick.css">
      <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> -->

    <style>

      @media (min-width: 768px){
        .col-md-10 {
            flex: 0 0 100% !important;
            max-width: 100% !important;
        }

        .col-lg-8 li {
            width: 100%;
            padding: 30px 0 0 0;
        }
      }

      @media (max-width: 768px){
        .slick-initialized .slick-slide {
            width: 10% !important;
        }

        .slick-list {
            height: 120px;
          }

          .slick-track {
            height: 120px !important;
        }

        .banner_text {
            padding: 75px 0 0px 0;
        }

        .col-lg-8 li {
            text-align: center;
        }

        .featured-candidates {
            padding: 25px 0 40px;
        }

        .get-listed {
            float: left;
            width: 100%;
            padding: 25px 0 40px 0;
        }

        .col-lg-8 li {
            width: 100%;
            padding: 10px 0 0 0;
        }
      }

      .box {
          background: #f1f1f1;
      }

      #client-testimonial-carousel {
        min-height: 200px;
      }

      .mb-0, .my-0 {
          color: #000;
      }

      .pad0 h4{
        font-size: 1.2rem;
          color: #767cbd;
      }

      .pad0 p{
        color:#000;
      }

      .col-lg-8 {
          text-align: center;
      }

      .col-lg-8 li h2 {
          color: rgb(0, 128, 0);
          font-weight: 700;
          font-size: 30px;
      }

      /*.col-lg-8 ul {
          padding: 50px 0;
      }*/

      .post-buttons {
          text-align: center;
      }

      /*
          code by Iatek LLC 2018 - CC 2.0 License - Attribution required
          code customized by Azmind.com
      */
      @media (min-width: 768px) and (max-width: 991px) {
          /* Show 4th slide on md if col-md-4*/
          .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
              position: absolute;
              top: 0;
              right: -33.3333%;  /*change this with javascript in the future*/
              z-index: -1;
              display: block;
              visibility: visible;
          }
      }
      @media (min-width: 576px) and (max-width: 768px) {
          /* Show 3rd slide on sm if col-sm-6*/
          .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
              position: absolute;
              top: 0;
              right: -50%;  /*change this with javascript in the future*/
              z-index: -1;
              display: block;
              visibility: visible;
          }
      }
      @media (min-width: 576px) {
          .carousel-item {
              margin-right: 0;
          }
          /* show 2 items */
          .carousel-inner .active + .carousel-item {
              display: block;
          }
          .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
          .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
              transition: none;
          }
          .carousel-inner .carousel-item-next {
              position: relative;
              transform: translate3d(0, 0, 0);
          }
          /* left or forward direction */
          .active.carousel-item-left + .carousel-item-next.carousel-item-left,
          .carousel-item-next.carousel-item-left + .carousel-item,
          .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
              position: relative;
              transform: translate3d(-100%, 0, 0);
              visibility: visible;
          }
          /* farthest right hidden item must be also positioned for animations */
          .carousel-inner .carousel-item-prev.carousel-item-right {
              position: absolute;
              top: 0;
              left: 0;
              z-index: -1;
              display: block;
              visibility: visible;
          }
          /* right or prev direction */
          .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
          .carousel-item-prev.carousel-item-right + .carousel-item,
          .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
              position: relative;
              transform: translate3d(100%, 0, 0);
              visibility: visible;
              display: block;
              visibility: visible;
          }
      }
      /* MD */
      @media (min-width: 768px) {
          /* show 3rd of 3 item slide */
          .carousel-inner .active + .carousel-item + .carousel-item {
              display: block;
          }
          .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
              transition: none;
          }
          .carousel-inner .carousel-item-next {
              position: relative;
              transform: translate3d(0, 0, 0);
          }
          /* left or forward direction */
          .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
              position: relative;
              transform: translate3d(-100%, 0, 0);
              visibility: visible;
          }
          /* right or prev direction */
          .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
              position: relative;
              transform: translate3d(100%, 0, 0);
              visibility: visible;
              display: block;
              visibility: visible;
          }
      }
      /* LG */
      @media (min-width: 991px) {
          /* show 4th item */
          .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
              display: block;
          }
          .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
              transition: none;
          }
          /* Show 5th slide on lg if col-lg-3 */
          .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
              position: absolute;
              top: 0;
              right: -25%;  /*change this with javascript in the future*/
              z-index: -1;
              display: block;
              visibility: visible;
          }
          /* left or forward direction */
          .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
              position: relative;
              transform: translate3d(-100%, 0, 0);
              visibility: visible;
          }
          /* right or prev direction //t - previous slide direction last item animation fix */
          .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
              position: relative;
              transform: translate3d(100%, 0, 0);
              visibility: visible;
              display: block;
              visibility: visible;
          }
      }


    </style>

     <!-- toastr -->
  <link rel="stylesheet" href="{{ asset('public/css/toastr.min.css') }}">

    @stack('styles')
    
  </head>
  <body>


    @yield('content')
  

<!-- ./wrapper -->




  <!-- footer End -->
    <!-- Scroll to Top Button Start -->
    <button onclick="topFunction()" id="pageup" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <!-- Scroll to Top Button End -->
    <!-- Scripts js --> 
    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

    <script src="{{ asset('public/front/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('public/front/js/i18n/datepicker.en.js') }}"></script>
    <script src="{{ asset('public/front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/front/vendor/OwlCarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('public/front/vendor/semantic/semantic.min.js') }}"></script>
    <script src="{{ asset('public/front/js/custom1.js') }}"></script>
    <script src="{{ url('public/front/js/jquery.range-min.js') }}"></script>
    
    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <script src="{{ asset('public/front/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
    </script>
    
    <script>
    $(document).ready(function(){

      if($('.brands_slider').length)
      {
      var brandsSlider = $('.brands_slider');

      brandsSlider.owlCarousel(
      {
      loop:true,
      autoplay:true,
      autoplayTimeout:5000,
      nav:false,
      dots:false,
      autoWidth:true,
      items:8,
      margin:42
      });

      if($('.brands_prev').length)
      {
      var prev = $('.brands_prev');
      prev.on('click', function()
      {
      brandsSlider.trigger('prev.owl.carousel');
      });
      }

      if($('.brands_next').length)
      {
      var next = $('.brands_next');
      next.on('click', function()
      {
      brandsSlider.trigger('next.owl.carousel');
      });
      }
      }


      });
    </script> 
    
    <script>
      /*
          Carousel
      */
      $('#carousel-example').on('slide.bs.carousel', function (e) {
          /*
              CC 2.0 License Iatek LLC 2018 - Attribution required
          */
          var $e = $(e.relatedTarget);
          var idx = $e.index();
          var itemsPerSlide = 5;
          var totalItems = $('.carousel-item').length;
       
          if (idx >= totalItems-(itemsPerSlide-1)) {
              var it = itemsPerSlide - (totalItems - idx);
              for (var i=0; i<it; i++) {
                  // append slides to end
                  if (e.direction=="left") {
                      $('.carousel-item').eq(i).appendTo('.carousel-inner');
                  }
                  else {
                      $('.carousel-item').eq(0).appendTo('.carousel-inner');
                  }
              }
          }
      });
    </script>    

    <script src="{{ asset('public/js/toastr.min.js') }}"></script>
    <script src="{!! asset('public/js/moment.min.js') !!}"></script>
    <script src="{!! asset('public/js/moment-timezone-with-data.min.js') !!}"></script>
    <script src="{!! asset('public/admins/plugins/validation/bootstrapValidator.min.js') !!}"></script>
    <script src="{!! asset('public/front/js/formvalidation.js') !!}"></script>
    @if(Auth::check())
    <script src='https://unpkg.com/es6-promise@4.2.4/dist/es6-promise.auto.min.js'></script>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.3.1/mapbox-gl.js'></script>
    <script src="https://unpkg.com/@mapbox/mapbox-sdk/umd/mapbox-sdk.min.js"></script>

    
      <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FtYm9sIiwiYSI6ImNqdm03bzYydDE2cW00YWwyeHprd3FqamcifQ.HBy4R4sRcXgbgn2OteqFkQ';
        var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
        mapboxClient.geocoding.forwardGeocode({
        query: '{{Auth::user()->address}}',
        autocomplete: false,
        limit: 1
        })
        .send()
        .then(function (response) {
        if (response && response.body && response.body.features && response.body.features.length) {
        var feature = response.body.features[0];
        console.log(feature);
       
        var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: feature.center,
        zoom: 10
        });       
    
        new mapboxgl.Marker()
        .setLngLat(feature.center)
        .addTo(map);
        }
        
        // Add zoom and rotation controls to the map.
        map.addControl(new mapboxgl.NavigationControl());
        }); 
      </script>
    @endif
@toastr_render

@stack('scripts')   
    
  </body>
  
</html>