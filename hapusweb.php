<?php 

$id = $_GET["id"];
require 'functions.php';


if ( hapusweb($id) > 0){
    echo "
        <script>
            alert('DATA BERHASIL DI HAPUS!');
            document.location.href = 'tugasweb.php';
        </script> ";
} else {
    echo "
        <script>
            alert('DATA GAGAL DI HAPUS!');
            document.location.href = 'tugasweb.php';
        </script> ";
}
?>