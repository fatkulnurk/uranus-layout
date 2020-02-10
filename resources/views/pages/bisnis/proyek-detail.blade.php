@extends('layouts.dashboard')

@section('title', 'Aplikasi Sosial dan Edukasi')

@section('content')
    <div class="hero is-white">
        <div class="hero-body has-text-centered">
            <p class="title is-3 has-text-primary">Expansi Kilang Minyak di Tuban</p>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-4">
                    <div class="box">
                        <div class="field">
                            <div class='is-flex is-horizontal-center'>
                                <figure class="image is-128x128 has-text-centered">
                                    <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                                </figure>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Nama Bisnis</label>
                            <p class="control has-icons-left">
                                <input class="input" type="text" value="PT. Exatera Mega Sentosa" disabled>
                                <span class="icon is-small is-left">
                                        <i class="fas fa-user-alt"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">Kategori Bisnis</label>
                            <p class="control has-icons-left">
                                <input class="input" type="text" placeholder="Text input" value="F&B" disabled>
                                <span class="icon is-small is-left">
                                        <i class="fas fa-user-alt"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">Alamat Bisnis</label>
                            <textarea class="textarea"></textarea>
                        </div>
                        <div class="field">
                            <label class="label">Prospektus Bisnis</label>
                            <div class="field">
                                <div class="control has-icons-left">
                                    <a href="" class="button is-primary is-fullwidth is-outlined">Download
                                        Prospektus</a>
                                    <span class="icon is-small is-left">
                                        <i class="far fa-file-word"></i>
                                    </span>
                                </div>
                            </div>
                            <p class="is-small">
                                Prospektus adalah gabungan antara profil perusahaan dan laporan tahunan yang
                                menjadikannya sebuah dokumen resmi yang digunakan oleh suatu lembaga/ perusahaan untuk
                                memberikan gambaran mengenai saham yang ditawarkannya untuk dijual kepada publik
                            </p>
                        </div>
                        <div class="field">
                            <div class="control has-icons-left">
                                <a href="" class="button is-primary is-fullwidth is-outlined">Profile Perusahaan</a>
                                <span class="icon is-small is-left">
                                        <i class="fab fa-youtube"></i>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <strong>Status Investasi</strong> <br>
                        <button class="button is-primary is-fullwidth">Masih Berjalan</button>
                        <br>
                        <button class="button is-success is-fullwidth">Selesai</button>
                        <br>
                        <button class="button is-info is-fullwidth">Menunggu Dimulai</button>
                        <br>
                        <button class="button is-danger is-fullwidth">Bermasalah</button>
                        <br>
                    </div>
                </div>
                <div class="column is-8">
                    <div class="box">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>Deskripsi Proyek</strong><br>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>Laporan Investasi</strong><br>
                                    <p>
                                    <table class="table is-fullwidth">
                                        <tr>
                                            <td>Waktu</td>
                                            <td>Informasi</td>
                                        </tr>
                                        <tr>
                                            <td>21-03-2020</td>
                                            <td>Memulai aktifitas pengeboran.</td>
                                        </tr>
                                        <tr>
                                            <td>21-02-2020</td>
                                            <td>Pembangunan kebutuhan dan pemasangan alat.</td>
                                        </tr>
                                        <tr>
                                            <td>21-01-2020</td>
                                            <td>Pembebasan tanah sudah dilakukan.</td>
                                        </tr>
                                        <tr>
                                            <td>11-01-2020</td>
                                            <td>Proyek sudah mulai dikerjakan.</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="columns">
                            <div class="column is-6">
                                <p>
                                    Jumlah Investasi Anda<br>
                                    <strong>Rp 100.000.000</strong>
                                </p><br>
                            </div>
                            <div class="column is-6">
                                <p>
                                    Total Keuntungan Anda Saat Ini<br>
                                    <span class="has-text-weight-bold">Rp 60.000</span>
                                </p>
                            </div>
                        </div>
                        <p style="margin-top: -40px;" class="has-text-weight-light">Rincian Keuntungan</p>
                        <table class="table is-fullwidth">
                            <tr>
                                <td>Waktu</td>
                                <td>Total Keuntungan</td>
                                <td>Keuntungan Anda (Rp)</td>
                                <td>Keterangan</td>
                            </tr>
                            <tr>
                                <td>21-01-2020</td>
                                <td>Rp 20.000.000</td>
                                <td>Rp 20.000</td>
                                <td>Hasil untuk hari ke 1 sampai hari ke 30</td>
                            </tr>
                            <tr>
                                <td>21-02-2020</td>
                                <td>Rp 20.000.000</td>
                                <td>Rp 20.000</td>
                                <td>Hasil untuk hari ke 31 sampai hari ke 60</td>
                            </tr>
                            <tr>
                                <td>21-03-2020</td>
                                <td>Rp 20.000.000</td>
                                <td>Rp 20.000</td>
                                <td>Hasil untuk hari ke 61 sampai hari ke 90</td>
                            </tr>
                        </table>
                        <p>* ) keuntungan yang anda miliki akan langsung dimasukan kedalam
                            saldo {{ getenv('APP_NAME') }}.</p>

                    </div>
                    <div class="box">
                        <p>
                            <strong>Dana Terkumpul</strong><br>
                            Rp 500.000.000,00 (Dibutuhkan Rp 1.000.000.000,00)<br>
                            <progress class="progress is-success" value="50" max="100">50%</progress>
                        </p>
                        <br>
                        <div class="columns">
                            <div class="column is-6">
                                <p>
                                    <strong>Lama Waktu Pengembalian</strong><br>
                                    36 Bulan
                                </p><br>
                                <p>
                                    <strong>Bagi Hasil (Pertahun)</strong><br>
                                    13,4 %
                                </p><br>
                            </div>
                            <div class="column is-6">
                                <p>
                                    Ekspetasi Keuntungan (Pertahun)<br>
                                    <span class="has-text-weight-bold">Rp 80.000.000 - Rp 160.000.000</span>
                                </p><br>
                                <p>
                                    <strong>Jumlah Investor Saat Ini</strong><br>
                                    65
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class="subtitle">Pemilik Bisnis</p>
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
                                        <strong>Angela Fitriana</strong>
                                        <br>
                                        saya merupakan lulusan dari Fakultas Ekonomi Universitas Indonesia dan telah
                                        berpengalaman sebagai GM keuangan salah satu perusahaan konstruksi. Beliau
                                        memiliki andil besar dalam jalannya operasional perusahaan baik dari sisi
                                        operasional terkait supply bahan baku, pemenuhan kebutuhan customer dan
                                        memperluas jaringan bisnis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class="subtitle">Kegiatan Perusahaan</p>
                    <div class="box has-text-centered">
                        <img
                            src="https://api.bizhare.id/base/commonFile/getFile?fileName=a219b00a9332403e9d124a4a84fe8d01.png">
                        <img
                            src="https://api.bizhare.id/base/commonFile/getFile?fileName=9f9064e5a82f4e57b6f4f0f89e25271b.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
