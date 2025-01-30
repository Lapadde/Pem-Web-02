<?php
$cnn = mysqli_connect('localhost', 'root', '', 'db_kampus');
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal <br/>";
    exit();
} else {
    echo "Koneksi Berhasil <br/>";
}

$sql = "DELETE FROM mahasiswa WHERE nim ='222280019'";
$hapus = mysqli_query($cnn, $sql);

if (mysqli_affected_rows($cnn) == 0) {
    echo "Data GAGAL Dihapus <br/>";
} else {
    echo "Data BERHASIL Dihapus <br/>";
}
?>
