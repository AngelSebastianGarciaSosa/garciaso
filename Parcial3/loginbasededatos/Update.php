<?php
include("conexion2.php");
$con=conectar();

$id=$_POST['id'];
$NumDeControl=$_POST['NumDeControl'];
$NombreAlumno=$_POST['NombreAlumno'];
$Email=$_POST['Email'];
$Carrera=$_POST['Carrera'];

$sql="UPDATE alumnos SET id='$id',NumDeControl='$NumDeControl',NombreAlumno='$NombreAlumno',Email='$Email',Carrera='$Carrera' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: Bienvenido.php");
}




?>
