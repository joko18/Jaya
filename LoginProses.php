<?php
include("Conection.php");

if(isset($_POST['Login'])){
    $User=$_POST['user'];
    $Pass=$_POST['pass'];

    $sql= "SELECT * FROM tbl_user where ID_User='$User' and Password='$Pass'";
    $query = mysqli_query($conn,$sql);
    $arrayData = (msqli_fetch_array($query));
    session_start();
    $_SESSION['ID'] = $arrayData[' ID_User '];

    if ($arrayData[' Jabata '] = "Dosen"){
            header("location:Dosen.php");
    }else{

            header("location=Admin.php");


        }
}
    

?>