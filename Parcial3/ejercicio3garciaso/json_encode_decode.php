<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   $JSONstring = '{"Nombre": "nombrecompleto","ClaveAlumno":"NumDeControl", "Especialidad": "Carrera"}';
    $json = json_decode($JSONstring);
    printf("json_decode<br>");
    printf("<b>nombrecompleto<t> = </b> %s <br>",$json->{'Nombre'});
    printf("<b>NumDeControl<t> = </b> %s <br>",$json->{'ClaveAlumno'});
    printf("<b>Carrera<t>=</b> %s <br>",$json->{'Especialidad'});
    printf("<br><br>");
    $json->{'Nombre'} ="Angel Sebastian Garcia Sosa";
    $json->{'ClaveAlumno'} ="18100174";
    $json->{'Especialidad'} ="ISC";

    printf("json_encode<br>");
    $json= json_encode($json);
    echo $json;
   ?> 
</body>
</html>