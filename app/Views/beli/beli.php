<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">

            <center>
                <h2> Form Data Pembeli</h2>
            </center>

            <h4>Informasi Data Diri</h4>
            <form action="/beli/save" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="text" id="nama" name="nama" autofocus>
                    <label for="floatingInput">Nama Lengkap</label>
                </div>

                <div class="form-floating mb-3 ">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="text" id="alamat" name="alamat">
                    <label for="floatingPassword">Alamat</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="text" id="no_telepon" name="no_telepon">
                    <label for="floatingPassword">Nomor Telepon / Whatsapp</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" id="kecamatan" name="kecamatan">
                        <option selected>Kecamatan</option>
                        <option value="Baros">Baros</option>
                        <option value="Bantargadung">Bantargadung</option>
                        <option value="Bojong Genteng">Bojong Genteng</option>
                        <option value="Caringin">Caringin</option>
                        <option value="Ciambar">Ciambar</option>
                        <option value="Cibadak">Cibadak</option>
                        <option value="Cibereum">Cibereum</option>
                        <option value="Cikole">Cikole</option>
                        <option value="Citamiang">Citamiang</option>
                        <option value="Cibitung">Cibitung</option>
                        <option value="Cicantayan">Cicantayan</option>
                        <option value="Cicurug">Cicurug </option>
                        <option value="Cidadap">Cidadap</option>
                        <option value="Cidahu">Cidahu</option>
                        <option value="Cidolog">Cidolog </option>
                        <option value="Ciemas">Ciemas</option>
                        <option value="Cikakak">Cikakak</option>
                        <option value="Cikembar">Cikembar</option>
                        <option value="Cikidang">Cikidang</option>
                        <option value="Cimanggu">Cimanggu</option>
                        <option value="Ciracap">Ciracap</option>
                        <option value="Cireunghas">Cireunghas</option>
                        <option value="Cisaat">Cisaat</option>
                        <option value="Cisolok">Cisolok</option>
                        <option value="Curugkembar">Curugkembar</option>
                        <option value="Geger Bitung">Geger Bitung</option>
                        <option value="Gunung Guruh">Gunung Guruh</option>
                        <option value="Gunung Puyuh">Gunung Puyuh</option>
                        <option value="Jampang Kulon">Jampang Kulon</option>
                        <option value="Jampang Tengah">Jampang Tengah</option>
                        <option value="Kabandungan">Kabandungan</option>
                        <option value="Kadudampit">Kadudampit</option>
                        <option value="Kalapa Nunggal">Kalapa Nunggal</option>
                        <option value="Kali Bunder">Kali Bunder</option>
                        <option value="Kebonpedes">Kebonpedes</option>
                        <option value="Lembursitu">Lembursitu</option>
                        <option value="Lengkong">Lengkong</option>
                        <option value="Nagrak">Nagrak</option>
                        <option value="Nyalindung">Nyalindung</option>
                        <option value="Pabuaran">Pabuaran</option>
                        <option value="Parakan Salak">Parakan Salak</option>
                        <option value="Parung Kuda">Parung Kuda</option>
                        <option value="Palabuhanratu">Palabuhanratu</option>
                        <option value="Purabaya">Purabaya</option>
                        <option value="Sagaranten">Sagaranten</option>
                        <option value="Simpenan">Simpenan</option>
                        <option value="Sukabumi">Sukabumi</option>
                        <option value="Sukalarang">Sukalarang</option>
                        <option value="Sukaraja">Sukaraja</option>
                        <option value="Tegal Buleud">Tegal Buleud</option>
                        <option value="Waluran">Waluran</option>
                        <option value="Warudoyong">Warudoyong</option>
                        <option value="Warung Kiara">Warung Kiara</option>
                        <option value="Surade">Surade</option>

                        <option value="Agrabinta">Agrabinta</option>
                        <option value="Bojongpicung">Bojongpicung</option>
                        <option value="Campaka">Campaka</option>
                        <option value="Campaka Mulya">Campaka Mulya</option>
                        <option value="Cianjur">Cianjur</option>
                        <option value="Cibeber">Cibeber</option>
                        <option value="Cibinong">Cibinong</option>
                        <option value="Cidaun">Cijati</option>
                        <option value="Cikadu">Cikadu</option>
                        <option value="Cikalongkulon">Cikalongkulon</option>
                        <option value="Cilaku">Cilaku</option>
                        <option value="Cipanas">Ciranjang </option>
                        <option value="Cugenang">Cugenang</option>
                        <option value="Gekbrong">Gekbrong</option>
                        <option value="Haurwangi">Haurwangi</option>
                        <option value="Kadupandak">Kadupandak</option>
                        <option value="Karangtengah">Karangtengah</option>
                        <option value="Leles">Leles</option>
                        <option value="Mande">Mande</option>
                        <option value="Naringgul">Naringgul</option>
                        <option value="Pacet">Pacet</option>
                        <option value="Cireunghas">Cireunghas</option>
                        <option value="Pagelaran">Pagelaran</option>
                        <option value="Sindangbarang">Sindangbarang</option>
                        <option value="Sukaluyu">Sukaluyu</option>
                        <option value="Sukanagara">Sukanagara</option>
                        <option value="Sukaresmi">Sukaresmi</option>
                        <option value="Takokak">Takokak</option>
                        <option value="Tanggeung">Tanggeung</option>
                        <option value="Warungkondang">Warungkondang</option>

                    </select>
                    <label for="floatingSelect">Kecamatan</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" id="kabupaten" name="kabupaten">
                        <option selected>Kabupaten / Kota</option>
                        <option value="Kabupaten Sukabumi">Kabupaten Sukabumi</option>
                        <option valure="Kabupaten Cianjur">Kabupaten Cianjur</option>
                        <option value="Kota Sukabumi">Kota Sukabumi</option>
                    </select>
                    <label for="floatingSelect">Kabupaten / Kota</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" id="provinsi" name="provinsi">
                        <option value="Jawa Barat">Jawa Barat</option>
                    </select>
                    <label for="floatingSelect">Provinsi</label>
                </div>
                <br>
                <h4>Produk Yang Diminati</h4>
                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" id="unit" name="unit">
                        <?php foreach ($motor as $k) : ?>
                            <option value="<?= $k['tipe']; ?>"><?= $k['tipe']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="floatingSelect">Tipe Produk</label>
                </div>

                <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" id="rencana" name="rencana">
                        <option value="cash">Cash</option>
                        <option valure="kredit">Kredit</option>
                    </select>
                    <label for="floatingSelect">Rencana Pembelian</label>
                </div>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        <p font-size="7px"> Mengizinkan Tunas Honda Sukabumi untuk menggunakan informasi di atas dan menghubungi Saya melalui telepon atau sarana komunikasi pribadi lainnya untuk kegiatan pelayanan kepada customer.</p>
                    </label>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>