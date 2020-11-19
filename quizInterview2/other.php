<?php 

require 'functions.php';

$kolom = query("SELECT * FROM silsilah");
// var_dump($kolom);


; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="tambah.php">Tambah Data Keluarga</a><br><br>
    <h1>Silsilah Keluarga</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Aksi</td>
            <td>Nama</td>
            <td>Gender</td>
            <td>Status</td>
        </tr>
        <?php foreach($kolom as $k): ?>
        <tr>
        <td><a href="ubah.php?id=<?= $k["id"]; ?>">Ubah</a> | <a href="hapus.php?id=<?= $k["id"]; ?>" onclick="return confirm('hapus?')">Hapus</a></td>
            <td><?= $k["nama"]; ?></td>
            <td><?= $k["gender"]; ?></td>
            <td><?= $k["status"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>