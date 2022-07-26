<?php

    session_start();
    
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: welcome.php");
        exit;
    }

require_once "koneksi.php";

$email = $password ="";
$email_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    
    if(empty(trim($_POST["email"]))){
        $email_err = "masukan email";
    }else{
        $email = trim($_POST["email"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "masukan password";
    }else{
        $password = trim($_POST["password"]);
    }
    
  
    if(empty($email_err) && empty($password_err)){
        
        $sql = "SELECT id, usuario, email, clave FROM usuarios WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = $email;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $hashed_password );
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        session_start();
                        
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["email"] = $email;
                        
                        header("location: welcome.php");
                    }else{
                        $password_err = "password salah";
                    }
                    
                } 
            }else{
                    $email_err = "email salah";
                }
            
        }else{
                    echo "UPS! algo salio mal, intentalo mas tarde";
                }
				
				
    }
	
	
	if(empty($email_err) && empty($password_err)){
        
        $sql = "SELECT id, usuario, email, clave FROM usuarios WHERE email = 'wahyufebrian@gmail.com'";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = $email;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $hashed_password );
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        session_start();
                        
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["email"] = $email;
                        
                        header("location: halaman-admin.php");
                    }else{
                        $password_err = "password salah";
                    }
                    
                } 
            }else{
                    $email_err = "email salah";
                }
            
        }else{
                    echo "UPS! algo salio mal, intentalo mas tarde";
                }
 
        
        $sql = "SELECT id, usuario, email, clave FROM usuarios WHERE email = 'odp@gmail.com'";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            $param_email = $email;
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $hashed_password );
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password, $hashed_password)){
                        session_start();
                        
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["email"] = $email;
                        
                        header("location: halaman-odp.php");
                    }else{
                        $password_err = "password salah";
                    }
                    
                } 
            }else{
                    $email_err = "email salah";
                }
            
        }else{
                    echo "UPS! algo salio mal, intentalo mas tarde";
                }
    }
    
    mysqli_close($link);
    
}
?>
