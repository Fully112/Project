<?php 
session_start();
if(!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}


require 'functions.php';


//Pagination
$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM daftarnovel"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;


$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$daftarnovel = query("SELECT * FROM daftarnovel LIMIT $awalData, $jumlahDataPerHalaman");




// Tombol Cari Ditekan
if( isset($_POST["cari"]) ) {
    $daftarnovel = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>AIR Novel</title>
    <link rel="stylesheet" href="style123.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
<div class="header">
    <ul>
      <li><a href="#">AIR Novel</a></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="tambah.php">Tambah Data</a></li>
      <li><a href="#">About Us</a></li>
      <li class="search"><form class="d-flex" method="post">
        <input class="form-control me-2" type="text"name="keyword" placeholder="Search..." aria-label="Search" autocomplete="off">
        <button type="submit" name="cari">Search</button>
      </form></li> 
      <div class="kanan">
    <li><a href="logout.php">Logout</a></li>
    <li><a href="registrasi.php">Sign Up</a></li>
  </div>
    </ul>
    
  </div>
<h1>Daftar Novel</h1>



<div class="pagenation">
<?php if( $halamanAktif > 1 ) : ?>
  <a href="?halaman<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
      <?php if( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?= $i; ?>"id="aktif"><?= $i; ?></a>
      <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
      <?php endif; ?>
    <?php endfor; ?>
    <?php if( $halamanAktif < $jumlahHalaman ) : ?>
  <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>
</div>




<div class="table">
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Author</th>
        <th>Sinopsis</th>
        <th>Action</th>
    </tr>

    <?php $i = 1 + $awalData; ?>
    <?php foreach( $daftarnovel as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td> 
            <a href="upload/isi/<?= $row['judul']; ?>">
                <div class="image">
                  <div id="zoom-In">
                    <figure><img src="upload/cover/<?= $row['judul']; ?>"></figure>
                  </div>
                </div>
              <br><br><?= $row["judul"]; ?>
            </a>
        </td>
        <td><?= $row["author"]; ?></td>
        <td><?= $row["sinopsis"]; ?></td>
        <td> <div class="action">
             <a href="ubah.php?id=<?= $row["id"]; ?>"><input id="Edit" type="submit" id="previous" value="Ubah"></a>
             <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');"><input id="Edit" type="submit" id="previous" value="Hapus"></a></a>
             </div>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
</div>
</body>
</html>