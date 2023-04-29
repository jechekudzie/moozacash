<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('images/favicon.png') }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="harnishdesign.net">

    <!-- Web Fonts
    ============================================= -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheet
    ============================================= -->

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/currency-flags/css/currency-flags.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}" />


    @yield('styles')
</head>
<body>

<!-- Document Wrapper
============================================= -->
<div id="main-wrapper">

    <!-- Header
    ============================================= -->
    <header id="header">
        <div class="container">
            <div class="header-row">
                <div class="header-column justify-content-start">
                    <!-- Logo
                    ============================= -->
                    <div class="logo me-3"><a class="d-flex" href="index.html" title="Payyed - HTML Template"><img
                                src="images/logo.png" alt="Payyed"/></a></div>
                    <!-- Logo end -->
                    <!-- Collapse Button
                    ============================== -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav">
                        <span></span> <span></span> <span></span></button>
                    <!-- Collapse Button end -->

                    <!-- Primary Navigation
                    ============================== -->
                    <nav class="primary-menu navbar navbar-expand-lg">
                        <div id="header-nav" class="collapse navbar-collapse">
                            <ul class="navbar-nav me-auto">
                                <li class="active"><a href="landing-page-send.html">Send</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="fees.html">Fees</a></li>
                                <li><a href="help.html">Help</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Primary Navigation end -->
                </div>
                <div class="header-column justify-content-end">
                    <!-- Login & Signup Link
                    ============================== -->
                    <nav class="login-signup navbar navbar-expand">
                        <ul class="navbar-nav">
                            <li><a href="login.html">Login</a></li>
                            <li class="align-items-center h-auto ms-sm-3"><a class="btn btn-primary" href="signup.html">Sign
                                    Up</a></li>
                        </ul>
                    </nav>
                    <!-- Login & Signup Link end -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
</div>

<!-- Content
============================================= -->
<div id="content">

    @yield('content')

</div>

<!-- Script -->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>


</body>
</html>
