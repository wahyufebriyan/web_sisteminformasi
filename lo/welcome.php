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
    <title>SELAMAT DATANG</title>
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
        <li><a href="welcome.php" class="active">
          <span class="title">BERANDA</span>
		  </a></li>
        <li><a href="statistik.php">
          <span class="title">STATISTIK</span>
          </a></li>
        <li><a href="formulir.php">
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
	<center>
	<b><i>INFORMASI PERKEMBANGAN KASUS COVID-19 SELURUH DUNIA</i></b>
	</center>
    <br><br>
	<iframe src="https://gisanddata.maps.arcgis.com/apps/opsdashboard/index.html#/bda7594740fd40299423467b48e9ecf6" 
	width="100%" height="425" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
  </div>
</div>
			
</body>
</html>