@extends('layouts.app')

@section('title', 'Platform Gotong Royong Untuk UKM')

@section('content')
    <div class="hero is-white">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h2 class="title is-2 has-text-primary">Produk Kami</h2>
                <p class="subtitle is-3">Layanan yang bisa anda gunakan di {{ getenv('APP_NAME') }}</p>
            </div>
        </div>
    </div>

    <div class="section is-medium">
        <div class="container">
            <div class="columns is-vcentered side-feature">
                <div class="column is-5 is-hidden-desktop is-hidden-tablet">
                    <figure class="image is-1by1">
                        <img src="{{ asset('images/undraw_Group_chat_unwm.svg') }}" alt="">
                    </figure>
                </div>
                <div class="column is-7">
                    <h3 class="title is-2 is-bold is-title-reveal has-text-primary">Proyek Bersama</h3>
                    <p class="subtitle">Investasi bisnis dengan skema gotong royong, tujuannya untuk membantu pengembangan produk baru atau usaha baru.</p>
                </div>
                <div class="column is-5 is-hidden-mobile">
                    <figure class="image is-5by4">
                        <img src="{{ asset('images/undraw_Group_chat_unwm.svg') }}" alt="">
                    </figure>
                </div>
            </div>

            <div class="columns is-vcentered side-feature">
                <div class="column is-5 is-hidden-desktop is-hidden-tablet">
                    <figure class="image is-1by1">
                        <img src="{{ asset('images/undraw_segmentation_uioo.svg') }}" alt="">
                    </figure>
                </div>
                <div class="column is-5 is-hidden-mobile">
                    <figure class="image is-5by4">
                        <img src="{{ asset('images/undraw_segmentation_uioo.svg') }}" alt="">
                    </figure>
                </div>
                <div class="column is-7">
                    <h3 class="title is-2 is-bold is-title-reveal has-text-primary">Equity UKM</h3>
                    <p class="subtitle">Investasi bisnis dengan skema kepemilikan saham, anda akan mendapatkan dividen dari bisnis yang anda investasikan.</p>
                </div>
            </div>
        </div>
    </div>


@endsection
