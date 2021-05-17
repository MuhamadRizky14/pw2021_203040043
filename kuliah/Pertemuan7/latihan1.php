<?php 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040043",
		"nama" => "Muhamad Rizky",
		"email" => "muhamadrizky141001@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "profile 1.png"
	],
	[
		"nama" => "Buleee", 
		"nrp" => "203040014",
		"email" => "muhamad_rizky@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "profile 2.png"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>