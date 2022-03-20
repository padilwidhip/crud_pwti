<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Rental Mobil</title>
</head>

<body>
    <header>
        <h3>Mobil yang tersedia</h3>
    </header>

    <nav>
        <a href="form-tambah.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>merk</th>
            <th>tipe</th>
            <th>warna</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM mobil";
        $query = mysqli_query($db, $sql);

        while($mobil = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mobil['id']."</td>";
            echo "<td>".$mobil['merk']."</td>";
            echo "<td>".$mobil['tipe']."</td>";
            echo "<td>".$mobil['warna']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$mobil['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$mobil['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total Barang: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>