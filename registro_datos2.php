<?php
//Quitar los warnings
error_reporting(E_ERROR | E_PARSE);

//Se crea la conexion con la base de datos
$connection = mysqli_connect("localhost", "root", "", "iot");
if(!$connection){
    echo "Ocurrio un Error";
    exit;
} 

$fecha = $_POST["FechaRegistro"];
$hora = $_POST["HoraRegistro"];
$medicion = $_POST["TipoMedicion"];
$equipo = $_POST["Equipo"];

if(empty($fecha) and empty($hora) and empty($medicion) and empty($equipo)){
    $query1 = mysqli_query($connection, "Select * from monitoreo");
}

while($resultado = mysqli_fetch_row($query1)){
    echo "
        <tr>
           <td> $resultado[0] </td>
           <td> $resultado[1] </td>
           <td> $resultado[2] </td>
           <td> $resultado[3] </td>
           <td> $resultado[4] </td>
           <td> $resultado[5] </td>
           <td> $resultado[6] <br></td>
    ";
}

?> 