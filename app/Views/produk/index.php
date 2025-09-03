<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    .card {
        box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.2);
    }
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/bg-honda.jpg" class="d-block w-100" alt="..." width="200px" height="500px">
                    </div>
                    <div class="carousel-item">
                        <img src="https://scontent.fbdo9-1.fna.fbcdn.net/v/t1.6435-9/s960x960/160515028_101743372010573_8648715833770651742_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=e3f864&_nc_eui2=AeEhVimk8wSF1zRak0Zt0UkzD8A4oycm7yYPwDijJybvJn8sQNM4We_zhvilAWQa5_ZJN09B-Y9vOhDqgN3VDLa7&_nc_ohc=zCdteaMZ3ZIAX9E3zjW&_nc_ht=scontent.fbdo9-1.fna&oh=a0ddde2baa51d44278ce369b66a6014a&oe=615F8A69" class="d-block w-100" alt="..." width="200px" height="500px">
                    </div>
                    <div class="carousel-item">
                        <img src="https://lh3.googleusercontent.com/U5uL4O3EXDyn1KpLTd9n1VnmadiqsU_msTPyroVosYpynt2KJ0V5Y7aKHtW0uU-d4Q45sJTVEydDlLTZ=w1080-h608-p-no-v0" class="d-block w-100" alt="..." width="200px" height="500px">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br>
            <center>
                <h2>Pilih Motor Favorit Anda</h2>
            </center>
            <br>

            <div class="container">
                <div class="row">

                    <?php foreach ($motor as $k) : ?>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="img/<?= $k['sampul']; ?>" class="card-img-top" width="200px" height="200px" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title m-1"><?= $k['tipe']; ?></h5>
                                    <p class="card-text">Kategori : <?= $k['kategori']; ?></p>
                                    <p class="card-text">Stok : <?= $k['stok']; ?></p>
                                    <h6 class="card-text">Harga Mulai Dari</h6>
                                    <h5><?= $k['harga']; ?> </h5>

                                    <a href="/produk/detasil/<?= $k['slug']; ?>" class="btn btn-primary">Selengkapnya</a>
                                    <a href="/beli" class="btn btn-danger"> Beli</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>