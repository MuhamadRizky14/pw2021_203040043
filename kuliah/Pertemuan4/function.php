<?php 
function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";
}

	/* 
    Nama : Muhamad Rizky
    NRP : 203040043
    Kelas B
    Pertemuan ke 4
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Pagi", "Rizky"); ?></h1>
</body>
</html>