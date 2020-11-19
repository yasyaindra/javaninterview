<?php 

require 'functions.php';
// $conn = mysqli_connect("localhost","root","","keluarga");

if(isset($_POST["tambah"])){
    if(tambah($_POST) > 0){
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'other.php';
            </script>";
    } else {
        echo "data gagal ditambahkan";
    }
}

; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Keluarga</h1>
    <form action="tambah.php" method="post">
    <ul>
        <li>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        </li>
        <li>
        <label for="status">Status</label>
        <select id="status" name="status">
            <option>Choose One</option>
            <option value="bapak">Bapak</option>
            <option value="anak">Anak</option>
            <option value="cucu">Cucu</option>
        </select>
        </li>
        <li>
        <label for="gender">Jenis Kelamin</label>
        <select id="gender" name="gender">
            <option>Choose One</option>
            <option value="laki laki">Laki Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        </li>
        <li>
            <label for="orangtua">Nama Orang Tua</label>
            <input type="text" name="orangtua" id="orangtua">
        </li>
    </ul>
    <button type="submit" name="tambah">Tambahkan</button>
    </form>
    <a href="index.php">Kembali Ke Daftar Keluarga</a><br>
</body>
</html>