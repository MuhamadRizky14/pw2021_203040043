<?php 
// $mahasiswa = [
// ["Muhamad Rizky", "203040043", "muhamadrizky141001@gmail.com", "Teknik Informatika"],
// ["203040014", "Buleee", "muhamad_rizky@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>