<?php

require_once "conexion.php";

$username = $email = $password="";
$username_error = $email_error = $password_error="";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
    if(empty(trim($_POST["username"]))){
        $username_error ="Porfavor ingrese el nombre de usuario";

        }else{
            $sql = "SELECT id FROM usuarios where Usuario = ?";

            if($stmt = mysqli_prepare($link, $sql)){
              mysqli_stmt_bind_param($stmt, "s", $param_username);
              
              $param_username = trim($_POST["username"]);

              if(mysqli_stmt_execute($stmt)){
                  mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt)== 1) {
                   $username_error = "Este usuario ya esta registrado";
                }else{
                    $username =trim($_POST["username"]);
                }
              }else{
                echo "Ha ocurrido un error";  
              }
            }
        }


        if(empty(trim($_POST["email"]))){
            $email_error ="Porfavor ingrese el correo";
    
            }else{
                $sql= "SELECT id FROM usuarios where Usuario = ?";
    
                if($stmt = mysqli_prepare($link, $sql)){
                  mysqli_stmt_bind_param($stmt, "s", $param_email);
                  
                  $param_email = trim($_POST["email"]);
    
                  if(mysqli_stmt_execute($stmt)){
                      mysqli_stmt_store_result($stmt);
    
                    if(mysqli_stmt_num_rows($stmt)== 1) {
                       $email_error = "Este email ya esta registrado";
                    }else{
                        $email =trim($_POST["email"]);
                    }
                  }else{
                    echo "Ha ocurrido un error";  
                  }
                }
            }
    
            if(empty(trim($_POST["password"]))){
                $password_error = "Porfavor ingrese la contraseña";
            }elseif(strlen(trim($_POST["password"])) < 5) {

                $password_error = "La contraseña debe tener minimo 5 caracteres";
            }else{
                $password = trim($_POST["password"]);

            }

            if(empty($username_error) && empty($email_error) && empty($password_error)){

                $sql = "INSERT INTO usuarios (Usuario, email, contraseña)  VALUES(?,?,?)";

                if($stmt =mysqli_prepare($link,$sql)){
                    mysqli_stmt_bind_param($stmt, "sss",$param_username,$param_email,$param_password);

                    $param_username = $username;
                    $param_email = $email;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); //hash

                    if(mysqli_stmt_execute($stmt)){
                        header("location: loginvista.php");

                    }else{
                       echo "Ha ocurrido un error";
                    }

                }

            }


            mysqli_close($link);

    }

?>