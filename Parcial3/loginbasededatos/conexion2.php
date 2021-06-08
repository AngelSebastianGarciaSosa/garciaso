<?php 
function conectar(){
$host="localhost";
$pass="";
$usuario="root";
$nombrebd ="login_usuarios";


$con=mysqli_connect($host,$usuario,$pass);
mysqli_select_db($con,$nombrebd);
return $con;
}

?>