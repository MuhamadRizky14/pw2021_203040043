<?php 
$mahasiswa = [
	["Muhamad Rizky", "203040043", "Teknik Informatika", "muhamadrizky141001@gmail.com"],
	["Afrizal", "203040075", "Teknik Industri", "afrizal@yahoo.com"],
	["203040016", "Alif", "Teknik Planologi", "alif_l@gmail.com"]
];

/* 
    Nama : Muhamad Rizky 
    NRP : 203040043
    Kelas B
    Pertemuan ke 5
*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>





</body>
</html>