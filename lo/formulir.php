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
	<center>
	<b><i>LAPORKAN KELUHAN ATAU ASPIRASI ANDA TERKAIT COVID-19</i></b>
	</center>
	<br><br><br>
	
	<div class= "accordion" >Pengaduan</div>
	<div class= "accordion" >Aspirasi</div> 
	<div class= "accordion" >Permintaan Informasi</div> 
	
    <script>
	var acc=document.getElementsByClassName("accordion");
	var i;
	for (i=0;i<acc.length;i++){
	acc[i].onclick=function(){
	this.classList.toggle("active");
	}
	}
    </script>
	
	
	<br><br><br><br>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
               
               
                <input type="text" name="judul" placeholder="ketik judul laporan">
                <span class="msg-error"><?php echo $judul_err; ?></span>
                <br>
                <input type="text" name="laporan" placeholder="ketik laporan">
                <span class="msg-error"> <?php echo $laporan_err; ?></span>
				<br>
                <input type="date" name="date">
                <span class="msg-error"> <?php echo $date_err; ?></span>
				<br>
                <input type="text" name="alamat" placeholder="ketik alamat">
                <span class="msg-error"> <?php echo $alamat_err; ?></span>
				<br>
                <input type="file" name="gambar">
				<br><br>
                <input type="text" name="email" placeholder="verifikasi email">
                <span class="msg-error"><?php echo $email_err; ?></span>

                <input type="submit" value="KIRIM LAPORAN">

    </form>
	
	</div>
</div>
			
</body>
</html>