<?php  
session_start();  
  
// Cek apakah user sudah login  
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {  
    header("Location: tugas2.php");  
    exit();  
}  
  
$username = $_SESSION['username'];  
?>  
  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Dashboard</title>  
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  
</head>  
<body class="bg-gray-100">  
    <div class="flex items-center justify-center min-h-screen">  
        <div class="bg-white rounded-lg shadow-lg p-8 w-96">  
            <h1 class="text-2xl font-bold text-center mb-4">Selamat Datang</h1>  
            <p class="text-lg text-center mb-6">Halo, <?php echo htmlspecialchars($username); ?>!</p>  
            <div class="mb-4">  
                <h2 class="text-xl font-semibold">Menu Navigasi:</h2>  
                <ul class="mt-2">  
                    <li><a href="page1.php" class="text-blue-500 hover:underline">Menu 1</a></li>  
                    <li><a href="page2.php" class="text-blue-500 hover:underline">Menu 2</a></li>  
                    <li><a href="page3.php" class="text-blue-500 hover:underline">Menu 3</a></li>  
                </ul>  
            </div>  
            <a href="?aksi=logout" class="block text-center text-white bg-red-500 hover:bg-red-600 rounded-lg py-2">Logout</a>  
        </div>  
    </div>  
  
    <?php  
    // Logout  
    if (isset($_GET['aksi']) && $_GET['aksi'] === 'logout') {  
        session_destroy();  
        header("Location: tugas2.php");  
        exit();  
    }  
    ?>  
</body>  
</html>  
