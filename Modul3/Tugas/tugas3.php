<?php
$jumlahKelipatan = 0; 

echo "Bilangan bulat dari 3 hingga 127 yang merupakan kelipatan 6:<br>";

for ($bil = 3; $bil <= 127; $bil++) {
    if ($bil % 6 == 0) { 
        echo $bil . "<br>"; 
        $jumlahKelipatan++; 
    }
}

echo "Banyaknya bilangan bulat dari 3 hingga 127 yang merupakan kelipatan 6 adalah: $jumlahKelipatan";
?>
