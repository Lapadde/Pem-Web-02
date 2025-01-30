<?php
// Variabel untuk jari-jari dan garis pelukis
$r = 7; // Jari-jari
$s = 10; // Garis pelukis

$pi = 3.14; // Nilai π

// Menghitung luas alas
$luasAlas = $pi * ($r * $r);

// Menghitung luas permukaan
$luasPermukaan = $luasAlas + ($pi * $r * $s);

// Menampilkan hasil
echo "Luas Alas: " . number_format($luasAlas, 2, ',', '.') . " cm²<br>";
echo "Luas Permukaan: " . number_format($luasPermukaan, 2, ',', '.') . " cm²\n";
?>
