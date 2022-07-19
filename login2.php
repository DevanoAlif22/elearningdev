<?php 
//jalankan dulu session
session_start();
require 'functions.php';


//cek dulu cokie nya sebelum cek session
if ( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  //cari data mahasiswa lewat id ini
  $result = mysqli_query($conn, "SELECT email FROM user WHERE id = $id");
  $row =mysqli_fetch_assoc($result);

  // cek cookie dan email
  if ( $key === hash('sha256', $row['email']) ) {
    //jika benar masuk ke session
   $_SESSION['login'] = true;
  }
}

//apabia sudah login maka langsung ke index
if ( isset ($_SESSION["login"])) {
  header("Location: index.php");
  exit;

}
//Cek apakah tombol submit sudah tekan atau belum
if ( isset($_POST["submit2"])) {
    
    // buat variabel untuk setiap data post
    $email = $_POST["email"];
    $password = $_POST["pass"];

    //koneksikan ke database, ambil data dari user dimana email sama dengan email post
    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    // jika result benar
    if ( mysqli_num_rows($result) === 1) {

      //cek password
      $row = mysqli_fetch_assoc($result);
      //jika password sama dengan hash (password acak)
      if (password_verify($password, $row["pass"]) )  {
        //Set session
        $_SESSION["login"] = true;

        //jika berhasil dan ceklis remember me
        if ( isset($_POST['remember'])) {

          //kita buat cookie sederhana
          //masukan name, value, dan time
          setcookie('id', $row['id'], time()+60);
          // kita enkripsi dengan hash lagi
          setcookie('key', hash('sha256', $row['email']), time()+60);
        }
         header("Location: index.php");
         exit;
      }
    }
    $error = true;
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link href="login2.css" rel="stylesheet">
    <style>
      html, body {
    height: 100%;
    background-image: url('img/itatss2.png');
    background-position: center;
    background-size: cover;
}
        .flec {
            display: flex;
        }
        
        .flec a {
            margin-left: 20px;
        }
        .flec {
            display: flex;
        }
    </style>
  </head>
  <body>

        <?php if( isset($error)) : ?>
            <script>
              alert('gagal deck');
            </script>
        <?php endif; ?>
          <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">L O G I N</h1>
                <p>Institut Teknologi Adhi Tama Surabaya</p>
            </div>
            <div class="card-text">
            <form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off" autofocus>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
<div class="flec">
  <button type="submit" name="submit2" class="btn btn-primary">Login</button>
</form>
<a href="daftar.php" class="btn btn-primary">Daftar</a>
</div>
            </div>
        </div>
   </div>
  </body>
</html>