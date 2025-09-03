<?php
header("content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pelanggan.xls");
?>

<html>

<body>
    <table border="1">
        <thead>
            <tr>
                <th scope="col">N0</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kecamatan</th>
                <th scope="col">kabupaten</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($pembeli as $s) : ?> <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $s['nama']; ?></td>
                    <td><?= $s['no_telepon']; ?></td>
                    <td><?= $s['alamat']; ?></td>
                    <td><?= $s['kecamatan']; ?></td>
                    <td><?= $s['kabupaten']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>