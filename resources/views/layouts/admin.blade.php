<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset("assets/libs/flatpickr/dist/flatpickr.min.css")}}">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/images/favicon/favicon.ico")}}" />

    <!-- darkmode js -->
    <script src="{{ asset("assets/js/vendors/darkMode.js")}}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset("assets/fonts/feather/feather.css")}}" rel="stylesheet" />
    <link href="{{ asset("assets/libs/bootstrap-icons/font/bootstrap-icons.min.css")}}" rel="stylesheet" />
    <link href="{{ asset("assets/libs/simplebar/dist/simplebar.min.css")}}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/theme.min.css")}}">

    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-dashboard.html">
    <title>Dashboard | Geeks - Bootstrap 5 Admin Dashboard Template</title>
    @livewireStyles
</head>

<body>
<!-- Wrapper -->
<div id="db-wrapper">
    <!-- navbar vertical -->
   @include("layouts.inc.admin.sidbar")

    <!-- Page Content -->
    <main id="page-content">
        <div class="header">
            @include('layouts.inc.admin.nav')
        </div>

        <!-- Page Header -->
        <!-- Container fluid -->
        @yield('content');
    </main>
</div>

<!-- Script -->

<!-- Libs JS -->
<script src="{{ asset("assets/libs/@popperjs/core/dist/umd/popper.min.js")}}"></script>
<script src="{{ asset("assets/libs/bootstrap/dist/js/bootstrap.min.js")}}"></script>
<script src="{{ asset("assets/libs/simplebar/dist/simplebar.min.js")}}"></script>

<!-- Theme JS -->
<script src="{{ asset("assets/js/theme.min.js")}}"></script>

<script src="{{ asset("assets/libs/apexcharts/dist/apexcharts.min.js")}}"></script>
<script src="{{ asset("assets/js/vendors/chart.js")}}"></script>
<script src="{{ asset("assets/libs/flatpickr/dist/flatpickr.min.js")}}"></script>
<script src="{{ asset("assets/js/vendors/flatpickr.js")}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@yield('script')
@livewireScripts
</body>
</html>

