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
                                        <a href="{{ route('web.dashboard.tarik-saldo') }}"
                                           class="button is-primary is-fullwidth">
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
                                        <a href="{{ route('web.dashboard.deposit-saldo') }}"
                                           class="button is-primary is-fullwidth">
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

                    <div class="notification is-light">
                        <button class="delete"></button>
                        Saat ini kami baru mendukung deposit melalu bank BRI.
                    </div>

                    <div class="notification is-success">
                        <button class="delete"></button>
                        Pengajuan deposit anda akan segera di proses.
                    </div>

                    <div class="notification is-danger">
                        <button class="delete"></button>
                        Mohon maaf, pengajuan deposit anda tidak dapat di proses.
                    </div>

                    <div class="box">
                        <h3 class="subtitle is-4">Pengajuan Deposit</h3>

                        <div class="field">
                            <label>Jumlah Uang (Rp)</label>
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
                                    <span class="select is-fullwidth">
                                          <select>
                                              <option>Bank Bri</option>
                                          </select>
                                    </span>
                                <span class="icon is-small is-left">
                                        <i class="fas fa-globe"></i>
                                    </span>
                            </p>
                        </div>

                        <div class="field">
                            <button class="button is-primary is-fullwidth">
                                            <span class="icon">
                                                <i class="fas fa-coins"></i>
                                            </span>
                                <span>Deposit Saldo</span>
                            </button>
                        </div>
                    </div>



                    <div class="box">
                        <h3 class="subtitle is-4">Pembayaran</h3>
                        <p>Silakan lakukan pembayaran ke Rekening Bank BRI di bawah ini:</p>
                        <br>
                        <p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/1280px-BANK_BRI_logo.svg.png" style="max-width: 128px"></p>
                        <table class="table is-fullwidth">
                            <tr>
                                <td>A/N</td>
                                <td>:</td>
                                <td>PT. Urun Dana Usaha</td>
                            </tr>
                            <tr>
                                <td>Norek</td>
                                <td>:</td>
                                <td>8212-2121-1212-2121</td>
                            </tr>
                            <tr>
                                <td>KCP</td>
                                <td>:</td>
                                <td>Bank Bri Kertajaya</td>
                            </tr>
                        </table>

                        <div class="field">
                            <button class="button is-primary is-fullwidth">
                                            <span class="icon">
                                                <i class="fas fa-money-bill-alt"></i>
                                            </span>
                                <span>Konfirmasi</span>
                            </button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
