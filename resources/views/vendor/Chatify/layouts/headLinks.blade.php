{{-- Meta tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="route" content="{{ $route }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('').'/'.config('chatify.path') }}" data-user="{{ Auth::user()->id }}">

{{-- scripts --}}
<script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/chatify/font.awesome.min.js') }}"></script>
<script src="{{ asset('public/js/chatify/autosize.js') }}"></script>
<script src="{{ asset('public/js/app.js') }}"></script>
<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
<link href="{{ asset('public/css/chatify/style.css') }}" rel="stylesheet" />
<link href="{{ asset('public/css/chatify/'.$dark_mode.'.mode.css') }}" rel="stylesheet" />
<link href="{{ asset('public/css/app.css') }}" rel="stylesheet" />

{{-- Messenger Color Style--}}
@include('Chatify::layouts.messengerColor')