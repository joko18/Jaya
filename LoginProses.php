<?php
include "Conection.php";

if(isset($_POST['Login'])){
    $User=$_POST['user'];
    $Pass=$_POST['pass'];

    $sql= "SELECT * FROM tbl_User where ID_User='$User' and Password='$Pass'";
    $query = mysqli_query($conn,$sql);
    $arrayData = (mysqli_fetch_array($query));
    session_start();
    $_SESSION['ID'] = $arrayData['ID_User'];

    if ($arrayData['Jabatan'] == "Dosen"){
            header("location:Dosen.php");
    }else{

            header("location=Admin.php");


        }
        
    }
    