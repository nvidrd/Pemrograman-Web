<?php
require 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
    "DELETE FROM reviews2 WHERE id = '$id'");
    if($result){
        echo" 
        <script> 
        alert('Data berhasil dihapus!');
        document.location.href = 'adm_review2.php';
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

