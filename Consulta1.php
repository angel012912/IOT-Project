<?php
            /*

$connection = mysqli_connect("localhost", "root", "", "iot");
if(!$connection){
    echo "Ocurrio un Error";
    exit;
} 
    
$queryMIN_CO2 = mysqli_query($connection, "
            Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, MIN(monitoreo.VALOR) 
            from monitoreo, sensores, lugares, unidades 
            where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR and monitoreo.TIPOMEDICION = 'PPM CO2'");
            

if($queryMIN_CO2){
    echo "Si sale";
}else{
    echo mysqli_error($connection);
}

while($resultado = mysqli_fetch_row($query1)){
        echo "
        
            <tr>
            <td> $resultado[0] </td>
            <br>
        ";
}    
*/

?>
