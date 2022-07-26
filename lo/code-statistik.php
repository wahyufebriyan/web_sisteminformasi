<?php
    
    require_once "koneksi.php";
    
    $sangat = "";
	$saran_err  = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty(trim($_POST["sangat"]))){
        }else{
            $sql = "SELECT id FROM statistik WHERE sangat = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_sangat);
                
                $param_sangat = trim($_POST["sangat"]);
				
				 
                    
                    if(mysqli_stmt_num_rows($stmt) == 1){
                    }else{
                        $sangat= trim($_POST["sangat"]);
                    }
                }else{
                    echo "Ups! Algo salió mal, inténtalo mas tarde";
                }
                
            }
        
       
        
        
        if(empty($saran_err)){
            
            $sql = "INSERT INTO statistik (sangat) VALUES (?)";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_sangat);
				
				$param_sangat= $sangat;
                
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: laporan.php");
                }else{
                    echo "Algo Salio mal, intentalo despues";
                }
            }
        }
        
        mysqli_close($link);
        
    }
    
?>