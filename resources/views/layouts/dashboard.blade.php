<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ getenv('APP_NAME') }} - @yield('title')</title>
    <link rel="icon" type="image/png" href="favicon.png"/>

    <!--Core CSS -->
    <link rel="stylesheet" href="{{ asset('css/library-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
{{--    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    @stack('stack-head')
</head>
<body>
<div class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                {{--                <img src="{{ asset('images/logo.png') }}" alt="">--}}
                <span class="logo-text has-text-primary is-bold">{{ getenv('APP_NAME') }}</span>
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
{{--            <div class="navbar-start">--}}
{{--                <a class="navbar-item" href="/">--}}
{{--                    Home--}}
{{--                </a>--}}
{{--            </div>--}}

            <div class="navbar-end">
                <a class="navbar-item" href="{{ route('web.dashboard.index') }}">
                    Dashboard
                </a>
{{--                <div class="navbar-item has-dropdown is-hoverable">--}}
{{--                    <a class="navbar-link">--}}
{{--                        More--}}
{{--                    </a>--}}

{{--                    <div class="navbar-dropdown">--}}
{{--                        <a class="navbar-item">--}}
{{--                            About--}}
{{--                        </a>--}}
{{--                        <a class="navbar-item">--}}
{{--                            Jobs--}}
{{--                        </a>--}}
{{--                        <a class="navbar-item">--}}
{{--                            Contact--}}
{{--                        </a>--}}
{{--                        <hr class="navbar-divider">--}}
{{--                        <a class="navbar-item">--}}
{{--                            Report an issue--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                --}}
                <a class="navbar-item" href="{{ route('web.dashboard.investasiku.saham') }}">
                    Proyek Investasiku
                </a>
                <a class="navbar-item" href="{{ route('web.dashboard.investasiku.proyek') }}">
                    Saham Investasiku
                </a>
                <a class="navbar-item" href="{{ route('web.dashboard.proyek') }}">
                    List Proyek
                </a>
                <a class="navbar-item" href="{{ route('web.dashboard.saham') }}">
                    List Saham
                </a>
                <a class="navbar-item" href="">
                    Laporan
                </a>
                <div class="navbar-item">
                    <a href="{{ route('web.dashboard.profile') }}" class="button is-primary is-rounded is-outlined">
                        <span class="icon">
                            <i class="far fa-user"></i>
                        </span>
                        <span>Profile</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding-top: 72px"></div>

@yield('content')

{{--<footer class="footer has-background-grey-dark">--}}
{{--    <div class="container">--}}
{{--        <div class="has-text-centered has-text-white">--}}
{{--            <p>--}}
{{--                &copy; 2020 {{ getenv('APP_NAME') }}--}}
{{--            </p>--}}
{{--            <p>HAK CIPTA DI LINDUNGI TUHAN YANG MAHA ESA</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}

<!-- Back To Top Button -->
<div id="backtotop"><a><i class="fas fa-angle-up"></i></a></div>

<!-- Concatenated plugins -->
{{--<script src="https://preview.cssninja.io/demos/houseo/assets/js/app.js"></script>--}}
<script src="{{ asset('js/library-bundle.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

<!--Data-->

<!-- Main js -->
<script src="{{ asset('js/functions.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

{{--<script src="https://preview.cssninja.io/demos/houseo/assets/js/functions.js"></script>--}}
{{--<script src="https://preview.cssninja.io/demos/houseo/assets/js/main.js"></script>--}}

@stack('stack-foot')
<!--Pages-->
</body>
</html>
