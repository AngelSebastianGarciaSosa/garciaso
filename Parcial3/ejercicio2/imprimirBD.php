<?php
include "conection.php";
try {
    $consultaSql = "select * from usuarios";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


    print"<h2> Registro de alumnos</h2>";
    print "<br>";
    for($i=0; $i<=count($resultado)-1; $i++){
    print("<b> Alumno numero: </b>".($i+1)."<br>");
    print "<br>";
    printf("<b>nombrealumno   = </b> ".$resultado[$i]['nombrealumno']."<br>");
    printf("<b>NumDeControl = </b> ".$resultado[$i]['NumDeControl']."<br>");
    printf("<b>telefono = </b> ".$resultado[$i]['telefono']."<br>");
    printf("<b>email  = </b>".$resultado[$i]['email']."<br>");
    printf("<b>carrera     = </b> ".$resultado[$i]['carrera']."<br>");
    printf("<b>pass   = </b> ".$resultado[$i]['pass']."<br>");
    print "<br>";

    }
    $consulta->closeCursor();
}
catch(PDOException $e)
{
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}

?>