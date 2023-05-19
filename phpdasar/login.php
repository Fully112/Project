<?php
session_start();

if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';
if(isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // Cek Username
    if(mysqli_num_rows($result) == 1) {

            // Cek Password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"]) ) {
                // Set Session
                $_SESSION["login"] = true;

                header("Location: index.php");
                exit;
            }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
<link rel="stylesheet" href="l123.css">
</head>
<style>
     #sign{
    border: none;
    outline: none;
    background: #45f3ff;
    padding: 11px 25px;
    width: 120px;
    margin-top: -43px;
    border-radius: 4px;
    margin-left: 150px;
    font-weight: 550;
    cursor: pointer;
    text-decoration: none;
    color: black;
}
</style>
<body>
    
<?php if(isset($error) ) : ?> 
<script style="color : red; font-style: italic;">alert("Username / Password Salah!")</script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="l123.css">
</head>
<body>

<form action="" method="POST">
    <div class="box">
        <div class="form">
            <h2>Halaman Login</h2>
                <div class="inputBox">
                    <input type="text" name="username" id="username">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" id="password">
                    <span>Password</span>
                    <i></i>
                </div>
            <input type="submit" name="login" value="Login">
            <a href="registrasi.php" id="sign">Sign Up</a>
        </div>
    </div>
</form>
</body>
</html>