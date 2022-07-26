 <?php
    
    require_once "koneksi.php";
    
    $email = $judul = $laporan = $date = $alamat = $gambar = "";
	$email_err = $judul_err = $laporan_err = $date_err = $alamat_err = $alamat_err = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty(trim($_POST["email"]))){
            $email_err = "masukan email";
        }else{
            $sql = "SELECT id FROM datalaporan WHERE email = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                
                $param_email = trim($_POST["email"]);
				
				 
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                    }else{
                        $email = trim($_POST["email"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
                
            }
		
        
        if(empty(trim($_POST["judul"]))){
            $judul_err = "masukan judul";
        }else{
            $sql = "SELECT id FROM datalaporan WHERE judul = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_judul);
                
                $param_judul = trim($_POST["judul"]);
				
				
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                    }else{
                        $judul = trim($_POST["judul"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
                
            }
        
        
		
		
		if(empty(trim($_POST["laporan"]))){
            $laporan_err = "masukan laporan";
        }else{
            $sql = "SELECT id FROM datalaporan WHERE laporan = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_laporan);
                
                $param_laporan = trim($_POST["laporan"]);
				
				
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                    }else{
                        $laporan = trim($_POST["laporan"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
                
            }
		
		
		
        if(empty(trim($_POST["date"]))){
            $date_err = "masukan date";
        }else{
            $sql = "SELECT id FROM datalaporan WHERE date = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_date);
                
                $param_date = trim($_POST["date"]);
				
					
					if(mysqli_stmt_num_rows($stmt) == 1){
                    }else{
                        $date = trim($_POST["date"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
				
            }
        
		
		
		if(empty(trim($_POST["alamat"]))){
            $alamat_err = "masukan alamat";
        }else{
            $sql = "SELECT id FROM datalaporan WHERE alamat = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_alamat);
                
                $param_alamat = trim($_POST["alamat"]);
				
					
					if(mysqli_stmt_num_rows($stmt) == 1){
                    }else{
                        $alamat = trim($_POST["alamat"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                
				}
            }
        
		
		
		
        if(empty(trim($_POST["gambar"]))){
        }else{
            $sql = "SELECT id FROM datalaporan WHERE gambar = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_gambar);
                
                $param_gambar = trim($_POST["gambar"]);
				
				
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                    }else{
                        $gambar = trim($_POST["gambar"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
                
            }
        
       
        
        
        if(empty($email_err) && empty($judul_err) && empty($laporan_err) && empty($date_err)  && empty($alamat_err)){
            
            $sql = "INSERT INTO datalaporan (email, judul, laporan, date, alamat, gambar) VALUES (?, ?, ?, ?, ?, ?)";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "ssssss", $param_email, $param_judul, $param_laporan, $param_date, $param_alamat, $param_gambar);
				
				$param_email= $email;
                $param_judul= $judul;
                $param_laporan = $laporan;
				$param_date= $date;
                $param_alamat = $alamat;
				$param_gambar = $gambar;
                
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: sukses.php");
					
                }else{
                    echo "Algo Salio mal, intentalo despues";
                }
            }
        }
        
        mysqli_close($link);
        
    }
    
?>