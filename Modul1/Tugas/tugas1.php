<?php
// Tugas 1
echo "<h2>Tugas 1</h2>";
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;

// Menampilkan informasi saldo, bunga, dan bulan
echo ("Saldo awal = $saldoAwal<br>");
echo ("Saldo bunga = $bunga<br>");
echo ("Bulan = $bulan<br>");

// Pengitungan saldo
$saldoAkhir = $saldoAwal * pow((1 + $bunga), $bulan); // Menghitung saldo akhir
echo "Saldo akhir setelah ".$bulan." bulan adalah: Rp. ".number_format($saldoAkhir, 2, ',', '.'); // Menampilkan saldo akhir

// Tugas 2
echo"<h2>Tugas 2</h2>";
// Variabel untuk jari-jari dan garis pelukis
$r = 7; // Jari-jari
$s = 10; // Garis pelukis

define ('pi', 3.14);

// Menghitung luas alas
$luasAlas = pi * ($r * $r);

// Menghitung luas permukaan
$luasPermukaan = $luasAlas + (pi * $r * $s);

// Menampilkan hasil
echo "Luas Alas: " . number_format($luasAlas, 2, ',', '.') . " cm²<br>";
echo "Luas Permukaan: " . number_format($luasPermukaan, 2, ',', '.') . " cm²\n";
?>
