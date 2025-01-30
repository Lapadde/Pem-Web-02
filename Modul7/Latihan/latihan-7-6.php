<?php
$cnn = mysqli_connect('localhost', 'root', '', 'db_kampus');
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal <br/>";
    exit();
} else {
    echo "Koneksi Berhasil <br/>";
}

$sql = "SELECT nim, nama, alamat, telp FROM mahasiswa";
$tampil = mysqli_query($cnn, $sql);
while ($data = mysqli_fetch_array($tampil)) {
    echo "NIM: " . $data['nim'] . "<br/>";
    echo "Nama: " . $data['nama'] . "<br/>";
    echo "Alamat: " . $data['alamat'] . "<br/>";
    echo "Telp: " . $data['telp'] . "<br/>";
}
?>
