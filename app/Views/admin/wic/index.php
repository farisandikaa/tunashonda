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
        <h3><i class="bi bi-menu-up mr-2"></i>DAFTAR WALK IN CUSTOMER</h3>

        <hr>
        <a href="/admin/pembeli/export" class="btn btn-success mb-3"><i class="bi bi-file-earmark-spreadsheet-fill"></i></i>Export data Excel</a>
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Rencana</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Sales</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($wic as $s) : ?> <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $s['nama']; ?></td>
                        <td><?= $s['alamat']; ?></td>
                        <td><?= $s['no_telpon']; ?></td>
                        <td><?= $s['email']; ?></td>
                        <td><?= $s['unit']; ?></td>
                        <td><?= $s['warna_unit']; ?></td>
                        <td><?= $s['rencana']; ?></td>
                        <td><?= $s['created_at']; ?></td>
                        <td> <?= $s['status']; ?></td>
                        <td> <?= $s['sales']; ?></td>
                    <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection(); ?>