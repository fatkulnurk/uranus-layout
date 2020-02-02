@extends('layouts.app')

@section('title', 'Platform Gotong Royong Untuk UKM')

@section('content')
    <div class="hero is-fullwidth is-medium is-white">
        <div class="hero-body">
            <div class="container has-text-centered">
            </div>
        </div>
    </div>

    <div class="section is-medium">
        <div class="container">
            <div class="columns is-vcentered side-feature">
                <div class="column is-5 is-hidden-desktop is-hidden-tablet">
                    <figure class="image is-1by1">
                        <img src="{{ asset('images/illustration_anak_kecil.png') }}" alt="">
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

@endsection
