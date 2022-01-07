<?php
//memanggil file functions.php
require 'functions.php';

//memanggil function query pengambilan data pada table karyawan
//lalu ditampung kedalam variable karyawan
$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="tengah" class="tulisan">
        <h1 align="center">Daftar Karyawan</h1>
        <a href="tambah.php">Tambah Karyawan</a>
    </div>
    <br>
    <table border="1" cellpadding="10" cellspacing="0" class="center">
        <tr bgcolor='#00FF00'>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Potition</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php foreach ($karyawan as $item) : ?>
            <tr bgcolor='lightgreen'>
                <td><?= $item["id"] ?></td>
                <td><?= $item["name"] ?></td>
                <td><?= $item["email"] ?></td>
                <td><?= $item["address"] ?></td>
                <td><?= $item["gender"] ?></td>
                <td><?= $item["potition"] ?></td>
                <td><?= $item["status"] ?></td>
                <td><a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('data akan dihapus, apakah anda yakin?')">Hapus</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>