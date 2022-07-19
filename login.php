<?php 
//Cek apakah tombol submit sudah tekan atau belum
if ( isset($_POST["submit2"])) {
    
    // cek username & password
    if ($_POST["email"] == "devanorama123@gmail.com" && $_POST["pass"] == "sawocangkring") {
        header("Location: tentang.php ");
        exit;
    } else {
        $error = true;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST LOGIN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
<style>
    h3 {
        color: red;
        margin-left: 80px;
    }
    * {
        padding: 0;
        margin: 0;
        font-family: 'Patrick Hand', cursive;
    }
    
    body {
        background-color: #e8f6ff;
        }
        .container {
            background-color: #00e1ff;
            margin: auto;
            width: 350px;
            height: 250px;
            margin-top: 15%;
            border-radius: 10px;
          
        }
        .container h4 {
            margin-left: 80px;
            margin-bottom: 20px;
        }
        .wrapper p {
            margin-bottom: 20px;
            margin-left: 20px;
            
        }
        .nama2 {
            margin-left: 28px;
        }

        .submit {
            width: 150px;
            height: 30px;
            margin-left: 80px;
            background-color: white;
            border: 0 solid;
            border-radius: 5px;
        }
        .submit2 {
            width: 150px;
            height: 30px;
            margin-left: 80px;
            background-color: white;
            border: 0 solid;
            border-radius: 5px;
        }
        .email {
            margin-left: 30px;
            width: 150px;
        }
        .pass {
            margin-left: 10px;
            width: 150px;
        }

    </style>
</head>
<body>
    <!-- Form akan di kirim ke latihan4 -->
    
    <div class="container">
        <h4>LOGIN AKUN SMKN 3 BUDURAN</h4>
        <div class="wrapper">
            <form action="" method="post">
                <p> Email : <input type="text"  name="email" class="email"> </p>
                <p> Password : <input type="text" name="pass" class="pass"> </p>
                <p><button type="submit" name="submit2" class="submit2">LOGIN</button></p>
                
            </form>
            <form action="latihan3.php">
                <p><button type="submit" name="submit2" class="submit2">DAFTAR</button></p>
                
            </form>
            <?php if( isset($error)) :?>
                <h3>username/password salah!</h3>
                <?php endif; ?>
        </div>
    </div>
</body>
</html>