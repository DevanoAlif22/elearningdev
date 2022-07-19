<?php 

require 'functions.php';

$id = $_GET["id"];


if ( hapus($id) > 0){
    echo "
        <script>
            alert('DATA BERHASIL DI HAPUS!');
            document.location.href = 'database2.php';
        </script> ";
} else {
    echo "
        <script>
            alert('DATA GAGAL DI HAPUS!');
            document.location.href = 'database2.php';
        </script> ";
}
?>