<?php 
include("conexion2.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumnos WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
    
    <div class="container" >

   
      <div align="center">
      <h1>Agregar Alumno</h1>
      <form action="Update.php" method="POST">
         <input type="text" autocomplete="off" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id']?>">
         <input type="text" autocomplete="off" class="form-control mb-3" name="NumDeControl" placeholder="Numero de control" value="<?php echo $row['NumDeControl']?>">
         <input type="text" autocomplete="off" class="form-control mb-3" name="NombreAlumno" placeholder="Nombre del alumno" value="<?php echo $row['NombreAlumno']?>">
         <input type="text" autocomplete="off" class="form-control mb-3" name="Email" placeholder="Email" value="<?php echo $row['Email']?>">
         <input type="text" autocomplete="off" class="form-control mb-3" name="Carrera" placeholder="Carrera" value="<?php echo $row['Carrera']?>">

         <input type="submit" class="btn btn-primary">
      </form>
      </div>
    </div>
</body>
</html>