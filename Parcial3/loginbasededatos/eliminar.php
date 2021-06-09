<?php
include("conexion2.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM alumnos WHERE id=$id";
$query=mysqli_query($con,$sql);
if($query){
    Header("Location: Bienvenido.php");
}

?>