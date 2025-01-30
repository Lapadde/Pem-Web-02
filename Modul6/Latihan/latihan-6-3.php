<?php  
session_start();  
if(isset($_POST['login'])){  
    if(($_POST['nama']=='') || ($_POST['pass']=='')){  
        echo "User Name atau Password masih kosong";  
        session_destroy();  
    }  
    else{  
        // user = umpar & password = umpar123  
        if(($_POST['nama']=='umpar') and ($_POST['pass']=='umpar123')){  
            $_SESSION['login']=1;  
            $_SESSION['username']=$_POST['nama'];  
        }  
        else{  
            echo "User Name atau Password tidak sesuai";  
        }  
    }  
    if((isset($_SESSION['login'])) and ($_SESSION['login']==1)){  
        header("location: latihan-6-3-aksi.php");  
        exit();  
    }  
}  
?>  
  
<html>  
<head>  
    <title>Session</title>  
</head>  
<body>  
<form name="session" method="POST" action="">  
    <p>Form Login</p>  
    <p>User Name <input type="text" name="nama"></p>  
    <p>Password <input type="password" name="pass"></p>  
    <input type="submit" name="login" value="login">  
</form>  
</body>  
</html>  
