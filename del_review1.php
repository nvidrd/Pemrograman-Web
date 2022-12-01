<?php
require 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
    "DELETE FROM reviews WHERE id = '$id'");
    if($result){
        echo" 
        <script> 
        alert('Data berhasil dihapus!');
        document.location.href = 'adm_review1.php';
        </script>
    ";
    }
    else {
        echo" 
            <script> 
            alert('Gagal Menghapus Data!');
            </script>
        ";
    }
}
?>

