<?php
// Conexion con la base de datos de mysql
  $connection = mysqli_connect("localhost", "root", "", "iot");

if(!$connection){
    echo "Ocurrio un Error de";
    exit;
} 

//Promedio datos CO2
$queryPROM_CO2 = mysqli_query($connection, "select AVG(monitoreo.VALOR) from monitoreo where monitoreo.TIPOMEDICION = 'PPM CO2'");




//Datos de donde se registro la menor medicion de CO2
$queryMIN_CO2 = mysqli_query($connection, "
Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, MIN(monitoreo.VALOR) 
from monitoreo, sensores, lugares, unidades 
where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR and monitoreo.TIPOMEDICION = 'PPM CO2'");

//Datos de donde se registro la mayor medicion de CO2
$queryMAX_CO2 = mysqli_query($connection, "
Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, MAX(monitoreo.VALOR) 
from monitoreo, sensores, lugares, unidades 
where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR and monitoreo.TIPOMEDICION = 'PPM CO2'");

//Promedio datos TEMP
$queryPROM_TEMP = mysqli_query($connection, "select AVG(monitoreo.VALOR) from monitoreo where monitoreo.TIPOMEDICION = 'TEMPERATURA'");

//Datos de donde se registro la menor medicion de TEMP
$queryMIN_TEMP = mysqli_query($connection, "
Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, MIN(monitoreo.VALOR) 
from monitoreo, sensores, lugares, unidades 
where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR and monitoreo.TIPOMEDICION = 'TEMPERATURA'");

//Datos de donde se registro la mayor medicion de TEMP
$queryMAX_TEMP = mysqli_query($connection, "
Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, MAX(monitoreo.VALOR) 
from monitoreo, sensores, lugares, unidades 
where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR and monitoreo.TIPOMEDICION = 'TEMPERATURA'");



/* -->Ya Sirve
//Imprimir datos de menor CO2 registrado
while($resultado = mysqli_fetch_row($queryMIN_CO2)){
        echo "
            <tr>
            <td> $resultado[0] </td>
            <td> $resultado[1] </td>
            <td> $resultado[2] </td>
            <td> $resultado[3] </td>
            <td> $resultado[4] </td>
            <td> $resultado[5] </td>
            <td> $resultado[6] <br></td>
            </tr>
        ";
    }
    echo "
    </table>
    </div>
    ";
//Imprimir los datos de promedio de CO2
while($resultado = mysqli_fetch_row($queryPROM_CO2)){
  echo "
      <tr>
      <td> $resultado[0] </td>
      </tr>
  ";
}


//Imprimir los datos de promedio de TEMP
while($resultado = mysqli_fetch_row($queryPROM_TEMP)){
  echo "
      <tr>
      <td> $resultado[0] </td>
      </tr>
  ";
}
*/
?>