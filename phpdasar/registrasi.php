<?php 
require 'functions.php';

if( isset($_POST["register"]) ){

    if( registrasi($_POST) > 0) {
        echo "<script>
                alert('User Baru Berhasil Ditambahkan!');
             </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Registrasi</title>
    <style>
body{
    background-color: #303030;
}
        label{
            display: block;
        }
        input[type="submit"]
{
    border: none;
    outline: none;
    background: #45f3ff;
    padding: 11px 25px;
    width: 100px;
    margin-right: 15px;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
}

.all a{
  color: white;
  text-decoration: none;
  font-size: large;
}

h1{
  color: white;
}

ul li{
  color: white;
}

    </style>
    <link rel="stylesheet" href="upload/isi/navbar.css">
</head>
<body>
<div class="header">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
</div>
    
    <h1> Halaman Registrasi</h1>

    <form action="" method="post">

    <ul>
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" required>
        </li>
        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password" required>
        </li>
        <li>
            <label for="password2">Konfirmasi Password : </label>
            <input type="password" name="password2" id="password2" required>
        </li>
        <li>
            <button type="submit" name="register">Register</button>
        </li>
    </ul>

    </form>

</body>
</html>