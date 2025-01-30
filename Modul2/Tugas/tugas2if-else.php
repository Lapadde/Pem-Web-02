<?php
$nilai = 90;

$grade = '';
$keterangan = '';

if ($nilai >= 90 && $nilai <= 100) {
    $grade = 'A';
    $keterangan = 'Baik Sekali';
} elseif ($nilai >= 76 && $nilai <= 89) {
    $grade = 'B';
    $keterangan = 'Baik';
} elseif ($nilai >= 60 && $nilai <= 75) {
    $grade = 'C';
    $keterangan = 'Cukup';
} elseif ($nilai >= 50 && $nilai <= 59) {
    $grade = 'D';
    $keterangan = 'Hampir Cukup';
} else {
    $grade = 'E';
    $keterangan = 'Kurang';
}

echo "Nilai: $nilai, Grade: $grade, Keterangan: $keterangan";
?>
