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
                    <div class="field">
                        <div class="control">
                            <button class="button is-primary is-fullwidth" id="showModal">Investasi Sekarang</button>
                        </div>
                    </div>

                    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

                    <script>
                        $("#showModal").click(function() {
                            $(".modal").addClass("is-active");
                        });

                        $("#closeModal").click(function() {
                            $(".modal").removeClass("is-active");
                        });
                    </script>

                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-card">
                            <section class="modal-card-body">
                                <div class="box">
                                    <p class="subtitle">Masukan Jumlah Investasi</p>
                                    <div class="columns">
                                        <div class="column is-6">
                                            <div class="field">
                                                <label>Jumlah Uang</label>
                                                <p class="control has-icons-left">
                                                    <input class="input" type="number" placeholder="Dalam Rupiah">
                                                    <span class="icon is-small is-left">
                                  <i class="fas fa-money-bill"></i>
                                </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column is-6">
                                            <div class="field">
                                                <label>Metode Pembayaran</label>
                                                <div class="control has-icons-left">
                                                    <div class="select is-fullwidth">
                                                        <select>
                                                            <option selected>Saldo Uranus</option>
                                                        </select>
                                                    </div>
                                                    <div class="icon is-small is-left">
                                                        <i class="fas fa-money-check"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="field">
                                        <div class="control">
                                            <a href="" class="button is-primary is-fullwidth">Mulai Investasi</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
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
                    <p class="subtitle">Simulasi Investasi</p>
                    <div class="box">
                        <div class="columns">
                            <div class="column is-6">
                                <div class="field">
                                    <label>Nilai Investasi</label>
                                    <p class="control has-icons-left">
                                        <input class="input" type="number" placeholder="Text input">
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                </span>
                                    </p>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="field">
                                    <label>Perkiraan keuntungan</label>
                                    <p class="control has-icons-left">
                                        <input class="input" type="text" placeholder="Text input">
                                        <span class="icon is-small is-left">
                                        <i class="fas fa-user-alt"></i>
                                </span>
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
