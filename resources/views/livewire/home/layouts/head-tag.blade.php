<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{{ $setting->title }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('home-assets/css/plugins.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home-assets/css/dark.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home-assets/css/colors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('home-assets/css/style.css') }}" />
    <link rel="icon" href="{{ asset($setting->logo) }}">
    
     <!-- IMPORTANT!!! remember CSRF token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! htmlScriptTagJsApi() !!}
    @stack('head-tag')
    @livewireStyles
</head>
