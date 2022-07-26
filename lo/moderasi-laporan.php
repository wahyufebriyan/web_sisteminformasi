 <?php

    session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MODERASI LAPORAN</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>
</head>
<body>
<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
			<div class="one"></div>
			<div class="two"></div>
			<div class="three"></div>
    </div>
  
    <div class="top_menu">
	
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="halaman-admin.php" class="active">
          <span class="title">LAPORAN</span>
          </a></li>
        <li><a href="logout.php">
          <span class="title">LOGOUT</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container">
    <div class="item">
	<br><br>
	<center>
	<b><i>HALAMAN MODERASI LAPORAN</i></b>
	</center>
	<br><br>
	
	<table class= "table">
		 <thead>
			<th>NO</th>
			<th>EMAIL</th>
			<th>JUDUL</th>
			<th>LAPORAN</th>
			<th>TANGGAL</th>
			<th>ALAMAT</th>
			<th>TANGGAPAN</th>
			<th>ACTION</th>
		</thead>
			<?php
				
				include 'koneksi.php';
				$show = mysqli_query($link, "SELECT * from datalaporan");
			
				while($row = mysqli_fetch_array($show)){
					 echo"<tbody>
					
						<tr>
						<td>".$row['id']."</td>
						<td>".$row['email']."</td>
						<td>".$row['judul']."</td>
						<td>".$row['laporan']."</td>
						<td>".$row['date']."</td>
						<td>".$row['alamat']."</td>
						<td>".$row['tanggapan']."</td>
						<td> <a href = 'code-hapus-laporan.php?id=".$row['id']."' > HAPUS</a></td>
						</tr>

						</tbody>";
				}
			?>
	</table>
	
  </div>
</div>
			
</body>
</html>