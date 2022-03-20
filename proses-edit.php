<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];

    $sql = "UPDATE mobil SET merk='$merk', tipe='$tipe', warna='$warna' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>