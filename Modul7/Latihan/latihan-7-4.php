<?php
$cnn = mysqli_connect('localhost', 'root', '');
if(!$cnn) {
    echo "Koneksi Gagal";
} else {
    echo "Koneksi Berhasil<br/>";
    mysqli_select_db($cnn, "db_kampus"); // memilih mengakses db_kampus
}

$nim = "222280019";
$nama = "Taufiq Hidayat";
$alamat = "Lapadde Mas";
$telp = "081242818675";

$sql = "INSERT INTO mahasiswa (nim,nama,alamat,telp) 
VALUES ('$nim', '$nama', '$alamat', '$telp')";

if(mysqli_query($cnn, $sql)){
    echo "Data BERHASIL Disimpan <br/>";
    echo "NIM: $nim <br/>";
    echo "Nama: $nama <br/>";
    echo "Alamat: $alamat <br/>";
    echo "Telp: $telp <br/>";
} else {
    echo "Data GAGAL Disimpan <br/>";
}
?>