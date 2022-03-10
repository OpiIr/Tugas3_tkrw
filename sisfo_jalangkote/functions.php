<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $lemari = [];
    while ($kotak = mysqli_fetch_assoc($result)) {
        $lemari[] = $kotak;
    }
    return $lemari;
}

function tambah($data)
{
    global $conn;
    $nama = $data["nama"];
    $rasa = $data["rasa"];
    $bentuk = $data["bentuk"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO jalangkote VALUES
    ('', '$nama', '$rasa', '$bentuk', '$gambar')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM jalangkote WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $rasa = $data["rasa"];
    $bentuk = $data["bentuk"];
    $gambar = $data["gambar"];

    $query = "UPDATE jalangkote SET
                nama = '$nama',
                rasa = '$rasa',
                bentuk = '$bentuk',
                gambar = '$gambar'

                WHERE id = $id;
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM jalangkote 
                WHERE nama LIKE '%$keyword%' OR
                rasa LIKE '%$keyword%' OR
                bentuk LIKE '%$keyword%'";

    return query($query);
}
