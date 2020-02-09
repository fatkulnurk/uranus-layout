@extends('layouts.dashboard')

@section('title', 'Aplikasi Sosial dan Edukasi')

@section('content')
    <div class="hero is-white">
        <div class="hero-body has-text-centered">
            <p class="title is-3 has-text-primary">Tambah Bursa UKM Baru</p>
        </div>
    </div>
    {{-- UNTUK VERIFIKASI Perusahaan--}}
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3 box">
                    <h3 class="subtitle is-4">Informasi Perusahaan</h3>
                    <div class="field">
                        <label class="label">Name Perusahaan</label>
                        <div class="control has-icons-left">
                            <input class="input" type="text" placeholder="Text input">
                            <span class="icon is-small is-left">
                              <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Tentang Perusahaan (url youtube)</label>
                        <div class="control has-icons-left">
                            <input class="input" type="text" placeholder="Text input">
                            <span class="icon is-small is-left">
                              <i class="fas fa-flag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Kategori Perusahaan</label>
                        <p class="control has-icons-left">
                                    <span class="select is-fullwidth">
                                        <select>
                                            <option selected>Mbuh</option>
                                            <option>Opo</option>
                                            <option>Aku</option>
                                            <option>Bingung</option>
                                            <option>Hahaha</option>
                                         </select>
                                    </span>
                            <span class="icon is-small is-left">
                                        <i class="fas fa-globe"></i>
                                    </span>
                        </p>
                    </div>

                    <div class="field">
                        <label class="label">No Telepon</label>
                        <div class="control has-icons-left">
                            <input class="input" type="text" placeholder="Text input">
                            <span class="icon is-small is-left">
                              <i class="fas fa-phone"></i>
                            </span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Logo Perusahaan</label>
                        <div id="file-js-example" class="file has-name">
                            <label class="file-label">
                                <input class="file-input" type="file" name="resume">
                                <span class="file-cta">
                                      <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                      </span>
                                      <span class="file-label">
                                        Choose a file…
                                      </span>
                                    </span>
                                <span class="file-name">
                                      No file uploaded
                                    </span>
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Alamat lengkap</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Nama Jalan, Kelurahan, Kecamatan, Kota/Kabupaten, Provinsi (kode pos)"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="columns">
                <div class="column is-6 is-offset-3 box">
                    <h3 class="subtitle is-4">Informasi Bisnis dan Saham</h3>
                    <div class="field">
                        <label class="label">Deskripsi Bisnis</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="e.g. Hello world"></textarea>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Dana dibutuhkan</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Jumlah Saham Dilepas (dalam satuan desimal)</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Total saham dibagikan ke investor (salam satuan persen)</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Harga Per lembar saham</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Upload Prospektus Perusahaan (pdf)</label>
                        <div class="control">
                            <input class="input" type="file" name="prospektus">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Kegiatan Perusahaan</label>
                        <div class="control">
                            <input class="input" type="file" name="berkas[]" multiple>
                        </div>
                    </div>
                    <div class="field">
                        <button class="button is-primary is-fullwidth">Publish Bisnis</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
