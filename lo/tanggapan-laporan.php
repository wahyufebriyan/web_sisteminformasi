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
    <title>TANGGAPAN ADMIN</title>
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
	<b><i>HALAMAN TANGGAPAN ADMIN</i></b>
	</center>
	<br><br>
	<?php
		include 'koneksi.php';
		
		$id = $_GET['id'];
		$show = mysqli_query($link, "SELECT id, email, judul, laporan, date, alamat, tanggapan from datalaporan where id ='$id'");
		$row = mysqli_fetch_array($show);
					
	?>
	
			<form method="post" action="code-update-laporan.php">
			<table class="table">
			<tr><td>NO
			<input type="text" name="id" value="<?php echo $row['id']; ?>"></td></tr>
			<tr><td>EMAIL
			<input type="text" name="email" value="<?php echo $row['email']; ?>"></td></tr>
			<tr><td>JUDUL
			<input type="text" name="judul" value="<?php echo $row['judul']; ?>"></td></tr>
			<tr><td>LAPORAN
			<input type="text" name="laporan" value="<?php echo $row['laporan']; ?>"></td></tr>
			<tr><td>DATE
			<input type="text" name="date" value="<?php echo $row['date']; ?>"></td></tr>
			<tr><td>ALAMAT
			<input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"></td></tr>
			<tr><td>TANGGAPAN
			<input type="text" name="tanggapan" placeholder="ketik *dalam proses/sudah diproses..." value="<?php echo $row['tanggapan']; ?>"></td></tr>
			
			<td><input type="submit" value="save"></td>
			
			</table>
			</form>
  </div>
</div>
			
</body>
</html>