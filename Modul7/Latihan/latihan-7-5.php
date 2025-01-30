<?php
$cnn = mysqli_connect('localhost', 'root', '', 'db_kampus');

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal <br/>";
    exit();
} else {
    echo "Koneksi Berhasil <br/>";
}

$sql = "UPDATE mahasiswa SET nama='Taufiq Hidayat', telp='081242818675', 
        alamat='Lapadde Mas' WHERE nim='222280019'";

$update = mysqli_query($cnn, $sql);

if (mysqli_affected_rows($cnn) == 0) {
    echo "Data GAGAL Dirubah <br/>";
} else {
    echo "Data BERHASIL Dirubah <br/>";
}
?>
