<?php
function hitung($hasil)
{
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];

    $hasil = $panjang * $lebar;
    echo hitung($hasil);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Membuat Kalkulator</title>
</head>

<body>
    <h1>Kalkulator Sederhana</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="panjang">Panjang :</label>
                <input type="text" name="panjang" id="panjang">
            </li>
            <li>
                <label for="lebar">Lebar :</label>
                <input type="text" name="lebar" id="lebar">
            </li>
        </ul>
        <button type="submit">Hitung</button>
    </form>
</body>

</html>