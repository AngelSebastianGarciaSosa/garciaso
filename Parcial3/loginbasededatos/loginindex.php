<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: Bienvenido.php");
    exit;
}

require_once "conexion.php";

$email = $password ="";
$email_error = $password_error ="";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(empty(trim($_POST["email"]))){
        $email_error="Favor de ingresar el correo electronico";

    }else{
       $email= trim($_POST["email"]); 
    }

    if(empty(trim($_POST["password"]))){
        $password_error="Favor de ingresar la contraseña";

    }else{
       $password= trim($_POST["password"]); 
    }




    if(empty($email_error) && empty($password_error)){
        $sql = "SELECT id, Usuario, Email, Contraseña FROM usuarios WHERE email =?";

        if($stmt = mysqli_prepare($link, $sql)){
         
           mysqli_stmt_bind_param($stmt,"s",$param_email);
           $param_email = $email;

           if(mysqli_stmt_execute($stmt)){
               mysqli_stmt_store_result($stmt);
           }

           if(mysqli_stmt_num_rows($stmt) == 1){
               mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $hashed_password);
               if(mysqli_stmt_fetch($stmt)){
                   if(password_verify($password, $hashed_password)){
                       session_start();

                       $_SESSION["loggedin"]= true;
                       $_SESSION["usuario"] = $usuario;
                       $_SESSION["email"] = $email;

                       header("location: Bienvenido.php");
                   }else{
                       $password_error ="La contraseña no es correcta";
                   }
               }
           }else{
            $email_error ="No existe ninguna cuenta registrada con ese email";
        }
        }else{
            echo "Ha ocurrido un error";
        }   

    }

    mysqli_close($link);


}


?>
