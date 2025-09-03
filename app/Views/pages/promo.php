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


            <center>
                <h1>Promo</h1>
            </center>

            <div class="container">
                <div class="row">



                    <?php foreach ($promo as $k) : ?>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="/img/<?= $k['sampul']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text"> <?= $k['caption']; ?></p>
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