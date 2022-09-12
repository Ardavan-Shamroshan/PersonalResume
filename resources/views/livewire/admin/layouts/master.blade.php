<!DOCTYPE html>
<html lang="en">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>سایت شخصی اردوان شام روشن</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/vendor.bundle.base.css') }}">
@stack('head-tag')
<!-- Layout styles -->
<link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
<!-- End layout styles -->
<link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}" />
@if ($setting)
<link rel="icon" href="{{ asset($setting->logo) }}">
@endif

@livewireStyles
</head>

<body>
    <div class="container-scroller">
        <livewire:admin.layouts.sidebar />
        <div class="container-fluid page-body-wrapper">
            <livewire:admin.layouts.header />
            {{ $slot }}
        </div>
    </div>


    <!-- plugins:js -->
    <script src="{{ asset('admin-assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- inject:js -->
    <script src="{{ asset('admin-assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin-assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin-assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin-assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin-assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin-assets/js/dashboard.js') }}"></script>
    @stack('scripts')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>

</html>
