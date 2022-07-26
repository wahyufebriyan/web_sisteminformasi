<?php

	include'koneksi.php';
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
    <title>STATISTIK KINERJA</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="chartjs/Chart.js"></script>
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
        <li><a href="statistik.php" class="active">
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
	<br><br><br>
	<center>
		<b><i>STATISTIK KINERJA SYSTEM INFORMASI LAYANAN PENGADUAN</i></b>
	</center>
	<br><br><br>
	
	<div style="width: 60%;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
	
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Sangat puas", "Puas", "Sedang", "Kurang", "Tidak Puas"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_sangat = mysqli_query($link,"select * from statistik where sangat= 'sangat'");
					echo mysqli_num_rows($jumlah_sangat);
					?>, 
					<?php 
					$jumlah_puas = mysqli_query($link,"select * from statistik where sangat= 'puas'");
					echo mysqli_num_rows($jumlah_puas);
					?>, 
					<?php 
					$jumlah_sedang = mysqli_query($link,"select * from statistik where sangat= 'sedang'");
					echo mysqli_num_rows($jumlah_sedang);
					?>, 
					<?php 
					$jumlah_kurang = mysqli_query($link,"select * from statistik where sangat= 'kurang'");
					echo mysqli_num_rows($jumlah_kurang);
					?>,
					<?php 
					$jumlah_tidak = mysqli_query($link,"select * from statistik where sangat= 'tidak'");
					echo mysqli_num_rows($jumlah_tidak);
					?>
					
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(251, 140, 1, 0.2)',
					'rgba(222, 184, 135, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(251, 140, 1, 1)',
					'rgba(222, 184, 135, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
	
  </div>
</div>
			
</body>
</html>