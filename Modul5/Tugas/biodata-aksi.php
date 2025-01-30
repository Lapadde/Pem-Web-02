<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Biodata Anda</title>  
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  
</head>  
<body class="bg-gray-100 flex items-center justify-center min-h-screen">  
    <div class="bg-white p-8 rounded-lg shadow-md w-96">  
        <h2 class="text-2xl font-bold mb-4 text-center">Biodata Anda</h2>  
          
        <?php    
        // Mengambil data dari form    
        $nim = $_POST['nim'];    
        $nama = $_POST['nama'];    
        $alamat = $_POST['alamat'];    
        $lahir = $_POST['lahir'];    
        $komentar = $_POST['komen'];    
        $hobi = $_POST['hobi'];    
        $binatang = $_POST['favorit'];    
          
        // Menampilkan data    
        echo "<p class='mb-2'><strong>NIM:</strong> $nim</p>";    
        echo "<p class='mb-2'><strong>Nama:</strong> $nama</p>";    
        echo "<p class='mb-2'><strong>Alamat:</strong> $alamat</p>";    
        echo "<p class='mb-2'><strong>Tempat, Tanggal lahir:</strong> $lahir</p>";    
        echo "<p class='mb-2'><strong>Hobi yang Anda sukai:</strong> $hobi</p>";    
        echo "<p class='mb-2'><strong>Binatang yang Anda sukai:</strong> $binatang</p>";    
        echo "<p class='mb-2'><strong>Komentar atau Pendapat Anda:</strong><br>$komentar</p>";    
          
        echo "<h3 class='text-lg font-semibold mt-4'>Game yang Anda sukai:</h3>";    
        echo "<ul class='list-disc pl-5'>";  
        if (isset($_POST['game1'])) {    
            echo "<li>" . $_POST['game1'] . "</li>";    
        }    
        if (isset($_POST['game2'])) {    
            echo "<li>" . $_POST['game2'] . "</li>";    
        }    
        if (isset($_POST['game3'])) {    
            echo "<li>" . $_POST['game3'] . "</li>";    
        }    
        if (isset($_POST['game4'])) {    
            echo "<li>" . $_POST['game4'] . "</li>";    
        }    
        echo "</ul>";  
        ?>  
          
        <div class="mt-4">  
            <a href="biodata.php" class="text-blue-600 hover:underline">Kembali ke Form</a>  
        </div>  
    </div>  
</body>  
</html>  
