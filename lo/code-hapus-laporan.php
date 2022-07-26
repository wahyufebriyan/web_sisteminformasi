 <?php
    
    require_once "koneksi.php";
    
		$id			= $_GET['id'];
		
		mysqli_query($link, "DELETE from datalaporan where id= '$id'");
		header ("location:moderasi-laporan.php");
?>
