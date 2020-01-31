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
    {{--    <link rel="stylesheet" href="https://preview.cssninja.io/demos/houseo/assets/css/app.css">--}}
{{--    <link rel="stylesheet" href="https://preview.cssninja.io/demos/houseo/assets/css/bulma.css">--}}
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" integrity="sha256-D9M5yrVDqFlla7nlELDaYZIpXfFWDytQtiV+TaH6F1I=" crossorigin="anonymous">--}}
    {{--    <link rel="stylesheet" href="https://preview.cssninja.io/demos/houseo/assets/css/main.css">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    @stack('stack-head')
</head>
<body>
{{--<div class="pageloader"></div>--}}
{{--<div class="infraloader is-active"></div>--}}
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
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Home
                </a>
            </div>

            <div class="navbar-end">
                <a class="navbar-item" href="/">
                    Produk
                </a>
                <a class="navbar-item" href="/">
                    Cara Investasi
                </a>
                <a class="navbar-item" href="/">
                    Tim Kami
                </a>
                <a class="navbar-item" href="/">
                    Tentang Kami
                </a>
                <div class="navbar-item">
                    <a href="{{ route('web.login') }}" class="button is-primary is-inverted is-rounded">
                        Masuk
                    </a>
                </div>
                <div class="navbar-item">
                    <a href="{{ route('web.daftar') }}" class="button is-primary is-outlined is-rounded">
                        Daftar
                    </a>
                </div>
                <div class="navbar-item">
                    <a href="{{ route('web.dashboard.index') }}" class="button is-primary is-rounded">
                        Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div style="padding-top: 72px"></div>--}}

@yield('content')

<footer class="footer has-background-grey-dark">
    <div class="container">
        <div class="columns">
            <div class="column is-3">
                <h4 class="title is-3 is-bold has-text-primary">{{ getenv('APP_NAME') }}</h4>
                <p class="footer-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultrices in risus sed fermentum.
                </p>
                <div class="socials">
                    <a><i class="fa fa-instagram"></i></a>
                    <a><i class="fa fa-facebook"></i></a>
                    <a><i class="fa fa-pinterest"></i></a>
                    <a><i class="fa fa-medium"></i></a>
                </div>
            </div>
            <div class="column is-2 is-offset-1">
                <ul class="footer-menu">
                    <li><a href="">Tentang Kami</a></li>
                    <li><a href="">Produk</a></li>
                    <li><a href="">Tim Kami</a></li>
                    <li><a href="">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="column is-2">
                <ul class="footer-menu">
                    <li><a href="">Syarat dan Ketentuan</a></li>
                    <li><a href="">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div class="column is-5">
                <h4 class="title is-5 has-text-weight-bold has-text-white">Unduh</h4>
                <div class="columns">
                    <div class="column is-6"><i class="fab fa-google-play"></i></div>
                </div>
            </div>
        </div>
        <hr>
        <div class="has-text-centered has-text-white">
            <p>
                &copy; 2020 {{ getenv('APP_NAME') }}
            </p>
            <p>HAK CIPTA DI LINDUNGI TUHAN YANG MAHA ESA</p>
{{--            <p class="has-text-left">--}}
{{--                Pembelian saham bisnis merupakan aktivitas beresiko tinggi. Anda berinvestasi pada bisnis yang mungkin saja mengalami kenaikan dan penurunan kinerja bahkan mengalami kegagalan.--}}
{{--                <br>--}}
{{--                Harap menggunakan pertimbangan ekstra dalam membuat keputusan untuk membeli saham. Ada kemungkinan Anda tidak bisa menjual kembali saham bisnis dengan cepat.--}}
{{--                <br>--}}
{{--                Lakukan diversifikasi investasi, hanya gunakan dana yang siap Anda lepaskan (affors to loose) dan atau disimpan dalam jangka panjang.--}}
{{--                <br>--}}
{{--                Santara tidak memaksa pengguna untuk membeli saham bisnis sebagai investasi. Semua keputusan pembelian merupakan keputusan independen oleh pengguna.--}}
{{--                <br>--}}
{{--                Santara bertindak sebagai penyelenggara urun dana yang mempertemukan pemodal dan penerbit, bukan sebagai pihak yang menjalankan bisnis (Penerbit). Otoritas Jasa Keuangan bertindak sebagai regulator dan pemberi izin, bukan sebagai penjamin investasi.--}}
{{--                <br>--}}
{{--                Keputusan pembelian saham, sepenuhnya merupakan hak dan tanggung jawab Pemodal (investor).--}}
{{--            </p>--}}
        </div>
    </div>
</footer>

<!-- Back To Top Button -->
<div id="backtotop"><a></a></div>

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
