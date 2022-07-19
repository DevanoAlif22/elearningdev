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
    height: 2150px;
}
body {
    background-color: white;
    
}

.sekolah h2 {
    margin-top: 45px;
    margin-left: 30px;
    margin-right: 30px;
    margin-bottom: 5px;
    font-family: 'Bebas Neue', cursive;
    font-weight: 100;
    font-size: 30px;
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

.sekolah p {
    margin-left: 30px;
    
    font-family: 'Prompt', sans-serif;
}

.dosen {
    width: 95%;
    height: 200px;
    border: 0.5px solid black;
    margin-bottom: 30px;
    margin-left: 20px;
    display:flex;
    
}
.dosen2 {
    width: 95%;
    height: 200px;
    border: 0.5px solid black;
    margin-bottom: 30px;
    margin-left: 20px;
    display: flex;
    justify-content: space-between;
    
}

.dosen2 .dos1 {

    margin-left: 50px;
}
.dosen2 .dos2 {

}

.dos1 img {
    width: 150px;
    height: 200px;
    background-color: black;
}
.dos2 {
    margin-top: 60px;
    margin-left: 50px;
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
                <span>
                    <p><a href="jurusan.php">TENTANG JURUSAN</a></p> 
                </span>
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
            <h2>SISTEM INFORMASI</h2>
            <p>FAKULTAS TEKNIK ELEKTRO dan TEKNOLOGI INFORMASI</p>
        </div>
        <div class="rangking">
            <div class="rangking2">
            <p>AKREDITASI</p>
            <h2>B</h2>
            <p>"Sangat Baik"</p>
            </div>
        </div>
    </div>

    <div class="bagian2">

        <div class="abang">
        <img src="img/abang.png" alt="">
        </div>

        <div class="profil">
        <h2>SISTEM INFORMASI</h2>
        <p>Jurusan Sistem Informasi merupakan bidang keilmuan yang menggabungkan ilmu komputer dengan bisnis dan manajemen. Di prodi ini mahasiswa akan belajar gimana mengidentifikasi kebutuhan dan proses bisnis perusahaan berdasarkan data-data yang dimiliki perusahan, kemudian merancang sistem yang sesuai dengan kebutuhan perusahaan.</p>
        <br></br>
        <p>Jadi, selain belajar teknik pemrograman, Mahasiswa juga dituntut untuk mempelajari proses bisnis yang ada di perusahaan. Oleh karena itu, lulusan Prodi Sistem Informasi diharapkan dapat mengembangkan sebuah sistem pengolahan data dari berbagai sumber untuk dapat disajikan sebagai informasi yang bermanfaat bagi perusahaan.</p>
        </div>
        
    </div>

    <div class="next">
        <h2>Profil Dosen</h2>
        <div class="dosen">
            <div class="dos1">
                <img src="img/dos1.jpeg" alt="">
            </div>
            <div class="dos2">
            <p> Dr. Dian Puspita Hapsari, S.Kom.,M.Kom. </p>
            <p> NIP : 153076 </p>
            <p> E-mail : –</p>
            <p> Bidang Keilmuan : –</p>
            </div>
        </div>
        <div class="dosen2">
            <div class="dos2">
                <p> Budanis Dwi Meilani, S.T., M.Kom. </p>
                <p> NIP : 981090 </p>
                <p> E-mail : budanis@itats.ac.id </p>
                <p> Bidang Keilmuan : Algoritma & Pemrograman, Rekayasa Perangkat Lunak, Data Mining, Sistem Pendukung Keputusan </p>
            </div>
            <div class="dos1">
                <img src="img/dos2.jpg" alt="">
            </div>
        </div>
        <div class="dosen">
            <div class="dos1">
                <img src="img/dos3.jpg" alt="">
            </div>
            <div class="dos2">
            <p> Sulistyowati, S.T., M.Kom. </p>
            <p> NIP : 001118 </p>
            <p> E-mail : aryis77@gmail.com </p>
            <p> Bidang Keilmuan : Rekayasa Perangkat Lunak, Struktur Data, Algoritma & Pemrograman, Sistem Pendukung Keputusan </p>
            </div>
        </div>
        <div class="dosen2">
            <div class="dos2">
                <p> Shah Khadafi, S.Kom., M.Kom. </p>
                <p> NIP : 112072 </p>
                <p> E-mail : – </p>
                <p> Bidang Keilmuan : Jaringan Komputer </p>
            </div>
            <div class="dos1">
                <img src="img/dos4.jpg" alt="">
            </div>
        </div>
        <div class="dosen">
            <div class="dos1">
                <img src="img/dos5.jpg" alt="">
            </div>
            <div class="dos2">
            <p> Ruli Utami, S.Kom., M.Kom. </p>
            <p> NIP : 112068 </p>
            <p> E-mail : ruli.utami@itats.ac.id </p> 
            <p> Bidang Keilmuan : Rekayasa Proses Bisnis, Teknik Peramalan, Sistem Pendukung Keputusan, Manajemen Sistem Informasi</p>
            </div>
        </div>
        <div class="dosen2">
            <div class="dos2">
            <p> Isa Albanna, S.Si., M.Si. </p>
            <p> NIP : 143026 </p>
            <p> E-mail : – </p>
            <p> Bidang Keilmuan : – </p>
            </div>
            <div class="dos1">
                <img src="img/dos6.jpg" alt="">
            </div>
        </div>
        <div class="dosen">
            <div class="dos1">
                <img src="img/dos7.jpg" alt="">
            </div>
            <div class="dos2">
            <p>Anwar Sodik, S.Kom., M.T.</p>
            <p>NIP : 153106</p>
            <p>E-mail : anwar@itats.ac.id</p> 
            <p> Bidang Keilmuan : Interaksi Manusia Komputer, E-Business</p>
            </div>
        </div>
        <div class="dosen2">
            <div class="dos2">
            <p> Anggi Yhurinda Perdana Putri, S.Kom., M.Kom.</p>
            <p> NIP : 183144</p>
            <p> E-mail : anggi@itats.ac.id</p> 
            <p> Bidang Keilmuan : Data Warehause, Data Mining, Riset Operasi</p>
            </div>
            <div class="dos1">
                <img src="img/dos8.jpg" alt="">
            </div>
        </div>
        <div class="dosen">
            <div class="dos1">
                <img src="img/dos9.jpg" alt="">
            </div>
            <div class="dos2">
            <p> Adib Pakarbudi S.Kom., M.Kom.</p>
            <p> NIP : 193154</p>
            <p> E-mail : adib@itats.ac.id</p> 
            <p>Bidang Keilmuan : Tata Kelola & Audit SI/TI, Manajemen Sistem Informasi, Information Technology Transfer (Innovation, Adoption, Acceptance)</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>