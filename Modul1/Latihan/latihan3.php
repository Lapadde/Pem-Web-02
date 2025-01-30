<?php
$a ="5";
$b ="2.5";
$komentar="Selamat Datang";
echo ("Nilai variabel a adalah = $a <br>");
// Veriabel bertipe integer
echo ("Nilai variabel b adalah = $b <br>");
// Variabel bertipe real
echo ("Nilai variabel komentar adalah = $komentar <br>");
// variabel tipe string


$tambah = $a + $b; // rumus pertambahan
$kurang = $a - $b; // rumus pengurangan
$kali = $a * $b; // rumus perkalian
$bagi = $a / $b; // rumus pembagian

echo ("<br>Hasil penjumlahan a dan b adalah = $tambah <br>");
echo ("Hasil pengurangan a dan b adalah = $kurang <br>");
echo ("Hasil perkalian a dan b adalah = $kali <br>");
echo ("Hasil pembagian a dan b adalah = $bagi <br>");
$nama = "TI UMPAR";
$garis = "======================================";
echo "<p>";
echo $garis."<br>";
echo $komentar. " Di lab ". $nama. "<br>Selamat Belajar Pemrograman<br>";
echo $garis. "<br>";
?>