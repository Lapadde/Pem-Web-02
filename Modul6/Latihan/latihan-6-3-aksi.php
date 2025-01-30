<?php  
session_start();  
if (isset($_GET['aksi']) and ($_GET['aksi']=='logout')) {  
    session_destroy();  
    header("location:latihan-6-3.php");  
}  
  
if(isset($_SESSION['login'])){  
    $nama = $_SESSION['username'];  
    echo "<center>";  
    echo "<p>Selamat Datang <b>".$nama."</b></p>";  
    echo "<p>Berikut ini menu navigasi anda:</p>";  
    echo "<p><a href='#'>Menu 1</a> <a href='#'>Menu 2</a> 
            <a href='#'>Menu 3</a></p>";  
    echo "<a href='?aksi=logout'>Logout</a>";  
    echo "</center>";  
} else {  
    header("location:latihan-6-3.php");  
}  
?>  
