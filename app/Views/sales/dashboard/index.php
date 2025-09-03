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
        <h3><i class=" mr-2"></i>Form submit Data WIC</h3>

        <form action="save" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" autofocus>
                <small id="emailHelp" class="form-text text-muted">Isi nama Lengkap Pelanggan</small>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                <small id="emailHelp" class="form-text text-muted">Isi alamat Lengkap Pelanggan</small>
            </div>
            <div class="form-group">
                <label for="alamat">No Telepon/Whatsapp</label>
                <input type="text" class="form-control" id="no_telpon" name="no_telpon" placeholder="Masukan Nomor Telepon">
                <small id="emailHelp" class="form-text text-muted">Isi nomor telepon pelanggn</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Isi alamat email pelanggan</small>
            </div>

            <label>Pilih Type Unit</label>
            <select class="form-control" id="unit" name="unit">
                <?php foreach ($motor as $k) : ?>
                    <option value="<?= $k['tipe']; ?>"><?= $k['tipe']; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <div class="form-group">
                <label for="alamat">Warna Unit</label>
                <input type="text" class="form-control" id="warna_unit" name="warna_unit" placeholder="Masukan Warna Unit">
            </div>

            <label>Rencana Pembelian</label>
            <select class="form-control" id="rencana" name="rencana">
                <option value="cash">Cash</option>
                <option value="kredit">Kredit</option>
            </select>
            <br>

            <div class="form-group">
                <label for="alamat">Sales</label>
                <input type="text" class="form-control" id="sales" name="sales" value="<?php echo session()->get('username') ?>">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>
</div>


<?= $this->endSection(); ?>