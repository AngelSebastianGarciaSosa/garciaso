<?php
    include("conexion2.php");
    $con=conectar();

    $sql="SELECT * FROM alumnos";
    $query=mysqli_query($con,$sql);

    // $row=mysqli_fetch_All($query);
    // var_dump ($row);



    echo "<table>";
        while($row=mysqli_fetch_array($query)){
        
            echo"<tr>";
               
               
               echo"<td>".$row['NumDeControl'] ."</td>";
               echo"<td>" .$row['NombreAlumno']." </td>";
              echo "<td>"  .$row['Email']. "</td>";
              echo "<td>"  .$row['Carrera']." </td>";
              echo " <td><a href='actualizar.php?id='  ".$row['id'] ."class='btn btn-info'>Editar</a></td>";
               // <th><a href="eliminar.php?id= echo $row['id']" class="btn btn-danger">Eliminar</a></th>
           echo "</tr>";
        }
        echo "</table>";
?>