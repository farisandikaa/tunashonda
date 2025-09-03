<?= $this->extend('sales/shared/template'); ?>

<?= $this->section('content'); ?>

<div class="row no-gutters mt-5">

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Update Status</h2>
                <form action="/sales/dashboard/update/<?= $wic['id']; ?> " method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="slug" value="<?= $wic['slug']; ?>">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="status" name="status">
                            <option value="Belum Follow Up">Belum Follow Up</option>
                            <option value="Sudah Follow Up / Soft">Sudah Follow Up/ Soft</option>
                            <option value="Sudah Follow Up / Medium">Sudah Follow Up/ Medium</option>
                        </select>

                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>