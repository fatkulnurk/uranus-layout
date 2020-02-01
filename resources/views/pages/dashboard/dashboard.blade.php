@extends('layouts.dashboard')

@section('title', 'Judul')

@section('content')
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <div class="box">
                        <div class="columns">
                            <div class="column is-2 has-text-centered is-horizontal-center">
                                <div class='is-flex is-horizontal-center'>
                                    <figure class="image is-64x64 has-text-centered">
                                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                                    </figure>
                                </div>
                            </div>
                            <div class="column is-10">
                                <p class="subtitle">
                                    Halo, Fatkul Nur Koirudin
                                </p>
                                <p>Saldo Anda</p>
                                <p class="subtitle">
                                    Rp 8.032.032
                                </p>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <a href="{{ route('web.dashboard.tarik-saldo') }}" class="button is-primary is-fullwidth">
                                            <span class="icon">
                                                <i class="fas fa-coins"></i>
                                            </span>
                                            <span>Tarik Saldo</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field">
                                    <div class="control">
                                        <a href="{{ route('web.dashboard.deposit-saldo') }}" class="button is-primary is-fullwidth">
                                            <span class="icon">
                                                <i class="fas fa-money-check-alt"></i>
                                            </span>
                                            <span>Deposit Saldo</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <h3 class="subtitle is-4">Info Terbaru</h3>
                        <div class="notification">
                            Untuk Proyek (Pendanaan) TKB kita saat ini 100%.
                        </div>
                    </div>
                    <div class="box">
                        <h3 class="subtitle is-4">Proyek Terbaru</h3>
                        @for ($i = 0; $i < 3; $i++)
                            <div class="notification">
                                <a>
                                    <span class="has-text-weight-bold">Expansi Kilang Minyak di Tuban</span>
                                </a>
                                <br>
                                Dibutuhkan Rp 1.912.000.000 - Imbal Balik 12%
                                <br>
                                <span class="has-text-weight-light">Perusahaan PT. Exatera Mega Sentosa - Sampai 23 Juni 2019</span>
                            </div>
                        @endfor
                        <div class="field">
                            <div class="control">
                                <a href="{{ route('web.dashboard.proyek') }}" class="button is-primary is-fullwidth">Lihat Semua</a>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <h3 class="subtitle is-4">Saham Terbaru</h3>
                        @for ($i = 0; $i < 3; $i++)
                            <div class="notification">
                                <a>
                                    <span class="has-text-weight-bold">Soto Lamongan</span>
                                </a>
                                <br>
                                Dibutuhkan Rp 512.000.000 - Imbal Balik 2%
                                <br>
                                <span class="has-text-weight-light">Perusahaan PT. Exatera Mega Sentosa - Sampai 23 Juni 2019</span>
                            </div>
                        @endfor

                        <div class="field">
                            <div class="control">
                                <a href="{{ route('web.dashboard.saham') }}" class="button is-primary is-fullwidth">Lihat Semua</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
