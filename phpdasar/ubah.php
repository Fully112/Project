<?php 
session_start();
if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET["id"];

// Query data daftarnovel berdasarkan id
$dnv = query("SELECT * FROM daftarnovel WHERE id = $id")[0];

// Cek apakah tombol sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // Cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 ){
        echo "
        <script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ubah Data Novel</title>
    <link rel="stylesheet" href="style123.css">
    <style>
        ul li {
            color: white;
        }
    </style>
</head>
<body>
<div class="header">
    <ul>
      <li><a href="#">AIR Novel</a></li>
      <li><a href="index.php">Home</a></li>
  </div>
    </ul>
  </div>
    <h1>Ubah Data Novel</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $dnv["id"]; ?>">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required value="<?= $dnv["judul"]; ?>">
            </li>
            <li>
                <label for="author">Author :</label>
                <input type="text" name="author" id="author" required value="<?= $dnv["author"]; ?>">
            </li>
            <li>
                <label for="sinopsis">Sinopsis :</label>
                <input type="text" name="sinopsis" id="sinopsis" required value="<?= $dnv["sinopsis"]; ?>">
            </li>
            <li>    
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>




</body>
</html>