<?php 
//jangan lupa session startq
session_start();
//jika gak ada session login
if ( !isset($_SESSION["login"])) {
    //maka tendang ke login
    header("Location: login2.php");
    exit;
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
.next {
    background-color: white;
    width: 1100;
    height: 1000px;
}
body {
    background-color: white;
    
}
.next h2 {
    color: black;
    align-items: center;
    text-align: center;
    font-family: 'Prompt', sans-serif;
    font-size: 25px;
    font-weight: 100;
    margin-bottom: 30px;
}


body {
    background-color: #d9f4ff;
}

.wadah1 {
    position: fixed;
}
.wadah2 {
    margin-left: 385px;
}

.jur1 {
    width: 85%;
    height: 150px;
    background-color: #fcfcfc;
    margin-bottom: 20px;
    border-radius: 10px;
    margin-left: 90px;
    border: 0.5px solid black;
    display:flex;
    justify-content: space-between;
    
}

.bag2 {
    background-color: #a6dbff;
    width: 200px;
    height: 150px;
    margin-right: 30px
}
.semua a {
    margin-left:40%;
    color: black;
    background-color: #a6dbff;
    text-decoration: none;
    padding: 10px 50px; 
    border-radius: 30px;
}
.bag2 h2 {
    margin-top: 50px;
    color: rgb(255, 149, 20);
    font-family: 'Bebas Neue', cursive;
}
.jurusan h3 {
    font-family: 'Bebas Neue', cursive;
    font-weight: 100;
    font-size: 25px;
    margin-left: 30px;
    margin-top: 10px;
}

.jurusan a {
    font-family: 'Prompt', sans-serif;
    color: white;
    background-color: #3db2ff;
    padding: 10px 30px; 
    border-radius: 5px;
    margin-left: 30px;
    text-decoration: none;
}
.jurusan span h3 {
    font-family: 'Bebas Neue', cursive;
    font-weight: 100;
    margin-left: 30px;
    color: #999999;
    margin-bottom: 20px
}

.jur2 {
    display:flex;
    justify-content: space-between;
    width: 85%;
    height: 150px;
    background-color: #fcfcfc;
    margin-left: 90px;
    margin-bottom: 20px;
    border-radius: 10px;
    border: 0.5px solid black;
    
}
.jur3 {
    width: 85%;
    margin-left: 90px;
    height: 150px;
    background-color: #fcfcfc;
    margin-bottom: 20px;
    border-radius: 10px;
    border: 0.5px solid black;
    display:flex;
    justify-content: space-between;
    
}
.jur4 {
    width: 85%;
    display:flex;
    height: 150px;
    margin-left: 90px;
    background-color: #fcfcfc;
    margin-bottom: 20px;
    border-radius: 10px;
    border: 0.5px solid black;
    justify-content: space-between;
    
}
.jur5 {
    width: 85%;
    height: 150px;
    margin-left: 90px;
    background-color: #fcfcfc;
    display:flex;
    margin-bottom: 20px;
    border-radius: 10px;
    border: 0.5px solid black;
    justify-content: space-between;
    
}

.wadah1 {
    background-color: #0095ff;
    width: 25%;
    height: 750px;

}
.header {
    background-image: url('img/itats2.png');
    background-position: center;
    background-size: cover;
    width: 1145px;
    height: 168px;
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
                <span>
                    <p><a href="index.php">TENTANG SEKOLAH</a></p> 
                </span>
                <p><a href="jurusan.php">TENTANG JURUSAN</a></p> 
                <p><a href="database2.php">DATA MAHASISWA</a></p> 
                <p><a href="">ABSENSI</a></p> 
                <p><a href="tugas.php">PENUGASAN</a></p> 
</div>
<div class="logout">
    <a href="logout.php">LOGOUT</a>
</div>
</div>

<div class="wadah2">

    <div class="header"></div>
    <div class="itats">
        <div class="logo">
            <img src="img/itats7.png" alt="">
        </div>
        <div class="sekolah">
            <h2>Institut Teknologi Adhi Tama Surabaya (ITATS)</h2>
            <p>Jl. Arif Rahman Hakim, Kota Surabaya, Jawa Timur</p>
            <span>
            <p>Akreditasi C     Tipe Swasta     Status PTS</p>      
            </span>
        </div>
        <div class="rangking">
            <div class="rangking2">
            <p>Rangking</p>
            <h2>11.607</h2>
            <p>WEBOMETRICS</p>
            </div>
        </div>
    </div>

    <div class="bagian2">

        <div class="abang">
        <img src="img/abang.png" alt="">
        </div>

        <div class="profil">
        <h2>Profil Kampus</h2>
        <p>Institut Teknologi Adhi Tama Surabaya atau dikenal dengan nama ITATS merupakan perguruan tinggi teknik terlengkap dan berkualitas di Jawa Timur. Berdiri sejak tahun 1963 yang saat itu bernama Akademi Teknik Surabaya (ATS), kemudian tahun 1984 menjadi Institut Teknologi Adhi Tama Surabaya (ITATS).</p>
        <br></br>
        <p>Memiliki kampus seluas 6 hektar berada di Jalan Arief Rahman Hakim No. 100 Surabaya. Jumlah mahasiswa sekitar 5.000, berasal Propinsi Jawa Timur 87%, sisanya berasal dari berbagai propinsi di Indonesia mulai dari Aceh hingga Papua, bahkan dari luar negeri, yaitu dari Timor Leste, Malaysia dan Canada.</p>
        </div>
        
    </div>

    <div class="next">
        <h2>Daftar Jurusan</h2>
        <div class="jurusan">
            <div class="jur1">
                    <div class="bag1">
                <h3>Sistem Informasi</h3>
                <span>
                    <h3>Fakultas Teknologi Informasi</h3>
                </span>
                <a href="">Detail</a>
                    </div>
                    <div class="bag2">
                        <h2>Akreditasi B</h2>
                        
                    </div>
            </div>
            
            <div class="jur2">
                <div class="bag1">
                <h3>Teknik Lingkungan</h3>
                <span>
                    <h3>Fakultas Teknik Sipil Dan Perencanaan</h3>
                    
                </span>
                <a href="">Detail</a>
                </div>
                
                <div class="bag2">
                    <h2>Akreditasi B</h2>
                </div>
            </div>
            <div class="jur3">
                <div class="bag1">
                <h3>Arsitektur</h3>
                <span>
                    <h3>Fakultas Teknik Sipil Dan Perencanaan</h3>
                    
                </span>
                <a href="">Detail</a>
            </div>
            <div class="bag2">
                <h2>Akreditasi B</h2>
                
            </div>
            </div>
            <div class="jur4">
                <div class="bag1">
                <h3>Teknik Elektro</h3>
                <span>
                    <h3>Fakultas Teknologi Industri</h3>
                    
                </span>
                
                <a href="">Detail</a>
            </div>
            <div class="bag2">
                <h2>Akreditasi B</h2>
                
            </div>
        </div>
            <div class="jur5">
                <div class="bag1">
                <h3>Teknik Kimia</h3>
                <span>
                    <h3> Fakultas Teknologi Industri</h3>
                    
                    </s
                    pan>
                    <a href="">Detail</a>
                    </div>
                    <div class="bag2">
                        <h2>Akreditasi B</h2>

                    </div>
                </div>
            </div>
            <div class="semua">
            <a href="">Lihat Selengkapnya</a>
            </div>
    </div>
</div>

</body>
</html>