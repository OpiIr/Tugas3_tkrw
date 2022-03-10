<?php
require 'functions.php';

$id = $_GET["id"];

$kote = query("SELECT * FROM jalangkote WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
        <script>alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="col-md-6 mx-auto mt-5 container">
        <div class="card">
            <div class="card-header bg-primary text-white">Ubah Data</div>
            <div class="card-body">

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nama">Nama :</label>
                        <input type="text" name="nama" id="nama" required value="<?= $kote["nama"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="rasa">Rasa :</label>
                        <input type="text" name="rasa" id="rasa" required value="<?= $kote["rasa"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="bentuk">Bentuk :</label>
                        <input type="text" name="bentuk" id="bentuk" required value="<?= $kote["bentuk"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar">Gambar :</label>
                        <input type="text" name="gambar" id="gambar" required value="<?= $kote["gambar"]; ?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit">Ubah</button>
                    </div>
                </form>
</body>

</html>