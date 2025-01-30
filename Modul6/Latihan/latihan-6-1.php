<?php  
function tampil_ganjil(){  
    for ($i=1; $i<=10; $i++){  
        if ($i % 2 == 1){  
            echo "$i ";  
        }  
    }  
}  
echo "Bilanggan ganjil dari 1-10: <br/>";  
//pemanggil fungsi  
tampil_ganjil();  
?>  