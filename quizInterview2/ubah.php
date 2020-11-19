<?php 

require 'functions.php';
// $conn = mysqli_connect("localhost","root","","keluarga");
// ambil data dari url
$id = $_GET["id"];

$fams = query("SELECT * FROM silsilah WHERE id =$id")[0];
var_dump($fams);


if(isset($_POST["tambah"])){
    if(ubah($_POST) > 0){
        echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'other.php';
            </script>";
    } else {
        echo "<script>
        alert('data gagal diubah');
        document.location.href = 'other.php';
        </script>";
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
    <h1>Ubah Data Keluarga</h1>
    <form action="" method="post">
    <ul>
        <input type="hidden" value="<?= $fams["id"]; ?>" name="id">
        <li>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $fams["nama"]; ?>">
        </li>
        <li>
        <label for="status">Status</label>
        <select id="status" name="status">
            <option value="bapak">Bapak</option>
            <option value="anak">Anak</option>
            <option value="cucu">Cucu</option>
        </select>
        </li>
        <li>
        <label for="gender">Jenis Kelamin</label>
        <select id="gender" name="gender">
            <option value="laki laki">Laki Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        </li>
        <li>
            <label for="orangtua">Nama Orang Tua</label>
            <input type="text" name="orangtua" id="orangtua" value="<?= $fams["orang_tua"]; ?>">
        </li>
    </ul>
    <button type="submit" name="tambah">Ubah</button>
    </form>
    <a href="other.php">Kembali Ke Daftar Keluarga Yang lain</a><br>
</body>
</html>