<?php

//Se crea la conexion con la base de datos
$connection = mysqli_connect("localhost", "root", "", "retoiot");
//Si no se lográ la conexion, despliega un mensaje de error.
if(!$connection){
    echo "Ocurrio un Error";
    exit;
} 

//
$ip_Unidad = $_POST["ipUnidad"];
$sensorCO2 = $_POST["SensorCO2"];
$sensorH = $_POST["SensorH"];
$sensorT = $_POST["SensorT"];
$lugar = $_POST["Lugar"];
$a�o = $_POST["Año"];
$mes = $_POST["Mes"];
$dia = $_POST["Dia"];
$hora = $_POST["Hora"];
$minuto = $_POST["Minuto"];

/*
$query1 = mysqli_query($connection, "Insert into registros(IP_UNIDAD, SENSOR, LUGAR, AÑO, MES, DIA, HORA, MINUTO, TIPOMEDICION, VALOR) values('$ip_Unidad', '2', '$lugar', '$a�o', '$mes', '$dia', '$hora', '$minuto', 'TEMPERATURA', '$sensorT')");
$query2 = mysqli_query($connection, "Insert into registros(IP_UNIDAD, SENSOR, LUGAR, AÑO, MES, DIA, HORA, MINUTO, TIPOMEDICION, VALOR) values('$ip_Unidad', '2', '$lugar', '$a�o', '$mes', '$dia', '$hora', '$minuto', 'HUMEDAD', '$sensorH')");
$query3 = mysqli_query($connection, "Insert into registros(IP_UNIDAD, SENSOR, LUGAR, AÑO, MES, DIA, HORA, MINUTO, TIPOMEDICION, VALOR) values('$ip_Unidad', '1', '$lugar', '$a�o', '$mes', '$dia', '$hora', '$minuto', 'PPM CO2', '$sensorCO2')");
*/
$query = mysqli_query($connection, "Insert into retoiot.monitoreo(IP_UNIDAD, SENSOR, LUGAR, AÑO, MES, DIA, HORA, MINUTO, TIPOMEDICION, VALOR) values('1', '2', '2', '2021', '11', '27', '12', '45', 'TEMPERATURA', '32')");


if($query){
    echo "Si se registro algo perro checa la base de datos";
}
else {
	echo "Vale verga men";
}

?>