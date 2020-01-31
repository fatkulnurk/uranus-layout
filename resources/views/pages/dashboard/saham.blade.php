@extends('layouts.dashboard')

@section('title', 'Aplikasi Sosial dan Edukasi')

@section('content')
    <div class="hero is-white">
        <div class="hero-body has-text-centered">
            <p class="title is-3 has-text-primary">Saham</p>
            <p class="subtitle">Pilih Bisnis yang Bagus-bagus, Sebelum kehabisan</p>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <div class="box">
                        <div class="field">
                            <label class="label">Cari Bisnis</label>

                            <p class="control has-icons-left">
                                <input class="input" type="text" placeholder="Text input">
                                <span class="icon is-small is-left">
                                        <i class="fas fa-search"></i>
                                    </span>
                            </p>

                        </div>
                        <div class="field">
                            <label class="label">Kategori Bisnis</label>
                            <p class="control has-icons-left">
                                    <span class="select is-fullwidth">
                                          <select>
                                            <option selected>Kategori</option>
                                              @for ($i = 0; $i < 10; $i++)
                                                  <option>Select dropdown</option>
                                              @endfor
                                          </select>
                                    </span>
                                <span class="icon is-small is-left">
                                        <i class="fas fa-globe"></i>
                                    </span>
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">Status Pendanaan</label>
                            <p class="control has-icons-left">
                                    <span class="select is-fullwidth">
                                        <select>
                                            <option selected>status</option>
                                            <option>Tersedia</option>
                                            <option>Selesai</option>
                                            <option>Dihentikan</option>
                                            <option>Melanggar Aturan</option>
                                         </select>
                                    </span>
                                <span class="icon is-small is-left">
                                        <i class="fas fa-globe"></i>
                                    </span>
                            </p>
                        </div>
                        <div class="field">
                            <div class="control">
                                <a href="" class="button is-primary is-fullwidth">Filter Data</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="box">
                                <div class="media">
                                    <div class="media-left">
                                        <figure class="image is-64x64">
                                            <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                        </figure>
                                    </div>
                                    <div class="media-content">
                                        <div class="content">
                                            <p>
                                                <a href="{{ route('web.dashboard.saham-detail', $i) }}" class="has-text-weight-bold has-text-black">Soto Lamongan Cak Mamet</a>
                                                <br>
                                                Dibutuhkan Rp 512.000.000 - Imbal Balik 2%
                                                <br>
                                                <span class="has-text-weight-light">PT. Exatera Mega Sentosa - Sampai 23 Juni 2019</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor

                        <div class="field">
                            <div class="control">
                                <a href="{{ route('web.dashboard.saham') }}" class="button is-primary is-fullwidth">Selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="notification is-warning">
                        <strong>Peringatan: </strong> <br>
                        Pembelian saham bisnis merupakan aktivitas beresiko tinggi. Anda berinvestasi pada bisnis yang mungkin saja mengalami kenaikan dan penurunan kinerja bahkan mengalami kegagalan.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
