<!DOCTYPE html>
<html>
<head>
    <title>Rental Mobil</title>
</head>

<body>
    <header>
        <h3>Formulir Rental</h3>
    </header>

    <form action="proses-penambahan.php" method="POST">

        <p>
            <label for="merk">merk: </label>
            <input type="text" name="merk" placeholder="merk" value="<?php echo $siswa['merk'] ?>" />
        </p>
        <p>
            <label for="tipe">tipe: </label>
            <input type="text" name="tipe" placeholder="tipe" />
        </p>
        <p>
            <label for="warna">warna: </label>
            <input type="text" name="warna" placeholder="warna" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

    </form>

    </body>
</html>