    <meta charset="utf-8">
    <title>{{ $setting->title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- IMPORTANT!!! remember CSRF token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Template home-assets/css Files -->
    <link type="text/css" media="all" href="{{ asset('home-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" media="all" href="{{ asset('home-assets/css/jquery.animatedheadline.css') }}" rel="stylesheet">
    <link type="text/css" media="all" href="{{ asset('home-assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link type="text/css" media="all" href="{{ asset('home-assets/css/style.css') }}" rel="stylesheet">
    <link type="text/css" media="all" href="{{ asset('home-assets/css/skins/goldrenrod.css') }}" rel="stylesheet">

    <link rel="icon" href="{{  asset($setting->logo) }}">

    <!-- Template JS Files -->
    <script src="{{ asset('home-assets/js/modernizr.js') }}"></script>

    {!! htmlScriptTagJsApi() !!}
    @livewireStyles
