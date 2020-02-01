@extends('layouts.dashboard')

@section('title', 'Aplikasi Sosial dan Edukasi')

@section('content')
    <div class="hero is-white">
        <div class="hero-body has-text-centered">
            <p class="title is-3 has-text-primary">Laporan</p>
            <p class="subtitle">Berisi semua informasi mengenai semua Transaksi anda</p>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-3">
                    <div class="box">
                        <div class="field">
                            <label class="label">Kategori Transaksi</label>
                            <p class="control has-icons-left">
                                <span class="select is-fullwidth">
                                    <select>
                                        <option selected>Kategori</option>
                                        <option>Penarikan Saldo</option>
                                              <option>Topup Saldo</option>
                                              <option>Dividen Saham</option>
                                              <option>Keuntungan Proyek</option>
                                          </select>
                                </span>
                                <span class="icon is-small is-left">
                                        <i class="fas fa-globe"></i>
                                    </span>
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">Status Transaksi</label>
                            <p class="control has-icons-left">
                                    <span class="select is-fullwidth">
                                        <select>
                                            <option selected>semua status</option>
                                            <option>Selesai</option>
                                            <option>Proses</option>
                                            <option>Batal</option>
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
                                <div class="content">
                                    <p>
                                        <span class="has-text-weight-bold has-text-black">Penarikan Saldo</span> <span class="tag is-success">Sukses</span>
                                        <br>Penarikan saldo sebesar Rp 1.000.000 sukses ke Bank Mandiri, Atas nama Fatkul Nur Koirudin, dengan nomor rekening 1010-1010-1010-1010
                                    </p>
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
                        Pembelian saham bisnis merupakan aktivitas beresiko tinggi. Anda berinvestasi pada bisnis yang
                        mungkin saja mengalami kenaikan dan penurunan kinerja bahkan mengalami kegagalan.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
