<!-- 
    NAMA : Muhamad Rizky
    NPM : 203040043
    Kelas : B
    Github : https://github.com/MuhamadRizky14
    MataKuliah : Pemrograman Web
    Shift : Jumat, 10.00 WIB
 -->

 <?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040043");

    return $conn;
}

function query ($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}