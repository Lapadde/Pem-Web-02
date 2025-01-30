<?php  
session_start();  
  
// Array untuk menyimpan username dan password  
$users = [  
    'ali' => 'password1',  
    'rahman' => 'password3',  
    'dede' => 'password4',  
    'anti' => 'password5',  
    'rika' => 'password6'  
];  
  
if (isset($_POST['login'])) {  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
  
    // Cek apakah username dan password valid  
    if (array_key_exists($username, $users) && $users[$username] === $password) {  
        $_SESSION['login'] = true;  
        $_SESSION['username'] = $username;  
        header("Location: dashboard.php");  
        exit();  
    } else {  
        $error = "Username atau Password tidak sesuai.";  
    }  
}  
?>  
  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Login</title>  
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">  
</head>  
<body class="bg-gray-100">  
    <div class="flex items-center justify-center min-h-screen">  
        <div class="bg-white rounded-lg shadow-lg p-8 w-96">  
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>  
            <form method="POST" action="">  
                <input type="text" name="username" placeholder="Username" required class="border border-gray-300 rounded-lg p-2 w-full mb-4">  
                <input type="password" name="password" placeholder="Password" required class="border border-gray-300 rounded-lg p-2 w-full mb-4">  
                <input type="submit" name="login" value="Login" class="bg-blue-500 text-white rounded-lg py-2 w-full hover:bg-blue-600">  
                <?php if (isset($error)): ?>  
                    <div class="text-red-500 text-center mt-2"><?php echo $error; ?></div>  
                <?php endif; ?>  
            </form>  
        </div>  
    </div>  
</body>  
</html>  
