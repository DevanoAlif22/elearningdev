<?php 
//jangan lupa session startq
session_start();
//jika gak ada session login
if ( !isset($_SESSION["login"])) {
    //maka tendang ke login
    header("Location: login2.php");
    exit;
}

//CARA KEDUA UNTUK MENGAMBIl DATA DARI DATABASE
// PERTAMA BUAT DULU FILE FUNCTION SEBAGAI WADAH FUNGSI
//KEDUA KONEKSIKAN FILE INI DENGAN FILE FUNCTION 
//Menggunakan require 'nama_file';
require 'functions.php'; 

// Terakhir buat string untuk menampung function
$mahasiswa = anjay("SELECT * FROM mahasiswa");
//jika ingin mengurutkan maka kasih fungsi 
//ORDER BY id asc (terkecil ke terbesar)
//ORDER BY id desc (terbesar ke terkecil)
//KETIGA BUAT FUNCTION DI FILE FUNCTIONS

//Jika tombol cari di klik 
if( isset($_POST["cari"])) {
    //cari data sesuai yang dicari
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Database</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Prompt&display=swap" rel="stylesheet">

<style>
.materi img {
    width: 300px;
    margin-bottom: 45px;
}
.namamat {
    align-items: center;
    text-align: center;
}

.namamat p {
    margin-bottom: 20px;
}

.namamat a {
    color:white;
    text-decoration:none;
    font-size: 20px;
}
.materi h2 {
    font-family: 'Bebas Neue', cursive;
    font-weight: 100;
    color: white;
    
}
.submat {
    background-color: #30c1ff;
    width: 300px;
    height: 350px;
    float: left;
    margin-right: 20px;
    margin-left: 30px;
    margin-bottom: 20px;
    margin-top: 40px;
    border-radius: 15px;
}

    .si {
    background-color: #30c1ff;
    width: 1150px;
    height: 168px;
    display: flex;

}

.materiatas h2 {
    font-family: 'Bebas Neue', cursive;
    font-weight: 100;
    font-size: 60px;
    margin-top: 40px;
    margin-left: 220px;
    color: white;
}

.sijudul {
    margin-top:40px;
}

.sijudul h2 {
    font-family: 'Bebas Neue', cursive;
    font-weight: 100;
    font-size: 30px;
}

.sijudul p {
    margin-bottom: 5px;
}

    .si img {
        width: 50%;
        margin: 20px 20px 20px 40px;
    }
    .imgsi {

        width: 200px;

    }
.data span p a {
    color: rgb(0, 0, 0);
}

    .wadah1 {
        position: fixed;
    }
    .wadah2 {
    margin-left: 383px;
}
.wadah1 {
    background-color: #0095ff;
    width: 25%;
    height: 750px;
    
}

/* penugasan */
.penugasan {
    margin-top: 10px;
    margin-bottom: 20px;
    width: 100%;
    background-color: #30c1ff;
    display: flex;
    
}
.penugasan img {
    width: 3%;
    margin-left: 50px;
    margin-top: 5px;
    height: 35px;
}
.penugasan h2 {
    margin-left: 10px;
    line-height: 50px;
    font-family: 'Bebas Neue', cursive;
    font-weight: 100;
    height: 50px;

}

.formu {
    margin-top: 5px;
}

table {
    width: 90%;
    margin-left: 30px;
    margin-top: 30px;
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
    <p><a href="database2.php">DATA MAHASISWA</a></p> 
    <p><a href="">ABSENSI</a></p> 
    <span>
            <p><a href="">PENUGASAN</a></p> 
        </span>
</div>
<div class="logout">
    <a href="logout.php">LOGOUT</a>
</div>
</div>

<div class="wadah2">
    <div class="si">
        <div class="imgsi">
        <img src="img/itats7.png" alt="">
        </div>
        <div class="sijudul">
            <h2>SISTEM INFORMASI</h2>
            <p>Institut Teknologi Adhi Tama Surabaya</p>
            <p>E-Learning 2022</p>
        </div>
        <div class="materiatas">
            <h2>PENUGASAN</h2>
            </div>
    </div>
    <div class="penugasan">
        <img src="img/user.png" alt="">
        <h2>Materi Jurusan SI</h2>
    </div>
    
<form action="" method="post" class="formu">
    <input type="text" name="keyword" class="text" autofocus placeholder="Masukkan pencarian tugas" autocomplete="off">
    <button type="submit" name="cari" class="submitcari">CARI</button>
</form>

<div class="materi">
    <div class="submat">
        <img src="img/web.jpg" alt="">
        <div class="namamat">
        <h2>Web Developer</h2>
        <p>Bagas Cahyo ST, M.Kom</p>
        <a href="tugasweb.php">Masuk</a>
    </div>
</div>
    <div class="submat">
        <img src="img/webb2.jpg" alt="">
        <div class="namamat">
        <h2>Business Analyst</h2>
        <p>Dewi maisaroh ST, M.Kom</p>
        <a href="">Masuk</a>
        </div>
        
    </div>
    <div class="submat">
        <img src="img/web3.jpg" alt="">
        <div class="namamat">
        <h2>Programmer</h2>
        <p>Dwi prayatso ST, M.Kom</p>
        <a href="">Masuk</a>
        
    </div>
    </div>
    <div class="submat">
    <img src="img/web4.jpg" alt="">
        <div class="namamat">
        <h2>Project Manager</h2>
        <p>Andik sahril ST, M.Kom</p>
        <a href="">Masuk</a>
        
    </div>
    </div>
    <div class="submat">
    <img src="img/web5.jpg" alt="">
        <div class="namamat">
        <h2>Network Security</h2>
        <p>Andik sahril ST, M.Kom</p>
        <a href="">Masuk</a>
        
    </div>
</div>
<div class="submat">
        <img src="img/web6.jpg" alt="">
            <div class="namamat">
            <h2>Database Administrator</h2>
            <p>Andik sahril ST, M.Kom</p>
            <a href="">Masuk</a>
            
        </div>

    </div>
</div>
</div>

</body>
</html>