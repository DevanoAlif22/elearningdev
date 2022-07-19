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
        position: fixed;
    }
    .wadah2 {
    margin-left: 385px;
}
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

<div class="wadah2">
    <h1>DATA MAHASISWA</h1>
    <div class="tambah">
        <a href="tambah.php">Tambah Data Mahasiswa</a>
        <a href="database2.php">Mulai Ulang</a>
    </div>
    <br></br>


    <form action="" method="post" class="formu">
        <input type="text" name="keyword" class="text" autofocus placeholder="Masukkan data mahasiswa" autocomplete="off">
        <button type="submit" name="cari" class="submitcari">CARI</button>
    </form>
    
    
    
    <table border="1" cellpadding="10" cellspacing="0">
    
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        
        <?php         
//untuk id akan bertambah 1 terus dengan berikut :
$i = 1;
?>      
    <?php foreach($mahasiswa as $ros) :?>
        <tr class="bawah">
            <td><?php echo $i ?></td>
            <!-- untuk mengaktifkan hapus lakukan berikut dan buat file hapus -->
            <td><a href="ubah.php?id=<?php echo $ros["id"]?> ">Ubah</a> | <a href="hapus.php?id=<?php echo $ros["id"]?>">Hapus</a></td>
            
            
            <td><img src="img/<?php echo $ros["gambar"] ?>" alt=""></td>
            <td><?php echo $ros["nrp"]?></td>
            <td><?php echo $ros["nama"]?></td>
            <td><?php echo $ros["email"]?></td>
            <td><?php echo $ros["jurusan"]?></td>

        </tr>
<?php 
    $i++;
    ?>
    <?php endforeach;?>
    </table>
    </div>
</div>

</body>
</html>