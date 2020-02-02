@extends('layouts.app')

@section('title', 'Platform Gotong Royong Untuk UKM')

@section('content')
    <div class="hero is-fullwidth is-medium is-white">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered hero-caption">
                    <div class="column is-5 is-offset-1">
                        <img src="{{ asset('images/icon-hero-depan.svg') }}">
                    </div>
                    <div class="column is-5 is-offset-1">
                        <h1 class="title is-1 is-bold has-text-primary">
                            Selamat Datang
                        </h1>
                        <h2 class="title is-2 has-text-primary">
                            Ayo Gotong Royong Untuk Lebih Sukses
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-foot">
        <div class="container">
            <div class="tabs is-centered">
                <ul>
                    <li><img src="{{ asset('images/partners/gutwork.svg') }}" alt=""></li>
                    <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/1280px-BANK_BRI_logo.svg.png" alt=""></li>
                    <li><img src="https://www.google.com/logos/doodles/2015/googles-new-logo-5078286822539264.3-hp2x.gif" alt=""></li>
                    <li><img src="https://cdn.pixabay.com/photo/2015/05/26/09/37/paypal-784404_960_720.png" alt="" style="max-width: 128px"></li>
                </ul>
            </div>
        </div>
        </div>
    </div>

    <div class="section is-medium">
        <div class="container">
            <div class="columns is-vcentered side-feature">
                <div class="column is-5 is-hidden-desktop is-hidden-tablet">
                    <figure class="image is-1by1">
                        <img src="{{ asset('images/undraw_Savings_dwkw.svg') }}" alt="">
                    </figure>
                </div>
                <div class="column is-7">
                    <h3 class="title is-2 is-bold is-title-reveal has-text-primary">Apa itu {{ getenv('APP_NAME') }}?</h3>
                    <p class="subtitle">{{ getenv('APP_NAME') }} Adalah Platform Urun Dana untuk Ekspansi Bisnis UMKM di Indonesia.</p>
                </div>
                <div class="column is-5 is-hidden-mobile">
                    <figure class="image is-5by4">
                        <img src="{{ asset('images/undraw_Savings_dwkw.svg') }}" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="hero is-medium is-primary is-bold is-fullwidth">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="columns">
                    <div class="column is-6">
                        <h3 class="title is-3 has-text-weight-bold">Menjadi Investor</h3>
                        <p class="subtitle">Pilih investasi yang bagus untuk anda, hanya perlu modal mulai dari 10rb saja</p>
                        <p>
                            <button class="button is-white is-rounded is-medium">Jadi Investor</button>
                        </p>
                    </div>
                    <div class="column is-6">
                        <h3 class="title is-3 has-text-weight-bold">Daftarkan Bisnis / Proyek</h3>
                        <p class="subtitle">Butuh modal untuk mengembangkan bisnis Anda? Kumpulkan modal hingga Rp 10M dalam waktu cepat.</p>
                        <p>
                            <button class="button is-white is-rounded is-medium">Daftarkan Bisnis</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
