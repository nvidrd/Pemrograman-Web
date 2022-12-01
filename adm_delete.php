<?php
require 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
    "DELETE FROM produk WHERE id = '$id'");
    if($result){
        echo" 
        <script> 
        alert('Produk berhasil dihapus');
        document.location.href = 'adm_panel.php';
        </script>
    ";
    }
    else {
        echo" 
            <script> 
            alert('Gagal menghapus produk!t');
            </script>
        ";
    }
}

require 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db,
    "DELETE FROM produk WHERE id = '$id'");
    if($result){
        echo" 
        <script> 
        alert('Produk berhasil dihapus');
        document.location.href = 'adm_panel.php';
        </script>
    ";
    }
    else {
        echo" 
            <script> 
            alert('Gagal menghapus produk!t');
            </script>
        ";
    }
}
