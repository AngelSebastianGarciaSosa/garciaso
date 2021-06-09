<?php
include("conexion2.php");

 $con=conectar();

 $NumDeControl=$_POST['NumDeControl'];
 $NombreAlumno=$_POST['NombreAlumno'];
$Email=$_POST['Email'];
 $Carrera=$_POST['Carrera'];


$sql="INSERT INTO alumnos(NumDeControl,NombreAlumno,Email,Carrera) VALUES( '$NumDeControl','$NombreAlumno','$Email','$Carrera' )";

$query= mysqli_query($con,$sql);




if($query){
   
    
 header("location: Bienvenido.php");

}else{
    echo "No Insertado";
}
?>