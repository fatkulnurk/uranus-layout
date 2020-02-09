@extends('layouts.dashboard')

@section('title', 'Aplikasi Sosial dan Edukasi')

@section('content')
    <div class="hero is-white">
        <div class="hero-body has-text-centered">
            <p class="title is-3 has-text-primary">Tambah Proyek Baru</p>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-6 is-offset-3 box">
                    <h3 class="subtitle is-4">Pilih Perusahaan / Bisnis</h3>

                    <div class="field">
                        <label class="label">Pilih Bisnis / Perusahaan</label>
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
                        <p>Atau tambah bisnis baru</p>
                    </div>
                    <div class="field">
                       <button class="button is-primary">Tambah Bisnis Baru</button>
                    </div>
                </div>
            </div>
            <br>
            <div class="columns">
                <div class="column is-6 is-offset-3 box">
                    <p class="notification is-danger">Form informasi perusahaan hanya akan tampil jika button tambah bisnis baru di klik</p>
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
            <br>
            <div class="columns">
                <div class="column is-6 is-offset-3 box">
                    <div class="field">
                        <label class="label">Nama Proyek</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Deskripsi Proyek</label>
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
                        <label class="label">Kategori Keuntungan</label>
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="kategori_keuntungan">
                                Kepemilikan
                            </label>
                            <label class="radio">
                                <input type="radio" name="kategori_keuntungan" checked>
                                Bagi Hasil
                            </label>
                        </div>
                        <label class="label">Ekspetasi Keuntungan (Pertahun)</label>
                        <div class="control">
                            <div class="columns">
                                <div class="column is-6">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Mulai dari %">
                                    </div>
                                </div>
                                <div class="column is-6">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Sampai %">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Lama Waktu Pengembalian (optional)</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input" value="hanya jika kategori keuntungan adalah bagi hasil">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Bagi Hasil Pertahun (optional)</label>
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input" value="hanya jika kategori keuntungan adalah bagi hasil">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Kegiatan Perusahaan</label>
                        <div class="control">
                            <input class="input" type="file" name="berkas[]" multiple>
                        </div>
                    </div>
                   <div class="field">
                       <button class="button is-primary is-fullwidth">Publish Proyek</button>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
