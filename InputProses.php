<?php
      include "Conection1.php";
      if(isset($_POST['edit'])){
        $Nama = $_POST['nama'];
        $NIM = $_POST['nim'];
        $email = $_POST['email'];
        $ID=$_POST['jurusan'];
        $sql  = "INSERT INTO tbl_admin (Nama_Mahasiswa, NIM, Email, ID_Matakuliah) VALUES ('$Nama', '$NIM', '$email', '$ID')";
        $query  = mysqli_query($conn, $sql);
      if ($query) {
        echo "Input berhasil";
      } else {
        echo "Input gagal";
      }
      mysqli_close($conn);
    }
    ?>