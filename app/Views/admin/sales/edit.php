<?= $this->extend('admin/shared/template'); ?>

<?= $this->section('content'); ?>

<div class="row no-gutters mt-5">

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3"> Form Tambah Sales</h2>
                <form action="/admin/unit/update/<?= $sales['slug']; ?> " method="post">
                    <?= csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="kategori" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?= $sales['nama']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tipe" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_telpon" name="no_telpon" value="<?= $sales['no_telpon']; ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="harga" class="col-sm-2 col-form-label">Regional</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="regional" name="regional" value="<?= $sales['regional']; ?>">
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">Edit Sales</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>