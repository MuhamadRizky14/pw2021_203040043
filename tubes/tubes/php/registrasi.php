<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            <?script>";
  } else {
    echo "<script>
                alert('Registrasi Gagal');
                </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Document</title>

  <style>
    #card {

      border-radius: 10px;
      box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
      height: 400px;
      margin: 6rem auto 8.1rem auto;
      width: 350px;
    }
  </style>
</head>

<body style="background-image:linear-gradient(to right, #4682B4, #00FFFF, #00FA9A); ">
  <form action="" method="post">


    <div id="card">
      <br>
      <div>
        <label for="username">Username :</label>
        <input type="text" name="username">
      </div>

      <div>
        <label for="password">Password :</label>
        <input type="password" name="password">
      </div>

      <br>
      <button class="btn btn-success" type="submit" name="register">REGISTER</button>

    </div>

  </form>
</body>

</html>