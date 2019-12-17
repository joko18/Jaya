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
<br>
<br>
<a href="Input.php?" class="btn btn-primary btn-lg">Input Data Maha sisiwa</a>
<br>
<br>
    <table class="table table-bordered">
    <thead class="thead-light">
        <tr>
        <th>Nama Mahasiswa</th> <th>NIM</th> <th>Nama Prodi</th> <th>Jurusan</th><th>Email</h><th>Info</th>
        </tr>
    </thead>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
		    echo "<td>".$user_data['Nama_Mahasiswa']."</td>";
		    echo "<td>".$user_data['NIM']."</td>";
            echo "<td>".$user_data['Nama_Prodi']."</td>";
            echo "<td>".$user_data['Jurusan']."</td>";
            echo "<td>".$user_data['Email']."</td>"; 
            echo "<td><a href='Edit.php?id=$user_data[NIM]'class='btn btn-warning btn-sm'>Update</a> 
             <a href='Delete.php? id=$user_data[NIM]' class='btn btn-danger btn-sm' >Delete</a></td></tr>";        
        } 
        ?>
	
    </table>
</body>
</html>

