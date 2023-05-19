<?php 
session_start();
if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Cek apakah tombol sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // Cek apakah data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0 ){
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Novel</title>
    <link rel="stylesheet" href="style123.css">
</head>
<style>
ul li {
    color: white;
}

</style>
<body>
<div class="header">
    <ul>
      <li><a href="#">AIR Novel</a></li>
      <li><a href="index.php">Home</a></li>
  </div>
    </ul>
  </div>

    <h1>Tambah Data Novel</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="author">Author :</label>
                <input type="text" name="author" id="author" required>
            </li>
            <li>
                <label for="sinopsis">Sinopsis :</label>
                <input type="text" name="sinopsis" id="sinopsis" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>




</body>
</html>