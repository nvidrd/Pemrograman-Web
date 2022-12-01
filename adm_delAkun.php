<?php
require 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
    "DELETE FROM akun WHERE id = '$id'");
    if($result){
        echo" 
        <script> 
        alert('Akun berhasil dihapus');
        document.location.href = 'adm_akun.php';
        </script>
    ";
    }
    else {
        echo" 
            <script> 
            alert('Gagal menghapus akun!');
            </script>
        ";
    }
}
