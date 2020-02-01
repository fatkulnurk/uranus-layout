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

                    <div class="notification is-success">
                        <button class="delete"></button>
                        Pengajuan anda akan segera di proses.
                    </div>

                    <div class="notification is-danger">
                        <button class="delete"></button>
                        Mohon maaf, pengajuan anda tidak dapat di proses.
                    </div>

                    <div class="box">
                        <h3 class="subtitle is-4">Informasi Penarikan</h3>

                        <div class="field">
                            <label>Nama Rekening</label>
                            <p class="control has-icons-left">
                                <input class="input" type="number" placeholder="Text input">
                                <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>

                        <div class="field">
                            <label>Nomor Rekening</label>
                            <p class="control has-icons-left">
                                <input class="input" type="number" placeholder="Text input">
                                <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>

                        <div class="columns">
                            <div class="column is-6">
                                <div class="field">
                                    <label>Nama Bank</label>
                                    <p class="control has-icons-left">
                                    <span class="select is-fullwidth">
                                          <select>
                                            <option selected>Kategori</option>
                                              @for ($i = 0; $i < 10; $i++)
                                                  <option>Bank {{ $i }}</option>
                                              @endfor
                                          </select>
                                    </span>
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-globe"></i>
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="field">
                                    <label>Jumlah Uang (Rp)</label>
                                    <p class="control has-icons-left">
                                        <input class="input" type="number" placeholder="Text input">
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <button class="button is-primary is-fullwidth">
                                            <span class="icon">
                                                <i class="fas fa-coins"></i>
                                            </span>
                                <span>Ajukan Penarikan Saldo</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
