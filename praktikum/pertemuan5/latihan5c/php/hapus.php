<!-- 
    NAMA : Muhamad Rizky
    NPM : 203040043
    Kelas : B
    Github : https://github.com/MuhamadRizky14
    MataKuliah : Pemrograman Web
    Shift : Jumat, 10.00 WIB
 -->

 <?php 
require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = 'admin.php';
          </script>";
} else {
   echo "<script>
            alert('Data Gagal dihapus!');
            document.location.href = 'admin.php';
        </script>";
}
?>