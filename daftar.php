<?php 
//panggil dulu $conn di file functions
require 'functions.php';
//Jika tombol daftar sudah di klik
if ( isset($_POST["daftar"])) {
    if ( daftar($_POST) > 0) {
      echo "
      <script>
          alert('USER BARU BERHASIL DI TAMBAHKAN!');
          document.location.href = 'login2.php';
      </script> ";
    } else {
      echo mysqli_error($conn);
    }
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
    .login-form {
    width: 380px;
    height: 500px;
    padding: 20px;
    background-color: white;
    border-radius: 10px !important;
}
    </style>
  </head>
  <body>
   <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">D A F T A R</h1>
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
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" name="pass2" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
<div class="flec">
  <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
</form>
<a href="login2.php" class="btn btn-primary">Login</a>
</div>
            </div>
        </div>
   </div>
  </body>
</html>