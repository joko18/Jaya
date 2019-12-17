<?php
include 'Conection.php';

if(isset($_POST['Login'])){
    $User=$_POST['user'];
    $Pass=$_POST['pass'];

    $sql= "SELECT * FROM tbl_user where Nama_User='$User' and password='$Pass'";
    $query = mysqli_query($conn,$sql);
    $valid = mysqli_num_rows($query);
    if($valid > 0 ){
    session_start();
    $arrayData = (mysqli_fetch_array($query));
    $_SESSION['ID'] = $arrayData['ID_User'];
    
    header("location:Admin.php");

    
        
    }
}

?>
    