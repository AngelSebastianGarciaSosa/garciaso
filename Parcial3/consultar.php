<?php
include "conectar.php";

try {
       $queryStr="select * from tarea1";
       $query=$con->prepare($queryStr);
       $query->execute();

        while ($row = $query->fetch()) {
            echo $row['nombrealumno'].'-'.
                 $row['NumDeControl'].'-'.
                 $row['telefono'].'-'.
                 $row['email'].'<br>';
                 $row['carrera'].'<br>';
                 $row['password'].'<br>';
        }
        $query->closeCursor();
} catch(PDOException $e) {
        echo "Error de consulta a la base de datos";
        echo $e->getMessage();
}
?>