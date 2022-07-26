<?php

    session_start();
	include 'code-upload.php';

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORMULIR</title>
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
      <div class="logoo"> SYSTEM INFORMASI LAYANAN PENGADUAN COVID-19 WILAYAH KOTA TANGERANG </div>
	 
	  <img src="images/logo2.png" alt="" height="115px" width="115px">
    </div>
  </div>
  
  <div class="sidebar">
      <ul>
        <li><a href="welcome.php">
          <span class="title">BERANDA</span>
		  </a></li>
        <li><a href="statistik.php" >
          <span class="title">STATISTIK</span>
          </a></li>
        <li><a href="formulir.php" class="active">
          <span class="title">FORMULIR LAPORAN</span>
          </a></li>
        <li><a href="laporan.php" >
          <span class="title">LAPORAN</span>
          </a></li>
        <li><a href="logout.php">
          <span class="title">LOGOUT</span>
          </a></li>
    </ul>
  </div>
  
<div class="main_container">
	<div class="item">
	<center><b><i>*Laporkan keluhan atau aspirasi anda terkait COVID-19.</i></b></center>
	</div>
	
	<div class="item">
	<center>
	<h1> LAPORAN ANDA SUKSES DIKIRIM !</h1>
	<h2>UNTUK MELIHAT LAPORAN CEK DI MENU LAPORAN, BACK UNTUK KEMBALI MENGISI FORM FORMULIR LAPORAN.</h1>
	<h2> <a href="formulir.php" ><input type="submit" value="BACK"></a></h2>
	</center>
	</div>
</div>
			
</body>
</html>