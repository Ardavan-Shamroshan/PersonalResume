<!DOCTYPE html>
<html lang="en">
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>سایت شخصی اردوان شام روشن</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/css/vendor.bundle.base.css') }}">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/jvectormap/jquery-jvectormap.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
<!-- End plugin css for this page -->
<!-- inject:css -->
<!-- endinject -->
<!-- Layout styles -->
<link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
<!-- End layout styles -->
<link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}" />
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


    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin-assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin-assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/prog/ressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin-assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin-assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin-assets/js/misc.js') }}"></script>
    <script src="{{ asset('admin-assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin-assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin-assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->


    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>

</html>
