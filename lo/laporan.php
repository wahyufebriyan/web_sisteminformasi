<?php
	
	include 'code-statistik.php';
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
    <title>DATA LAPORAN</title>
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
        <li><a href="formulir.php" >
          <span class="title">FORMULIR LAPORAN</span>
          </a></li>
        <li><a href="laporan.php" class="active">
          <span class="title">LAPORAN</span>
          </a></li>
        <li><a href="logout.php">
          <span class="title">LOGOUT</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container">
    <div class="item">

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
	
		<center><b>
		<h3><td>Rate Kinerja Pelayanan System pengaduan</td></h3>
		<br>
		<br>
		<tr>
		<td><input type="checkbox" name="sangat" value="sangat">Sangat Puas&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td> <input type="checkbox" name="sangat" value="puas">Puas&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td> <input type="checkbox" name="sangat" value="sedang">Sedang&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td> <input type="checkbox" name="sangat" value="kurang">Kurang&nbsp;</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td> <input type="checkbox" name="sangat" value="tidak">Tidak Puas&nbsp;</td>
		</tr>
		</br>
		</b></center>
		
		<input type="submit" value="kirim">
	</form>
	<br><br>
	<center>
	<b><i>DATA PENGADUAN WARGA KOTA TANGERANG</i></b>
	</center>
	<br>
	<div class="formm">
		<input type="text" name="cari" placeholder="cari laporan anda berdasarkan email..."><input class="button" type="button" value="cari">
	</div>
	
	<table class= "table">
		 <thead>
			<th>NO</th>
			<th>EMAIL</th>
			<th>JUDUL</th>
			<th>LAPORAN</th>
			<th>TANGGAL</th>
			<th>ALAMAT</th>
			<th>TANGGAPAN</th>
		</thead>
			<?php
				
				$show = mysqli_query($link, "SELECT * from datalaporan");
			
				while($row = mysqli_fetch_array($show)){
					echo " <tbody>
					
						<tr>
						<td>".$row['id']."</td>
						<td>".$row['email']."</td>
						<td>".$row['judul']."</td>
						<td>".$row['laporan']."</td>
						<td>".$row['date']."</td>
						<td>".$row['alamat']."</td>
						<td>".$row['tanggapan']."</td>
						</tr>

						</tbody>";
				}
			?>
	</table>
	</br>
  </div>
  
</div>
			
</body>
</html>