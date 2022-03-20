<?php

include("config.php");

if(isset($_POST['daftar'])){

    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];

    $sql = "INSERT INTO mobil (merk, tipe, warna) VALUE ('$merk', '$tipe', '$warna')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list.php?status=sukses');
    } else {
        header('Location: list.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>