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

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- Fontfaces CSS-->
    <link href="{{ asset('admin/00_AdminDashboard/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/font-awesome-4.7/css/font-awesome.min.css') }}"
        rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/font-awesome-5/css/fontawesome-all.min.css') }}"
        rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/mdi-font/css/material-design-iconic-font.min.css') }}"
        rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet"
        media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('admin/00_AdminDashboard/vendor/animsition/animsition.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('admin/00_AdminDashboard/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet"
        media="all">

    <!-- Main CSS-->
    <link href="{{ asset('admin/00_AdminDashboard/css/theme.css') }}" rel="stylesheet" media="all">

    {{-- fontawesome Link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('admin/00_AdminDashboard/images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{ route('category#list') }}">
                                <i class="fa-solid fa-list"></i>Category</a>
                        </li>
                        <li>
                            <a href="{{ route('products#pizzalist') }}">
                                <i class="fa-solid fa-pizza-slice"></i>Pizza</a>
                        </li>
                        <li>
                            <a href="{{ route('admin#orderList') }}">
                                <i class="fa-solid fa-list-check"></i>Order List</a>
                        </li>
                        <li>
                            <a href="{{ route('admin#userList') }}">
                                <i class="fa-solid fa-users"></i>User List</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <span class="form-header">
                                <h4>Admin Dashboard Panel</h4>
                                {{-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> --}}
                            </span>
                            <div class="header-button">
                                {{-- <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            @if (Auth::user()->image == null)
                                                @if(Auth::user()->image == 'male')
                                                    <img src="{{ asset('image/default_user.jpg') }}" class="img-cir">
                                                @else
                                                    <img src="{{ asset('image/female_default.png') }}" class="img-cir">
                                                @endif
                                            @else
                                                <img
                                                    src="{{ asset('storage/'.Auth::user()->image) }}" />
                                            @endif
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        @if (Auth::user()->image == null)
                                                            @if(Auth::user()->image == 'male')
                                                                <img src="{{ asset('image/default_user.jpg') }}" class="img-cir">
                                                            @else
                                                                <img src="{{ asset('image/female_default.png') }}" class="img-cir">
                                                            @endif
                                                        @else
                                                            <img
                                                                src="{{ asset('storage/'.Auth::user()->image) }}" />
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('admin#details') }}">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('admin#list') }}">
                                                        <i class="fa-solid fa-users"></i>Admin List</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('admin#changePasswordPage') }}">
                                                        <i class="fa-solid fa-key"></i>Change Password</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer my-3">
                                                <form action="{{ route('logout') }}" method="POST"
                                                    class="d-flex justify-content-center">
                                                    @csrf
                                                    <button class="btn bg-dark text-white col-10" type="submit">
                                                        <i class="fa-solid fa-right-from-bracket me-2"></i>Logout
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            @yield('content')
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Jquery JS-->
    <script src="{{ asset('admin/00_AdminDashboard/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('admin/00_AdminDashboard/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/00_AdminDashboard/vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('admin/00_AdminDashboard/js/main.js') }}"></script>
    {{-- jQuery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
    @yield('scriptSource')

</html>
<!-- end document-->
