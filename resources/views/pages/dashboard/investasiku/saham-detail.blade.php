@extends('layouts.dashboard')

@section('title', 'Aplikasi Sosial dan Edukasi')

@section('content')
    <div class="hero is-white">
        <div class="hero-body has-text-centered">
            <p class="title is-3 has-text-primary">Soto Lamongan Cak Mamet</p>
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
                                <input class="input" type="text" placeholder="Text input" disabled>
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
                                    <a href="" class="button is-primary is-fullwidth is-outlined">Download Prospektus</a>
                                    <span class="icon is-small is-left">
                                        <i class="far fa-file-word"></i>
                                    </span>
                                </div>
                            </div>
                            <p class="is-small">
                                Prospektus adalah gabungan antara profil perusahaan dan laporan tahunan yang menjadikannya sebuah dokumen resmi yang digunakan oleh suatu lembaga/ perusahaan untuk memberikan gambaran mengenai saham yang ditawarkannya untuk dijual kepada publik
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
                </div>
                <div class="column is-8">
                    <div class="box">
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <strong>Deskripsi Bisnis</strong><br>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box">
                        <div class="columns">
                            <div class="column is-6">
                                <p>
                                    Jumlah Lembar Saham<br>
                                    <strong>100 Lembar</strong>
                                </p><br>
                            </div>
                            <div class="column is-6">
                                <p>
                                    Total Pendapatan Anda Dari Dividen<br>
                                    <span class="has-text-weight-bold">Rp 60.000</span>
                                </p>
                            </div>
                        </div>
                        <p style="margin-top: -40px;" class="has-text-weight-light">Rincian Dividen</p>
                        <table class="table is-fullwidth">
                            <tr>
                                <td>Waktu</td>
                                <td>Total Dividen</td>
                                <td>Dividen Anda</td>
                                <td>Keterangan</td>
                            </tr>
                            <tr>
                                <td>21-01-2020</td>
                                <td>Rp 200.000.000</td>
                                <td>Rp 20.000</td>
                                <td>Hasil untuk bulan Januari</td>
                            </tr>
                            <tr>
                                <td>21-02-2020</td>
                                <td>Rp 200.000.000</td>
                                <td>Rp 20.000</td>
                                <td>Hasil untuk Bulan Februari</td>
                            </tr>
                            <tr>
                                <td>21-03-2020</td>
                                <td>Rp 200.000.000</td>
                                <td>Rp 20.000</td>
                                <td>Hasil untuk Bulan Maret</td>
                            </tr>
                        </table>
                        <p>* ) Dividen yang anda miliki akan langsung dimasukan kedalam saldo {{ getenv('APP_NAME') }}.</p>
                    </div>

                    <div class="box">
                        <p>
                            <strong>Dana Terkumpul</strong><br>
                            Rp 500.000.000,00 (<span class="has-text-danger">500 Lembar Saham Tersedia</span>)<br>
                            <progress class="progress is-success" value="50" max="100">50%</progress>
                        </p> <br>
                        <div class="columns">
                            <div class="column is-6">
                                <p>
                                    <strong>Dana yang dibutuhkan</strong><br>
                                    Rp 1.000.000.000,00
                                </p><br>
                                <p>
                                    <strong>Saham Dalam Lembar</strong><br>
                                    1000
                                </p><br>
                                <p>
                                    <strong>Harga Saham Perlembar</strong><br>
                                    Rp 1.000.000, 00
                                </p><br>
                            </div>
                            <div class="column is-6">
                                <p>
                                    Total saham yang dibagikan ke investor<br>
                                    <span class="has-text-weight-bold">80%</span>
                                </p><br>
                                <p>
                                    Total keuntungan pertahun berdasarkan historis<br>
                                    <span class="has-text-weight-bold">Rp 100.000.000 - 300.000.000</span>
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
                                        saya merupakan lulusan dari Fakultas Ekonomi Universitas Indonesia dan telah berpengalaman sebagai GM keuangan salah satu perusahaan konstruksi. Beliau memiliki andil besar dalam jalannya operasional perusahaan baik dari sisi operasional terkait supply bahan baku, pemenuhan kebutuhan customer dan memperluas jaringan bisnis.
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <p class="subtitle">Kegiatan Perusahaan</p>
                    <div class="box has-text-centered">
                        <img src="https://api.bizhare.id/base/commonFile/getFile?fileName=a219b00a9332403e9d124a4a84fe8d01.png">
                        <img src="https://api.bizhare.id/base/commonFile/getFile?fileName=9f9064e5a82f4e57b6f4f0f89e25271b.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
