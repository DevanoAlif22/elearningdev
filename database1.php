<?php 
//CARA PERTAMA UNTUK MENGAMBIL DATA DATABASE KE HTML (belum efektif)
//Menggunakan variable agar lebih efetif
//Konesi ke database dengan function mysqli_connect
// urutan host,user,pass,database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//Ambil data dari table mahasiswa (query)
// urutannya koneksi database dan querynya mau apa contoh ini ambil semua
// Berhasil atau gagal tidak ada pemberitahuan hanya true dan false
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//Jika ingin menampilkan bila ada error maka berikut
if (!$result) {
    echo mysqli_error($conn);
}

// Setelah koneksi dan query untuk ambil table
// sekarang ambil data dari table tersebut menggunakan fetch
// Ada 4 cara :

// mysqli_fetch_row() mengembalikan array numerik
// $mhs = mysqli_fetch_row ($result);
// var_dump($mhs);

// mysqli_fetch_assoc() mengembalikan array assoc
// $mhs = mysqli_fetch_assoc ($result);
// var_dump($mhs);


// mysqli_fetch_array() mengembalikan array assoc dan numerik
// $mhs = mysqli_fetch_array ($result);
// var_dump($mhs);


// mysqli_fetch_object() mengembalikan object
// $mhs = mysqli_fetch_object ($result);
// var_dump($mhs-> );

// Terakhir untuk menampilkan semua kita akan memakai looping while
// <?php while ($mhs = mysqli_fetch_assoc ($result)): 
//  echo $mhs["nama"]
//  <?php endwhile; 




?>

<!DOCTYPE html>
<html lang=”en”>
<head>
<meta charset=”UTF-8″>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
<meta http-equiv=”X-UA-Compatible” content=”ie=edge”> 
<title>Database</title>
<style>
    img {
        width: 50px;
    }
</style>
</head>
<body>

    <h1>DATA MAHASISWA</h1>
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
    <?php while ($mhs = mysqli_fetch_assoc($result)) :?>
        
        
        <tr>
            <td><?php echo $i ?></td>
            <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
            <td><img src="img/<?php echo $mhs["gambar"] ?>" alt=""></td>
            <td><?php echo $mhs["nrp"]?></td>
            <td><?php echo $mhs["nama"]?></td>
            <td><?php echo $mhs["email"]?></td>
            <td><?php echo $mhs["jurusan"]?></td>

        </tr>
<?php 
    $i++;
?>
    <?php endwhile; ?>
    </table>

</body>
</html>