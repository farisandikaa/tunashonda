<?= $this->extend('sales/shared/template'); ?>

<?= $this->section('content'); ?>

<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">

            <li class="nav-item">
                <a class="nav-link text-white" href="/sales/dashboard/index"><i class="bi bi-menu-up mr-2"></i>Submit WIC</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/sales/dashboard/lihat"><i class="bi bi-cart4 mr-2"></i>Daftar WIC</a>
                <hr class="bg-secondary">
            </li>
        </ul>
    </div>
    <div class="col-md-10 p-5 pr-2">
        <h3><i class=" mr-2"></i>Lihat Data WIC</h3>
        <div class="col-6">
            <div class="visible">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" value="<?php echo session()->get('username') ?>">
                    </div>
            </div>
            </form>
        </div>
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
                    <th scope="col">Aksi </th>


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
                        <td><a href="/sales/dashboard/edit/<?= $s['slug']; ?>" class="btn btn-success">Update Status</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>
</div>
<?= $this->endSection(); ?>