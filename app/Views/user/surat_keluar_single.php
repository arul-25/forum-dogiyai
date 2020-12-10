<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <section class="welcome-part-one">
        <div class="container">
            <div class="welcome-demop102 text-center">
                <h2>Selamat Datang Di Forum Ikatan Mahasiswa Dogiyai</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio delectus perspiciatis,
                    architecto, alias harum ea accusamus incidunt illo odit maiores sequi repudiandae! Laboriosam fuga
                    qui, facilis provident ducimus recusandae asperiores?</p>
            </div>
        </div>
    </section>


    <!-- ======content section/body=====-->
    <section class="main-content920">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="main" class="surat-masuk">
                        <div class="header">
                            <div class="row">
                                <div class="kiri col-md-9">
                                    <h2>Daftar Surat Keluar</h2>
                                </div>
                                <div class="kanan">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Lakukan pencarian disini" aria-describedby="basic-addon2">
                                    </div>
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <section id="content1">
                            <!--Recent Question Content Section -->
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">Surat Keluar</div>
                                <div class="panel-body">
                                    <!-- surat 1 -->
                                    <div class="question-type2033">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="left-user12923 left-user12923-repeat">
                                                    <img src="/image/images.png" alt="image"> <i class="fa fa-check" aria-hidden="true"></i> </div>
                                            </div>
                                            <div class="col-md-11">
                                                <div class="right-description893">
                                                    <div id="que-hedder2983">
                                                        <h3>Perihal <?= $surat_keluar['perihal']; ?></h3>
                                                        <p>Diposting oleh admin <?= tanggal($surat_keluar['tgl_surat']); ?>, Sifat
                                                            <span><?= $surat_keluar['sifat']; ?></span> Nomor Surat : <?= $surat_keluar['no_surat_keluar']; ?></p>
                                                    </div>
                                                    <div class="ques-details10018">
                                                        <p><?= $surat_keluar['lampiran']; ?>.</p>
                                                    </div>
                                                    <hr>
                                                    <div class="ques-icon-info3293">
                                                        <a href="/assets/upload/dokument_surat_masuk/<?= $surat_keluar['file']; ?>" target="_blank"><i class="fas fa-eye" aria-hidden="true"> Lihat
                                                                Berkas</i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end surat 1 -->
                                </div>
                                <div class="panel-footer text-center"><a href="/surat_keluar">-- Tampilkan Lebih Banyak --</a>
                                </div>
                            </div>
                        </section>
                        <!--  End of content-1------>
                    </div>
                </div>
                <!--end of col-md-9 -->
                <!--strart col-md-3 (side bar)-->
            </div>
        </div>
    </section>
</main>

<?= $this->endSection(); ?>