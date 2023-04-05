<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="keyword" content="{{ env('APP_NAME') }}">
    <title>Cockpit - {{ ucwords($title) }}</title>
    <link rel="icon" href="asset/color-logo.png" />
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/examples.css" rel="stylesheet">
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>


<body>
    <div class="loading">
        <div class="loading-center">
            <div class="spinner-border" role="status">
            </div>
        </div>
    </div>
    @include('cockpit.component.dashboard-sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('cockpit.component.dashboard-topbar')
        @yield('page')
        <footer class="footer">
            <div> © {{ date('Y') }} <a href="{{ url('/') }}">Bumi Baik</a></div>
        </footer>
    </div>

    <script>
        baseUrl = window.location.origin;
    </script>
    <script src="js/helpers.js"></script>
    <script src="js/ajax.js"></script>
    {{-- <script src="js/jquery.min.js"></script> --}}
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script>
        $('[data-coreui-toggle="tooltip"]').tooltip()
    </script>
</body>

</html>
