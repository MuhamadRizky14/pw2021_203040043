<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET['id'];
$alatmusik = query("SELECT * FROM alat_musik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
  } else {
    echo "<script>
                    alert('Data gagal diubah!');
                    document.location.href = 'admin.php';
                 </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .textform {
      font-weight: bold;
    }

    .inputform {
      border-radius: 10px;
      width: 400px;
    }

    h3 {
      width: 300px;
      height: 100px;
      padding: 15px;
      margin: 20px;
      background-image: linear-gradient(to right, #4682B4, #00FFFF, #00FA9A);
      border-radius: 15px;

    }
  </style>
</head>

<body style="background-image:linear-gradient(to right, #4682B4, #00FFFF, #00FA9A); ">
  <center>
    <h3>Form Ubah Data Alat Musik</h3>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?= $alatmusik['id']; ?>">

      <div class="textform">
        <label for="gambar">Gambar :</label>
        <br>
        <input class="inputform" type="text" name="gambar" id="gambar" required value="<?= $alatmusik['gambar']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="nama_alatmusik">Nama Alat Musik :</label>
        <br>
        <input class="inputform" type="text" name="nama_alatmusik" id="nama_alatmusik" required value="<?= $alatmusik['nama_alatmusik']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="jenis">Jenis :</label>
        <br>
        <input class="inputform" type="text" name="jenis" id="jenis" required value="<?= $alatmusik['jenis']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="asal">Asal :</label>
        <br>
        <input class="inputform" type="text" name="asal" id="asal" required value="<?= $alatmusik['asal']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="tahun_ditemukan">Tahun Ditemukan :</label>
        <br>
        <input class="inputform" type="text" name="tahun_ditemukan" id="tahun_ditemukan" required value="<?= $alatmusik['tahun_ditemukan']; ?>">
      </div>
      <br>
      <div class="textform">
        <label for="warna">Warna :</label>
        <br>
        <input class="inputform" type="text" name="warna" id="warna" required value="<?= $alatmusik['warna']; ?>">
      </div>
      <br>
      <button class="btn btn-success" type="submit" name="ubah">Ubah Data!</button>
      <button class="btn btn-primary" type="sumbit"><a href="admin.php" style="text-decoration: none; color: white;">Kembali</a></button>
    </form>
  </center>
</body>

</html>