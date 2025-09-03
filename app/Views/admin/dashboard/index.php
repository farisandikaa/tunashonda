<?= $this->extend('admin/shared/template'); ?>

<?= $this->section('content'); ?>
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
        <h3><i class="bi bi-speedometer mr-2"></i>DASHBOARD</h3>
        <hr>
        <div class="row text-white">
            <div class="card bg-info ml-4 md-3 mb-3" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="bi bi-menu-up mr-2"></i>
                    </div>
                    <h5 class="card-title ">Data Promo</h5>
                    <a href="Promo">
                        <p class="card-text text-white">Lihat Detail <i class="bi bi-chevron-double-right ml-2"></i></p>
                    </a>
                </div>
            </div>

            <div class="card bg-success ml-4 md-3 mb-3" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="bi bi-cart4 mr-2"></i>
                    </div>
                    <h5 class="card-title ">Data Galeri</h5>
                    <a href="Galeri">
                        <p class="card-text text-white">Lihat Detail <i class="bi bi-chevron-double-right ml-2"></i></p>
                    </a>
                </div>
            </div>


        </div>


    </div>
</div>


<?= $this->endSection(); ?>