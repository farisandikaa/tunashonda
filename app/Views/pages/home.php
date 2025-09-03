<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<br>
<div class="container">
    <header class="header">
        <div class="hero">
            <h2 class="heading">TUNAS HONDA SUKABUMI <h2>

        </div>
        <div class="features feature-1">
            <h4 class="price"></h4>
            <p class="item"></p>
        </div>
        <div class="features feature-2">
            <h4 class="price"></h4>
            <p class="item"></p>

        </div>
    </header>

    <div class="subjudul">
        <h3>Pilih Motor favorit anda</h3>
    </div>
    <section class="services">
        <div class="service">
            <div class="image">
                <img src="img/thmbnail-upload-3-5-28072021-020243.png" alt="" width="100%">
            </div>
            <h3>BeAT</h3>
            <p>Harga mulai</p>
            <h3>Rp.16.000.000</h3>
            <a type="button" href="/produk" class="btn btn-outline-danger">Selengkapnya</a>
        </div>
        <div class="service">
            <div class="image">
                <img src="img/1631214218_6f0d1a7e1053552ffe54.png" alt="" width="100%">
            </div>
            <h3>Vario</h3>
            <p>Harga mulai</p>
            <h3>Rp.21.000.000</h3>
            <a type="button" href="/produk" class="btn btn-outline-danger">Selengkapnya</a>
        </div>
        <div class="service">
            <div class="image">
                <img src="img/genio-2024-27052021-092501.png" alt="" width="100%">
            </div>
            <h3>Genio</h3>
            <p>Harga mulai</p>
            <h3>Rp.17.000.000</h3>
            <a type="button" href="/produk" class="btn btn-outline-danger">Selengkapnya</a>
        </div>
    </section>


    <center><a type="button" href="/produk" class="btn btn-danger">Lihat selengkapnya</a></center>


    <section class="promotion">
        <h3>Alasan Kenapa Harus Beli Motor di Dealer Kami?</h3>
        <div class="promot">
            <div class="icon">
                <span class="material-icons">verified</span>
                <h5><b>Terpercaya</b></h5>
                <p>
                Kami hadir di indonesia sejak tahun 1960 dan menjadi salah satu dealer motor terbaik hingga mengalahkan dealer dari eropa</p>
            </div>
        </div>
        <div class="promot">
            <div class="icon">
                <span class="material-icons">verified</span>
                <h5><b>Terbagus</b></h5>
                <p>Kami berasal dari kota Shizuoka di Jepang dan Membuka cabang di indonesia karena produk kami bagus</p>
            </div>
        </div>
        <div class="promot">
            <div class="icon">
                <span class="material-icons">verified</span>
                <h5><b>Proses Tercepat</b></h5>
                <p>Hanya dengan dp 5%, anda sudah bisa mendapatkan sepeda motor yang anda inginkan</p>
            </div>
        </div>
        <div class="promot">
            <div class="icon">
                <span class="material-icons">verified</span>
                <h5><b>Terbaik</b></h5>
                <p>PT Astra Honda Motor menghadirkan solusi mobilitas bagi masyarakat dengan produk dan layanan terbaik.</p>
            </div>
        </div>
        <div class="promot">
            <div class="icon">
                <span class="material-icons">verified</span>
                <h5><b>visi misi</b></h5>
                <p>Honda ingin menjadi pemimpin pasar sepeda motor di Indonesia dan menjadi pemain kelas dunia, dengan mewujudkan impian konsumen, menciptakan kegembiraan bagi konsumen dan berkontribusi kepada masyarakat Indonesia.</p>
            </div>
        </div>

    </section>
    <p></p>


</div>
<?= $this->endSection(); ?>