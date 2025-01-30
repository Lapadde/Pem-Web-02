<?php  
function isGanjil($bilangan) {  
    return $bilangan % 2 !== 0;  
}  
  
function hitungJumlahGanjil($dari, $sampai) {  
    $jumlahGanjil = 0;  
    for ($i = $dari; $i <= $sampai; $i++) {  
        if (isGanjil($i)) {  
            $jumlahGanjil++;  
        }  
    }  
    return $jumlahGanjil;  
}  
  
$dari = 10;  
$sampai = 123456;  
$jumlahGanjil = hitungJumlahGanjil($dari, $sampai);  
  
echo "Jumlah bilangan ganjil antara $dari sampai $sampai adalah: $jumlahGanjil";  
?>  
