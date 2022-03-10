<?php
require 'functions.php';
$jalangkote = query("SELECT * FROM jalangkote");

if (isset($_POST["cari"])) {
    $jalangkote = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="col-md-7 mx-auto mt-5 container">
        <div class="card">
            <div class="card-header bg-primary text-white">Daftar Jalangkote</div>

            <div class="card-body">
                <div class="col-md-12 text-right">
                    <a class="btn btn-primary btn-sm" href="tambah.php"> Tambah Data Jalangkote </a>


                    <form action="" method="post">
                        <input type="text" name="keyword" size="40" autocomplete="off" placeholder="masukkan keyword..." autofocus>
                        <button type="submit" name="cari">Cari</button>
                    </form>
                    <br>

                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th>No.</th>
                            <th>Aksi</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Rasa</th>
                            <th>Bentuk</th>
                        </tr>

                        <?php $i = 1; ?>
                        <?php foreach ($jalangkote as $kote) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td>
                                    <a class="btn btn-success" href="ubah.php?id=<?= $kote["id"]; ?>">Ubah</a> |
                                    <a class="btn btn-danger" href="hapus.php?id=<?= $kote["id"]; ?>" onclick="return confirm('yakin?')" ;>Hapus</a>
                                </td>
                                <td>
                                    <img src="img/<?= htmlspecialchars($kote["gambar"]); ?>" alt="" width="50">
                                </td>
                                <td><?= htmlspecialchars($kote["nama"]); ?></td>
                                <td><?= htmlspecialchars($kote["rasa"]); ?></td>
                                <td><?= htmlspecialchars($kote["bentuk"]); ?></td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach ?>
                    </table>
</body>

</html>