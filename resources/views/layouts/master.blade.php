<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('admin/00_AdminDashboard/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('admin/00_AdminDashboard/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('admin/00_AdminDashboard/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{ asset('admin/00_AdminDashboard/images/icon/logo.png') }}" alt="CoolAdmin">
                            </a>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('admin/00_AdminDashboard/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('admin/00_AdminDashboard/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('admin/00_AdminDashboard/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
