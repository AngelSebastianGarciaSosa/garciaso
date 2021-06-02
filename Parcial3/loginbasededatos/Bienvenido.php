<?php  
session_start();
if(! isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!== true){
   header("location: loginvista.php");
   exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido </title>
     <link rel="stylesheet" href="css\estilos.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <div class="ctn-welcome">
   <h1 class="title-welcome">Bienveni@ <?php echo $_SESSION['usuario'] ?> </h1>
   <a href="cierredesesion.php" class=""close-sesion>Cerrar Sesion</a>
   </div>
</body>
</html>