<?php
include "Conection.php";
$result = mysqli_query($conn, "SELECT Nama_Mahasiswa,NIM,Nama_Prodi,Jurusan,Email FROM tbl_admin
INNER JOIN tbl_prodi ON ID_Matakuliah=ID_Prodi");
?>
<html>
<head>    
    <title>Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>

    <table class="table">

    <tr>
       <th>Nama Mahasiswa</th> <th>NIM</th> <th>Nama Prodi</th> <th>Jurusan</th><th>Email</h><th>Info</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$user_data['Nama_Mahasiswa']."</td>";
		echo "<td>".$user_data['NIM']."</td>";
        echo "<td>".$user_data['Nama_Prodi']."</td>";
        echo "<td>".$user_data['Jurusan']."</td>";
        echo "<td>".$user_data['Email']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[NIM]'>Update</a> | <a href='delete.php?id=$user_data[NIM]'>Delete</a></td></tr>";        
    } 
    ?>
	
    </table>
</body>
</html>
