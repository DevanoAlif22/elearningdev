<?php 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//kedua buat function query dan masukan string yang sudah di buat
//ketiga buat proses mengambil datanya disini
//ke empat ambil semua data pengulangn dari $row ke $rows
//yang sudah menyiapkan array kosong
//terakhir kembalikan datanya dengan return
function anjay($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>


<?php 
//Function untuk mengambil data dari html ke database (INSERT)
function tambah($data) {

    global $conn;
    //html special untuk melindungi dari hengker
    $nrp = htmlspecialchars($data["NRP"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

// Masukkan querynya
    $query = "INSERT INTO mahasiswa
    VALUES
('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";

mysqli_query($conn, $query);
// Kita akan membuat function ini akan mengembalikan angka dari myqli_affected_rows

    return mysqli_affected_rows($conn);
    
}

?>


<?php 
//Function untuk mengupulkan tugas materi web
function web($data) {

    global $conn;
    //html special untuk melindungi dari hengker
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $materi = htmlspecialchars($data["materi"]);
    $tanggal = htmlspecialchars($data["tanggal"]);

    //upload file
    $file = upload();
    if ( !$file) {
        // jika gagal maka insert tidak di jalankan
        return false;
    }

// Masukkan querynya
    $query = "INSERT INTO webdev
    VALUES
('$nama', '$npm', '$materi', '$tanggal', '$file', '')";

mysqli_query($conn, $query);
// Kita akan membuat function ini akan mengembalikan angka dari myqli_affected_rows

    return mysqli_affected_rows($conn);
    
}


    function upload() {
        // isi dulu file
        $namafile = $_FILES['file']['name'];
        $ukuranfile = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
        $tmpname = $_FILES['file']['tmp_name'];

        // cek apakah tidak ada gambar yang di upload
        if ( $error === 4 ) {
            echo "
            <script>
                alert('PILIH GAMBAR TERLEBIH DAHULU!');
            </script> ";
            return false;
        }
        // cek file yang di upload
        $extensivalid = ['jpg', 'jpeg', 'png', 'pdf', 'docx'];
        $extensifile = explode('.', $namafile);
        $extensifile = strtolower(end($extensifile));
        if ( !in_array($extensifile, $extensivalid)) {
            echo "
            <script>
                alert('YANG ANDA UPLOAD SALAH!');
            </script> ";
            return false;
        }
        
        //kita batasi ukurannya
        if ( $ukuranfile > 10000000) {
            echo "
            <script>
                alert('UKURAN FILE TERLALU BESAR!');
            </script> ";
            return false;
            
        }
        // lolos pengeceka file di upload
        move_uploaded_file($tmpname, 'img/' . $namafile);
        return $namafile;

    }
?>





<?php 
//hapus

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
    
}




?>
<?php 
//hapus

function hapusweb($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM webdev WHERE id = $id");
    return mysqli_affected_rows($conn);
    
}




?>


<?php 
//buat fungsi ubah
function ubah($data) {

    global $conn;
    //html special untuk melindungi dari hengker
    //tambahkan id untuk funsi nanti
    $id = $data["id"];
    $nrp = htmlspecialchars($data["NRP"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

// Masukkan querynya
    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar' 
                WHERE id = '$id'
                ";

mysqli_query($conn, $query);
// Kita akan membuat function ini akan mengembalikan angka dari myqli_affected_rows

    return mysqli_affected_rows($conn);
    
}







?>
<?php 
//Buat function untuk cari
    function cari($keyword) {
        //variable baru terserah
        //like untuk mencari tidak harus lengkap dengan menambahkan %
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
        ";

        return anjay($query); 
}
?>

<?php 
// function registrasi inputan data dari daftar
function daftar($data) {
    $email = ($data["email"]);
    $password = ($data["pass"]);
    $password2 = ($data["pass2"]);
    
    // email sudah ada apa belum 
    global $conn;
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if ( mysqli_fetch_assoc($result)) {
        echo "
        <script>
            alert('EMAIL YANG ANDA MASUKKAN SUDAH TERDAFTAR!');
        </script> ";
        return false;
    }
    //cek konfirmasi password
    if ( $password !== $password2) {
        echo " <script>
        alert('Konfirmasi Password tidak sesuai');
        </script>";
        //kita berhentikan fungsi nya agar tidak masuk ke insert
        return false;
    }
    //Enkripsi passwordnya 
    global $conn;
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO user VALUES('', '$email', '$password')");
        return mysqli_affected_rows($conn);
}
?>