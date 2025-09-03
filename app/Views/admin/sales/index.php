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
        <h3><i class="bi bi-menu-up mr-2"></i>DAFTAR SALES</h3>

        <hr>
        <a href="/admin/sales/tambah" class="btn btn-primary mb-3"><i class="bi bi-plus-square-fill mr-2"></i>Tambah data Sales</a>
        <table class="table table-striped tale-bordeered">
            <thead>
                <tr>
                    <th scope="col">N0</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Regional</th>
                    <th scope="col">username</th>
                    <th scope="col">Password</th>
                    <th colspan="3" scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($sales as $s) : ?> <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $s['nama']; ?></td>
                        <td><?= $s['no_telpon']; ?></td>
                        <td><?= $s['regional']; ?></td>
                        <td><?= $s['username']; ?></td>
                        <td><?= $s['password']; ?></td>


                        <td>
                            <form action="/admin/sales/delete/<?= $s['id']; ?>" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ingin menghapus data tersebut?')">Delete</button>
                            </form>
                        </td>
                        <td><a href="/admin/sales/edit/<?= $s['slug']; ?>" class="btn btn-success">Edit</a></td>


                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection(); ?>