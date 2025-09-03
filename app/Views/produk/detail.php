<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">


            <center>
                <h1><?= $motor['tipe']; ?></h1>
            </center>
            <br>

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/<?= $motor['foto_2']; ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['foto_1']; ?>" class="d-block w-100" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br>


            <br>
            <center>
                <h3>View 360°</h3>
                <img src="/img/<?= $motor['foto_360']; ?>">

            </center>
            <center>
                <h3>Varian Warna</h3>
            </center>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/<?= $motor['varian1']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['varian2']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['varian3']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['varian4']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['varian5']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['varian6']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['varian7']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['varian8']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['varian9']; ?>" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/<?= $motor['varian10']; ?>" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br>
            <br>
            <center>
                <h3>Spefikasi Motor</h3>
            </center>

            <table class="table table-striped">

                <tbody>
                    <tr>
                        <td>Tipe Mesin</td>
                        <td><?= $motor['tipe_mesin']; ?></td>

                    </tr>
                    <tr>
                        <td>Volume Langkah</td>
                        <td><?= $motor['volume_langkah']; ?></td>

                    </tr>
                    <tr>
                        <td>Sistem Suplai Bahan Bakar</td>
                        <td><?= $motor['s_bahan_bakar']; ?></td>

                    </tr>
                    <tr>
                        <td>Diameter X Langkah</td>
                        <td><?= $motor['diameter_langkah']; ?></td>

                    </tr>
                    <tr>
                        <td>Tipe Transmisi</td>
                        <td><?= $motor['tipe_transmisi']; ?></td>

                    </tr>
                    <tr>
                        <td>Rasio Kompresi</td>
                        <td><?= $motor['rasio_kompresi']; ?></td>

                    </tr>
                    <tr>
                        <td>Daya Maksimum</td>
                        <td><?= $motor['daya_maks']; ?></td>

                    </tr>
                    <tr>
                        <td>Torsi Maksimum</td>
                        <td><?= $motor['torsi_maks']; ?></td>

                    </tr>
                    <tr>
                        <td>Tipe Starter</td>
                        <td><?= $motor['tipe_starter']; ?></td>

                    </tr>
                    <tr>
                        <td>Tipe Kopling</td>
                        <td><?= $motor['tipe_kopling']; ?></td>

                    </tr>

                    <tr>
                        <td>Tipe Rangka</td>
                        <td><?= $motor['tipe_rangka']; ?></td>

                    </tr>
                    <tr>
                        <td>Tipe Suspensi Depan</td>
                        <td><?= $motor['tipe_suspensi_depan']; ?></td>

                    </tr>
                    <tr>
                        <td>Tipe Suspensi Belakang</td>
                        <td><?= $motor['tipe_suspensi_belakang']; ?></td>

                    </tr>
                    <tr>
                        <td>Ukuran Ban Depan</td>
                        <td><?= $motor['ukuran_ban_depan']; ?></td>

                    </tr>
                    <tr>
                        <td>Ukuran Ban Belakang</td>
                        <td><?= $motor['ukuran_ban_belakang']; ?></td>

                    </tr>
                    <tr>
                        <td>Rem Depan</td>
                        <td><?= $motor['rem_depan']; ?></td>

                    </tr>
                    <tr>
                        <td>Rem Belakang</td>
                        <td><?= $motor['rem_belakang']; ?></td>

                    </tr>
                    <tr>
                        <td>Sistem Pengereman</td>
                        <td><?= $motor['sistem_pengereman']; ?></td>

                    </tr>

                    <tr>
                        <td>Panjang X Lebar X Tinggi</td>
                        <td><?= $motor['panjang_lebar_tinggi']; ?></td>

                    </tr>
                    <tr>
                        <td>Tinggi Tempat Duduk</td>
                        <td><?= $motor['tinggi_tempat_duduk']; ?></td>

                    </tr>

                    <tr>
                        <td>Jarak Terendah Ke Tanah</td>
                        <td><?= $motor['jarak_terendah']; ?></td>

                    </tr>
                    <tr>
                        <td>Curb Weight</td>

                        <td><?= $motor['crub_weight']; ?></td>


                    </tr>

                    <tr>
                        <td>Kapasitas Tangki Bahan Bakar</td>

                        <td><?= $motor['kapasitas_tangki']; ?></td>


                    </tr>
                    <tr>
                        <td>Kapasitas Minyak Pelumas</td>

                        <td><?= $motor['kapasitas_minyak']; ?></td>


                    </tr>
                    <tr>
                        <td>Tipe Baterai Atau Aki</td>

                        <td><?= $motor['tipe_baterai']; ?></td>


                    </tr>
                    <tr>
                        <td>Sistem Pengapian</td>

                        <td><?= $motor['sistem_pengapian']; ?></td>


                    </tr>
                    <tr>
                        <td>Tipe Busi</td>

                        <td><?= $motor['tipe_busi']; ?></td>


                    </tr>

                </tbody>
            </table>
            <center>
                <h3>Aksesoris</h3>
            </center>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/<?= $motor['banner_aksesoris']; ?>" class="d-block w-100" alt="...">
                    </div>

                </div>
            </div>
            <br>

            <div class="card text-center">
                <div class="card-body">
                    <a href="/beli" class="btn btn-danger">Beli Sekarang!</a>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>