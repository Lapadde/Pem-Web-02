<?php
$jumlah = 0;

for ($bil = 2; $bil <= 50; $bil++) {
    if ($bil == 2) {
        $jumlah = $bil; 
        // echo "Jumlah $bil = $jumlah <br>";
    } else {
        echo "Jumlah $jumlah + $bil = " . ($jumlah + $bil) . "<br>";
        $jumlah += $bil;
    }
}

echo "Hasil akhir penjumlahan dari 2 hingga 50 adalah: $jumlah";
?>
