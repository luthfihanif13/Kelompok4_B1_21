<?php 
require 'proses_koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM komik WHERE id = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'admin_crud_komik.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'admin_crud_komik.php';
        </script>
    ";
}


?>