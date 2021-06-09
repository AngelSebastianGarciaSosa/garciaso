<?php
    include("conexion2.php");
    $con=conectar();

    $sql="SELECT * FROM alumnos";
    $query=mysqli_query($con,$sql);

   //  $row=mysqli_fetch_All($query);



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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<center>
   <div class="ctn-welcome">
      <h1 class="title-welcome">Bienveni@ <?php echo $_SESSION['usuario'] ?> </h1>
      <a href="cierredesesion.php" class=""close-sesion>Cerrar Sesion</a>
   </div>
   </center>

  <div class="container mt-5">
   <div class="row">
      <div class="col-md-3">
      <h1>Agregar Alumno</h1>
      <form action="insertar.php" method="post">

         <input type="text" autocomplete="off" class="form-control mb-3" name="NumDeControl" placeholder="Numero de control">
         <input type="text" autocomplete="off" class="form-control mb-3" name="NombreAlumno" placeholder="Nombre del alumno">
         <input type="text" autocomplete="off" class="form-control mb-3" name="Email" placeholder="Email">
         <input type="text" autocomplete="off" class="form-control mb-3" name="Carrera" placeholder="Carrera">

         <input type="submit" class="btn btn-primary">
      </form>
      </div>
         <div class="col-md-8">
        <table class="table">
        <h3>Alumnos Registrados</h3>
        <thead class="table-dark table stripped" >
        <tr>
            <th>id</th>
            <th>NumDeControl</th>
            <th>NombreAlumno</th>
            <th>Email</th>
            <th>Carrera</th>
            <th></th>
            <th></th>
        </tr>
        </thead>

        <tbody>
        <?php
        while($row=mysqli_fetch_array($query)){
        ?>
             <tr>
            <td><?php echo $row['id'] ?></td>
               <td> <?php echo $row['NumDeControl'] ?></td>
               <td> <?php echo $row['NombreAlumno'] ?></td>
               <td> <?php echo $row['Email'] ?></td>
               <td> <?php echo $row['Carrera'] ?></td>
                <td><a href="actualizar.php?id= <?php  echo $row['id'] ?>"class="btn btn-info">Editar</a></td>
                <td><a href="eliminar.php?id= <?php  echo $row['id'] ?>"class="btn btn-danger">Eliminar</a></td>
            </tr>

            <?php
               }
               
            ?>
        </tbody>
        </table>
         
         </div>

   </div>

  </div>
</body>
</html>