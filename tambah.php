<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="nav">
        <nav class="navbar navbar-light" style="background-color: #b9b9b9;">
            <ul>
                <li><a href="index.php">Data Karyawan</a></li>
            </ul>
        </nav>
    </div>

    <h1 class="tengah">Tambah Data Karyawan</h1>

    <div class="list">
        <form action="" method="post">

            <label for="id">ID</label><br>
            <input type="text" name="id"><br>
            <br>
            <label for="name">Name</label><br>
            <input type="text" name="name"><br>
            <br>
            <label for="email">Email</label><br>
            <input type="text" name="email"><br>
            <br>
            <label for="address">Address</label><br>
            <input type="text" name="address"><br>
            <br>
            <label for="gender">Gender</label><br>
            <select id="gender" name="gender" class="tulisan">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <!-- <label for="gender">Gender</label><br>
            <input type="text" name="gender"><br> -->
            <br>
            <label for="potition">Potition</label><br>
            <input type="text" name="potition"><br>
            <br>
            <label for="status">Status</label><br>
            <select id="status" name="status" class="tulisan">
                <option value="Fulltime">Fulltime</option>
                <option value="Parttime">Parttime</option>
            </select><br>
            <!-- <label for="status">Status</label><br>
            <input type="text" name="status"><br> -->

            <button type="submit" name="submit" class="button">
                Submit
            </button>
        </form>
    </div>

</body>

</html>

<?php
require 'functions.php';

//memeriksa apakah tombol submit telah ditekan atau belum
if (isset($_POST["submit"])) {
    echo $_POST["submit"];
    //jika sudah ditekan dijalankan function tambah
    if (tambah($_POST) > 0) {
        //echo "<div class='tulisan'> data berhasil ditambahkan </div>";
        echo "<script>alert('data berhasil ditambahkan');</script>";
    } else {
        echo "<script>alert('data berhasil ditambahkan');</script>";
    }
}
?>