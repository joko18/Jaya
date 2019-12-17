<?php
include "Conection1.php";

if( isset($_GET['id']) ){
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_admin where NIM=$id";
    $query = mysqli_query($conn, $sql);

    if ( $query ){
        header ('Location: Admin.php?shapus=berhasil');
    }else{
        header ('Location: Admin.php.php?shapus=Gagal');
    }
}
?>
