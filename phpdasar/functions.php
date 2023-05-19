<?php 
// Koneksi Ke Database
$conn = mysqli_connect("localhost","root","","phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;
    $judul = htmlspecialchars($data["judul"]);
    $author = htmlspecialchars($data["author"]);
    $sinopsis = htmlspecialchars($data["sinopsis"]);

    $query = "INSERT INTO daftarnovel VALUES
             ('','$judul','$author','$sinopsis')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM daftarnovel WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id  = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $author = htmlspecialchars($data["author"]);
    $sinopsis = htmlspecialchars($data["sinopsis"]);

    $query = "UPDATE daftarnovel SET 
                judul = '$judul',
                author = '$author',
                sinopsis = '$sinopsis'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query = "SELECT * FROM daftarnovel WHERE 
              judul LIKE '%$keyword%' OR
              author LIKE '%$keyword%' OR
              sinopsis LIKE '%$keyword%'
                ";
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // Cek Username Sudah Ada Atau Belom
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result) ){
        echo "<script>
                alert('Username Sudah Terdaftar!');
             </script>";
        return false;
    }

    // Cek Konfirmasi Password

    if( $password !== $password2){
        echo "<script>
                alert('Konfirmasi Password Tidak Sesuai!');
             </script>";
             return false;
    }
    // Enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan User Baru
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);
}
?>