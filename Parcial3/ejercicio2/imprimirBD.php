<?php
include "conectar.php";
try {
    $consultaSql = "select nombre,apPaterno,apMaterno,login from cusuario";
    $consulta = $con -> prepare($consultaSql);
    $consulta -> execute();
    $resultado = $consulta->fetch(PDO::FETCH_NUM);


    print"<h2>fetch(PDO::FETCH_NUM)</h2>";
    print "<br>";
    print_r($resultado);
    var_dump($resultado);
    print "<br>";
    printf("<b>nombrealumno   = </b> %s <br>",$resultado[0]);
    printf("<b>NumDeControl = </b> %s <br>",$resultado[1]);
    printf("<b>telefono = </b> %s <br>",$resultado[2]);
    printf("<b>email     = </b> %s <br>",$resultado[3]);
    printf("<b>carrera     = </b> %s <br>",$resultado[4]);
    printf("<b>password   = </b> %s <br>",$resultado[5]);
    print "<br><br><br>";


    $consulta->closeCursor();
}
catch(PDOException $e)
{
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}

?>