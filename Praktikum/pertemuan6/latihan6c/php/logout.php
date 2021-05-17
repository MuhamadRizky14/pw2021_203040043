<!-- 
    NAMA : Muhamad Rizky
    NPM : 203040043
    Kelas : B
    Github : https://github.com/MuhamadRizky14
    MataKuliah : Pemrograman Web
    Shift : Jumat, 10.00 WIB
 -->

 <?php 
session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>