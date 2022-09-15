<!DOCTYPE html>
<html lang="fa">

<head>
    <livewire:home.layouts.head-tag />
</head>

<body class="light blog">
    <div class="page">
        <!-- Wrapper Starts -->
        {{ $slot }}
    </div>

    <!-- Main Content Ends -->
    <!-- Preloader Starts -->
    <livewire:home.layouts.preloader />
    <!-- Preloader Ends -->

    <!-- Template JS Files -->
    <script src="{{ asset('home-assets/js/jquery-2.2.4.min.js ') }}"></script>
    <script src="{{ asset('home-assets/js/jquery.animatedheadline.js ') }}"></script>
    <script src="{{ asset('home-assets/js/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('home-assets/js/transition.js ') }}"></script>
    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{ asset('home-assets/js/styleswitcher.js ') }}"></script>
    <!-- Main JS Initialization File -->
    <script src="{{ asset('home-assets/js/custom.js ') }}"></script>

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>


</html>
