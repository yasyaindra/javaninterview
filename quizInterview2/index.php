<?php 
require 'functions.php';

; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($anak)): ?>
        <h1>Anak</h1>
    <?php foreach($anak as $a): ?>
        <p><?= $a["nama"]; ?></p>
    <?php endforeach; ?>
    <?php elseif(isset($cucu)): ?>
        <h1>Semua Cucu Budi</h1>
    <?php foreach($cucu as $c): ?>
        <p><?= $c["nama"]; ?></p>
    <?php endforeach; ?>
    <?php elseif(isset($cPerempuan)): ?>
        <h1>Semua Cucu Perempuan Budi</h1>
    <?php foreach($cPerempuan as $cP): ?>
        <p><?= $cP["nama"]; ?></p>
    <?php endforeach; ?>
    <?php elseif(isset($bibi)): ?>
        <h1>Semua Bibi Dari Farah</h1>
    <?php foreach($bibi as $b): ?>
        <p><?= $b["nama"]; ?></p>
    <?php endforeach; ?>
    <?php elseif(isset($sepupu)): ?>
        <h1>Sepupu Laki Laki dari Hani</h1>
    <?php foreach($sepupu as $s): ?>
        <p><?= $s["nama"]; ?></p>
    <?php endforeach; ?>
    <?php endif; ?>
    <a href="tambah.php">Tambah Data Keluarga</a><br><br>
    <form action="index.php" method="post">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Nama</th>
                <th>Munculkan</th>
            </tr>
            <tr>
                <td><?= $kolom[0]["nama"]; ?></td>
                <td>
                    <form action="index.php" method="post">
                    <button type="submit" name="anak" >Anak</button>
                    </form>
                    <form action="index.php" method="post">
                    <button type="submit" name="cucu" >Semua Cucu</button>
                    </form>
                    <form action="index.php" method="post">
                    <button type="submit" name="cPerempuan" >Cucu Perempuan</button>
                    </form>
                </td>
                <tr>
                <td><?= $kolom[6]["nama"]; ?></td>
                <td>
                <form action="index.php" method="post">
                    <input type="hidden" value="<?= $kolom[6]["nama"]; ?>" name="nama">
                    <button type="submit" name="bibi" >Bibi</button>
                    </form>
                </td>
                </tr>
                <tr>
                <td><?= $kolom[9]["nama"]; ?></td>
                <td>
                <form action="index.php" method="post">
                    <input type="hidden" value="<?= $kolom[9]["nama"]; ?>" name="nama">
                    <button type="submit" name="sepupu" >Sepupu Laki Laki</button>
                    </form>
                </td>
                </tr>
            </tr>
        </table>
    </form>
    <a href="other.php">Versi yang lain</a>
</body>
</html>