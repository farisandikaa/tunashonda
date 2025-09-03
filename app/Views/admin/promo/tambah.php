<?= $this->extend('admin/shared/template'); ?>

<?= $this->section('content'); ?>

<div class="row no-gutters mt-5">

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3"> Form Tambah Sales</h2>
                <form action="/admin/promo/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                        <div class="col-sm-10">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="sampul" name="sampul">
                                <label for="sampul"></label>

                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Caption</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="caption" name="caption">
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">Tambah Data Promo</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>