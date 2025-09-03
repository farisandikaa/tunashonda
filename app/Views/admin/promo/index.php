<?= $this->extend('admin/shared/template'); ?>

<?= $this->section('content'); ?>
<style>
    .sampul {
        width: 100px;
    }

    .table>tbody>tr>* {
        vertical-align: middle;
    }
</style>

<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
                <a class="nav-link active text-white" href="/admin/dashboard"><i class="bi bi-speedometer mr-2"></i> Dashboard</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/admin/unit"><i class="bi bi-menu-up mr-2"></i>Daftar Unit</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/admin/sales"><i class="bi bi-cart4 mr-2"></i> Daftar Sales</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/admin/pembeli"><i class="bi bi-cart-check-fill mr-2"></i>Data Pembeli</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/admin/wic"><i class="bi bi-cart-check-fill mr-2"></i>Data WIC</a>
                <hr class="bg-secondary">
            </li>
        </ul>
    </div>
    <div class="col-md-10 p-5 pr-2">
        <h3><i class="bi bi-menu-up mr-2"></i>DAFTAR PROMO</h3>

        <hr>
        <a href="/admin/promo/tambah" class="btn btn-primary mb-3"><i class="bi bi-plus-square-fill mr-2"></i>Tambah data Promo</a>
        <table class="table table-striped tale-bordeered">
            <thead>
                <tr>
                    <th scope="col">N0</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Caption</th>
                    <th colspan="3" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($promo as $s) : ?> <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $s['nama']; ?></td>
                        <td><img src="/img/<?= $s['sampul'];  ?>" alt="" class="sampul"></td>
                        <td><?= $s['caption']; ?></td>

                        <td>
                            <form action="/admin/promo/delete/<?= $s['id']; ?>" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapus data tersebut?')">Delete</button>
                            </form>


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection(); ?>