<?php 
require 'proses_koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM feedback WHERE id = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'user_menu.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'user_menu_feedback.php';
        </script>
    ";
}



?>