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
   <div class="ctn-welcome">
      <h1 class="title-welcome">Bienveni@ <?php echo $_SESSION['usuario'] ?> </h1>
      <a href="cierredesesion.php" class=""close-sesion>Cerrar Sesion</a>
   </div>

  <div class="container mt-5">
   <div class="row">
      <div class="col-md-3">
      <h1>Agregar Alumno</h1>
      <form action="insertar.php" method="POST">

         <input type="text" class="form-control mb-3" name="NumDeControl" placeholder="Numero de control">
         <input type="text" class="form-control mb-3" name="NombreAlumno" placeholder="Nombre del alumno">
         <input type="text" class="form-control mb-3" name="Email" placeholder="Email">
         <input type="text" class="form-control mb-3" name="Carrera" placeholder="Carrera">

         <input type="submit" class="btn btn-primary">
      </form>
      </div>
         <div class="col-md-8">
        <table class="table">
        <thead class="table-dark table stripped" >
        <tr>
            
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
        while($row=mysqli_fetch_array($query){
        
            echo "<tr>";
               
               
               echo"<td>".$row['NumDeControl'] ."</td>";
               echo"<td>" .$row['NombreAlumno']." </td>";
              echo "<td>"  .$row['Email']. "</td>";
              echo "<td>"  .$row['Carrera']." </td>";
              echo " <td><a href='actualizar.php?id='  ".$row['id'] ."class='btn btn-info'>Editar</a></td>";
               // <th><a href="eliminar.php?id= echo $row['id']" class="btn btn-danger">Eliminar</a></th>
           echo "</tr>";

            
               }
            ?>
        </tbody>
        </table>
         
         </div>

   </div>

  </div>
</body>
</html>