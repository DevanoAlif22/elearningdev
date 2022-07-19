<?php 

//jangan lupa session start
session_start();
//jika gak ada session login
if ( !isset($_SESSION["login"])) {
    //maka tendang ke login
    header("Location: login2.php");
    exit;
}


//CARA PERTAMA MEMASUKKAN DATA KE DATABASE
//CARA KEDUA DI FILE FUNCTION
//Cek apakah tombol submit sudah di tekan atau belum
// Melakukan insert data kita harus connect dulu
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

//Kalu sudah dipencet maka kita masukan data ke database
if( isset($_POST["submit"]) ) {
    // var_dump($_POST);
    //Ambil  data dari tiap2 elemen dari form untuk disimpan ke varable

    // $nrp = $_POST["NRP"];
    // $nama = $_POST["nama"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    //Sekarang kita lakukan query insert (masukkan) data ke database
    // $query = "INSERT INTO mahasiswa
    //             VALUES
    //         ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
    
    // mysqli_query($conn, $query);

    //Cek Apakah data berhasil di tambah atau tidak
    // if( mysqli_affected_rows($conn) > 0 ) {
    //     $berhasil = true;
    // } else {
    //     $gagal = true;

    // }



    //CARA KEDUA DENGAN FILE FUNCTION
    //Kita hubungkan dulu dengan function
    require 'functions.php';
    //data dari elemen form yang bernama tambah di ambil ke file functions
    if ( tambah($_POST) > 0 ) {
    echo "
        <script>
            alert('DATA BERHASIL DI TAMBAHKAN!');
            document.location.href = 'database2.php';
        </script> ";
    } else {
        echo "
            <script>
                alert('DATA GAGAL DI TAMBAHKAN!');
                document.location.href = 'database2.php';
            </script> ";
    }
}

?>
<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8″>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
<meta http-equiv=”X-UA-Compatible” content=”ie=edge”> 
<title>Database</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Prompt&display=swap" rel="stylesheet">
<style>
    .wadah1 {
    background-color: #0095ff;
    width: 25%;
    height: 750px;

}
</style>
</head>
<body>
<div class="container">

<div class="wadah1">
    <div class="judul">
        <h1>Program Sekolah Institut Teknologi Adhi Tama Surabaya</h1>
    </div>
    <div class="data">
        <p><a href="index.php">TENTANG SEKOLAH</a></p> 
        <p><a href="jurusan.php">TENTANG JURUSAN</a></p> 
    <span>
        <p><a href="database2.php">DATA MAHASISWA</a></p> 
    </span>
    <p><a href="">ABSENSI</a></p> 
    <p><a href="tugas.php">PENUGASAN</a></p> 
</div>
<div class="logout">
<a href="logout.php">LOGOUT</a>
</div>
</div>

<div class="wadah3">
    <h1>DATA MAHASISWA > <span> Tambah data </span></h1>

<div class="form">
    <form action="" method="post">
        <p> NRP : </p>
        <input type="text" name="NRP" class="input" required>
        <p> Nama : </p>
        <input type="text" name="nama" class="input" required>
        <p> Email : </p>
        <input type="text" name="email" class="input" required>
        <p> Jurusan : </p>
        <input type="text" name="jurusan" class="input" required>
        <p> Gambar : </p>
        <input type="text" name="gambar" class="input" required>
        <br></br>
        <button type="submit" class="submit" name="submit">TAMBAH</button>
    </form>
    </div>
</div>

</body>
</html>