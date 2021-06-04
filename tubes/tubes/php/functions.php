<?php

function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20043", "#Akun#203040043#") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw20043_tubes_203040043") or die("Database Salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql") or die(mysqli_error($conn));
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama_alatmusik = htmlspecialchars($data['nama_alatmusik']);
    $jenis = htmlspecialchars($data['jenis']);
    $asal = htmlspecialchars($data['asal']);
    $tahun_ditemukan = htmlspecialchars($data['tahun_ditemukan']);
    $warna = htmlspecialchars($data['warna']);

    $query = "INSERT INTO 
                alat_musik
              VALUES
              ('', '$gambar', '$nama_alatmusik', '$jenis', '$asal', '$tahun_ditemukan', '$warna')
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama_alatmusik = htmlspecialchars($data['nama_alatmusik']);
    $jenis = htmlspecialchars($data['jenis']);
    $asal = htmlspecialchars($data['asal']);
    $tahun_ditemukan = htmlspecialchars($data['tahun_ditemukan']);
    $warna = htmlspecialchars($data['warna']);

    $queryubah = "UPDATE alat_musik
                    SET
                    gambar = '$gambar',
                    nama_alatmusik = '$nama_alatmusik',
                    jenis = '$jenis',
                    asal = '$asal',
                    tahun_ditemukan = '$tahun_ditemukan',
                    warna = '$warna'
                WHERE id = '$id' ";
    mysqli_query($conn, $queryubah) or die($conn);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM alat_musik
            WHERE
            gambar LIKE '%$keyword%' OR
                    nama_alatmusik LIKE '%$keyword%' OR
                    asal LIKE '%$keyword%' OR
                    warna LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    //enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
