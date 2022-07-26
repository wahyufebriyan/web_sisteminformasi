<?php
    
    require_once "koneksi.php";
    
		$id			= $_POST['id'];
		$email		= $_POST['email'];
		$judul		= $_POST['judul'];
		$laporan	= $_POST['laporan'];
		$date		= $_POST['date'];
		$alamat		= $_POST['alamat'];
		$tanggapan	= $_POST['tanggapan'];
		
		mysqli_query($link, "UPDATE datalaporan SET email='$email', judul='$judul', laporan='$laporan', date='$date', alamat='$alamat', tanggapan='$tanggapan' where id ='$id'");
		header ("location:halaman-admin.php");
?>
