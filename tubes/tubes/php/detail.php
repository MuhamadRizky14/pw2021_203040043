<?php

if (!isset($_GET['id'])) {
    header("location: ../ index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$b = query("SELECT * FROM alat_musik WHERE id = $id")[0];
?>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Detail</title>
</head>

<body style="background-image:linear-gradient(to right, #4682B4, #00FFFF, #00FA9A);">
    <center>
        <br>
        <div class="card" style="width: 18rem;">
            <h1>Alat Musik</h1>
            <div class="container">
                <div class="gambar">
                    <img src="../assets/img/<?= $b["gambar"]; ?>" class="card-img-top" alt="">
                </div>
                <div class="keterangan">
                    <p>Nama Alat Musik :<?= $b["nama_alatmusik"]; ?></p>
                    <p>Jenis : <?= $b["jenis"]; ?></p>
                    <p>Asal : <?= $b["asal"]; ?></p>
                    <p>Tahun ditemukan : <?= $b["tahun_ditemukan"]; ?></p>
                    <p>Warna : <?= $b["warna"]; ?></p>
                </div>
            </div>

            <button class="btn btn-primary" type="sumbit"><a href="../index.php" style="text-decoration: none; color: white;">Kembali</a></button>
        </div>
    </center>
</body>

</html>