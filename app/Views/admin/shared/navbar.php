<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">Selamat Datang Admin <?php echo session()->get('admin_username') ?> | <b>TUNAS HONDA SUKABUMI</b></a>

    <form class="form-inline my-2 my-lg-0 ml-auto">


    </form>
    <div class="icon ml-6">
        <h5>
            <a href="<?php echo site_url('admin/dashboard/logout') ?>">Logout <i class="bi bi-box-arrow-right mr-3" data-toggle="tooltip" title="Sign Out"></i></a>
        </h5>
    </div>
    </div>
</nav>