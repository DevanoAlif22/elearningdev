<?php 
//jangan lupa session startq
session_start();
//jika gak ada session login
if ( !isset($_SESSION["login"])) {
    //maka tendang ke login
    header("Location: login2.php");
    exit;
}


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
    if ( web($_POST) > 0 ) {
    echo "
        <script>
            alert('DATA BERHASIL DI TAMBAHKAN!');
            document.location.href = 'tugasweb.php';
        </script> ";
    } else {
        echo "
            <script>
                alert('DATA GAGAL DI TAMBAHKAN!');
                document.location.href = 'tugasweb.php';
            </script> ";
    }
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
    width: 100%;
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

.satu {
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

.penugasan h2 span {
    color: white;
}

.formu {
    margin-top: 5px;
}

table {
    width: 90%;
    margin-left: 30px;
    margin-top: 30px;
}

.tambah {
    margin-top: 30px;
}

.form  {
    margin-left: 35px;

}

.dua a {
    color:white;
    text-decoration: none;

}

.dua {
    margin-top: 15px;
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
            <p><a href="tugas.php">PENUGASAN</a></p> 
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
        <div class="satu">
        <img src="img/user.png" alt="">
        <h2>File Tugas Siswa   >   <span> Web Developer </span> > <span>Kumpulkan Tugas</span></h2>
        </div>
        <div class="dua">
            <a href="tugasweb.php">Kembali</a>
        </div>
    </div>
    
    <div class="form">
    <form action="" method="post" enctype="multipart/form-data">
        <p> Nama : </p>
        <input type="text" name="nama" class="input" required>
        <p> NPM : </p>
        <input type="text" name="npm" class="input" required>
        <p> Keterangan Materi : </p>
        <input type="text" name="materi" class="input" required>
        <p> Tanggal : </p>
        <input type="text" name="tanggal" class="input" required>
        <p> File : </p>
        <input type="file" name="file" class="input" required>
        <br></br>
        <button type="submit" class="submit" name="submit">TAMBAH</button>
    </form>
    </div>
</div>

</div>

</body>
</html>