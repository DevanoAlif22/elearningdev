<?php 

//jangan lupa session startq
session_start();
//jika gak ada session login
if ( !isset($_SESSION["login"])) {
    //maka tendang ke login
    header("Location: login2.php");
    exit;
}



//CARA MENGUBAH DATA DARI DATABASE
require 'functions.php';
// Ambil data id pada url menggunakan get
$id = $_GET["id"];
//query semua data mahasiswa dengan memanggil id (langsung elemen pertama)
$mhs = anjay("SELECT * FROM mahasiswa WHERE id = $id")[0];



//Kalau submit sudah dipencet maka kita masukan data ke database
if( isset($_POST["submit"]) ) {

    //Kita hubungkan dulu dengan function
    //Cek apakah data berhasil di ubah
    if ( ubah($_POST) > 0 ) {
    echo "
        <script>
            alert('DATA BERHASIL DI UBAH!');
            document.location.href = 'database2.php';
        </script> ";
    } else {
        echo "
            <script>
                alert('DATA GAGAL DI UBAH!');
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
    <p><a href="">PENUGASAN</a></p> 
</div>
<div class="logout">
<a href="logout.php">LOGOUT</a>
</div>
</div>

<div class="wadah3">
    <h1>DATA MAHASISWA > <span> UBAH DATA </span></h1>

<div class="form">
    <form action="" method="post">
        <!-- required untuk data harus di isi -->
        <!-- value untuk data akan langsung ad -->
        <input type="hidden" name="id" class="input" value="<?php echo $mhs["id"]?>">
        <p> NRP : </p>
        <input type="text" name="NRP" class="input" required value="<?php echo $mhs["nrp"]?>">
        <p> Nama : </p>
        <input type="text" name="nama" class="input" required value="<?php echo $mhs["nama"]?>" >
        <p> Email : </p>
        <input type="text" name="email" class="input" required value="<?php echo $mhs["email"]?>">
        <p> Jurusan : </p>
        <input type="text" name="jurusan" class="input" required value="<?php echo $mhs["jurusan"]?>">
        <p> Gambar : </p>
        <input type="text" name="gambar" class="input" required value="<?php echo $mhs["gambar"]?>">
        <br></br>
        <button type="submit" class="submit" name="submit">UBAH</button>
    </form>
    </div>
</div>

</body>
</html>