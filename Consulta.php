<?php
//Solo espliega mensajes de error, omitir los mensajes "WARNING"
error_reporting(E_ERROR | E_PARSE);
    echo "
    <!doctype html>
<!-- Desarrollo de la interfaz -->
<html lang='en'>

<head>
    <title>IOT|CONSULTA</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap v5 -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'>
    <link rel='stylesheet' href='style_consulta.css'>
    <link rel='icon' type='image/png' href='favicon.jpg'>
    <style>
    .esconder{
        display: none !important;
    }
    .esconder1{
        display:none !important;
    }
    .bg-gold {
            background: -webkit-linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
            background: -o-linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
            background: -moz-linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
            background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%)
    }
    .bg-green {
            background: -webkit-linear-gradient(110deg, #5FC18B 60%, #44a36f 60%);
            background: -o-linear-gradient(110deg, #5FC18B 60%, #44a36f 60%);
            background: -moz-linear-gradient(110deg, #5FC18B 60%, #44a36f 60%);
            background: linear-gradient(110deg, #5FC18B 60%, #44a36f 60%);
    }
    .bg-blue {
            background: -webkit-linear-gradient(110deg, #4091D1 60%, #29699B 60%);
            background: -o-linear-gradient(110deg, #4091D1 60%, #29699B 60%);
            background: -moz-linear-gradient(110deg, #4091D1 60%, #29699B 60%);
            background: linear-gradient(110deg, #4091D1 60%, #29699B 60%);
    }
    </style>

</head>

<body class = 'bg-blue'>
    <!-- Barra de navegacion -->
    <nav class='navbar navbar-expand-lg navbar-dark' style='background-color: #000000'>
        <a class='navbar-brand' href='HomePage.php'>
            <img src='logotec.png' alt='' height='60px'></a>

        <div class='navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2'>
            <ul class='navbar-nav mr-auto '>
                <li class='nav-item'>
                    <a class='nav-link active' href='HomePage.php'><i class='bi bi-house'></i> Inicio </a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='Consulta.php'><i class='bi bi-clipboard-data'></i> Consulta </a>
                </li>
            </ul>
        </div>
        </div>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='.dual-collapse2'>
                <i class='bi bi-menu-button-wide-fill'></i>
        </button>
    </nav>
    
    <!-- Contenido de la pagina -->
    
    <div class = 'contenedor sombra'>
        <h2>Consultas</h2>
        <main class = 'selecciones'>
            <div class = 'seleccion'>
                <h3>Temperatura</h3>
                <svg xmlns= 'http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-temperature' width='44' height='44' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                    <path stroke='none' d='M0 0h24v24H0z' fill='none'/>
                    <path d='M10 13.5a4 4 0 1 0 4 0v-8.5a2 2 0 0 0 -4 0v8.5' />
                    <line x1='10' y1='9' x2='14' y2='9' />
                </svg>
                <div class='dropdown show'>
                    <button class='btn btn-primary ' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' onClick='eliminarClaseTemp()'>
                        Mostrar Por: 
                    </button>
                </div> 
            </div>
            <div class = 'seleccion'>
                <h3>PPM CO2</h3>
                <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-biohazard' width='44' height='44' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                    <path stroke='none' d='M0 0h24v24H0z' fill='none'/>
                    <circle cx='12' cy='12' r='2' />
                    <path d='M11.939 14c0 .173 .048 .351 .056 .533l0 .217a4.75 4.75 0 0 1 -4.533 4.745l-.217 0m-4.75 -4.75a4.75 4.75 0 0 1 7.737 -3.693m6.513 8.443a4.75 4.75 0 0 1 -4.69 -5.503l-.06 0m1.764 -2.944a4.75 4.75 0 0 1 7.731 3.477l0 .217m-11.195 -3.813a4.75 4.75 0 0 1 -1.828 -7.624l.164 -.172m6.718 0a4.75 4.75 0 0 1 -1.665 7.798' />
                </svg>
                <div class='dropdown show'>
                    <button class='btn btn-primary ' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' onClick='eliminarClaseCO2()'>
                        Mostrar Por: 
                    </button>
                </div>   
            </div>
            <div class = 'seleccion'>
                <h3>Personalizado</h3>
                <svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-edit' width='44' height='44' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'>
                    <path stroke='none' d='M0 0h24v24H0z' fill='none'/>
                    <path d='M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3' />
                    <path d='M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3' />
                    <line x1='16' y1='5' x2='19' y2='8' />
                </svg>
                <div class='dropdown show'>
                    <button class='btn btn-primary ' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' onClick='eliminarClasePerso()'>
                        Editar
                    </button>
                </div> 
            </div>
        </main>
        <br>

        <div class = 'esconder card card-signin my-5 card-body col-sm-9 col-md-7 col-lg-5 mx-auto sombra' id = 'Personalizado' >
         <h5 class='card-title text-center'> Consulta </h5>
               <form class='form-signin' action = '' method='post'>
                            <div class='form-floating'>
                                <input type='text' id='FechaRegistro' class='form-control' placeholder='2021-12-02'
                                     autofocus name='FechaRegistro'>
                                <label for ='FechaRegistro'>Fecha (AAAA-MM-DD): </label>
                            </div>
                            <br>
                            <div class='form-floating'>
                            <input type='text' class='form-control' id='HoraRegistro' name='HoraRegistro'
                                autofocus placeholder='Ejemp: 15:30'>
                            <label for='HoraRegistro'> Hora (HH:MM): </label>
                            </div>
                            <br>
                            <div class='form-label-group'>
                                    <select class='custom-select mr-sm-2 form-select' name = 'TipoMedicion' id='TipoMedicion' autofocus placeholder='Medicion'>
                                    <option value='NADA' selected> Tipo de Medicion </option>
                                    <option value='TEMPERATURA' id='TipoMedicion'> TEMPERATURA </option>
                                    <option value='PPM CO2' id='TipoMedicion'> CO2 </option>
                                    <option value='HUMEDAD' id='TipoMedicion'> HUMEDAD </option>
                                    </select>
                            </div>
                            <br>
                            <div class='form-label-group'>
                                <select class='custom-select mr-sm-2 form-select' name = 'Equipo' id='Equipo' autofocus placeholder='Equipo'>
                                    <option selected> Selecciona el equipo </option>
                                    <option value='1' id='Equipo'> 1 </option>
                                    <option value='2' id='Equipo'> 2 </option>
                                    <option value='3' id='Equipo'> 3 </option>
                                    <option value='4' id='Equipo'> 4 </option>
                                    <option value='5' id='Equipo'> 5 </option>
                                    </select>
                            </div>
                            <br>
                            <div style='text-align: center'>
                            <button class='btn btn-lg btn-primary btn-block text-uppercase' type='submit' name = 'ConsultaPerso' > Consultar </button>
                            </div>
                        </form>
        </div>
        <div class = 'esconder card card-signin my-5 card-body col-sm-9 col-md-7 col-lg-5 mx-auto sombra' align-items='center' id = 'TempCons' >
            <h5 class='card-title text-center'> Consultar Por: </h5>
            <br>
            <form class='form-signin' action = '' method='post'>
                <div class='btn-group-vertical card col-sm-9 mx-auto' role='group' aria-label='Basic radio toggle button group'>
                    <input type='radio' class='btn-check' name='TEMP' value = 'Promedio' id='PROMTEMP' autocomplete='off' checked>
                    <label class='btn btn-outline-primary' for='PROMTEMP'>Promedio de temperatura registrada</label>
                
                    <input type='radio' class='btn-check' name='TEMP' value = 'Minimo' id='MINTEMP' autocomplete='off'>
                    <label class='btn btn-outline-primary' for='MINTEMP'>Menor temperatura registrada</label>
                
                    <input type='radio' class='btn-check' name='TEMP' value = 'Maximo' id='MAXTEMP' autocomplete='off'>
                    <label class='btn btn-outline-primary' for='MAXTEMP'>Mayor temperatura registrada</label>
                    <br>
                    <button class='btn btn-lg btn-primary btn-block text-uppercase' type='submit' name = 'ConsultaTemp'> Consultar </button>
                </div>
            </form>
        </div>
        <div class = 'esconder card card-signin my-5 card-body col-sm-9 col-md-7 col-lg-5 mx-auto sombra' align-items='center' id = 'CO2Cons' >
            <h5 class='card-title text-center'> Consultar Por: </h5>
            <br>
            <form class='form-signin' action = '' method='post'>
                <div class='btn-group-vertical card col-sm-9 mx-auto' role='group' aria-label='Basic radio toggle button group'>
                    <input type='radio' class='btn-check' name='CO2' value = 'Promedio' id='PROMCO2' autocomplete='off' checked>
                    <label class='btn btn-outline-primary' for='PROMCO2'>Promedio PPM de CO2 registrado</label>
                
                    <input type='radio' class='btn-check' name='CO2' value = 'Minimo' id='MINCO2' autocomplete='off'>
                    <label class='btn btn-outline-primary' for='MINCO2'>Menor valor de PPM de CO2 registrado</label>
                
                    <input type='radio' class='btn-check' name='CO2' value = 'Maximo' id='MAXCO2' autocomplete='off'>
                    <label class='btn btn-outline-primary' for='MAXCO2'>Mayor valor de PPM de CO2 registrado</label>
                    <br>
                    <button class='btn btn-lg btn-primary btn-block text-uppercase' type='submit' name = 'ConsultaCO2'> Consultar </button>
                </div>
            </form>
        </div>
        </div>
        ";
?>

<?php
//Se crea la conexion con la base de datos
$connection = mysqli_connect("localhost", "root", "", "iot");

//Se selecciona el boton consultar de CO2
if(isset($_POST['ConsultaCO2'])){
    //Se obtinene la opcion elegida por el usuario
    $valor = $_POST['CO2'];
    //Evalua que opcion seleccionó
    if($valor == 'Promedio'){
        //Diseño de la tabla a desplegar
        echo "<div class = 'card card-signin my-5 col-sm-9 mx-auto sombra' id = 'listaCons' style='text-align: center'>
                <table class=' table table-hover table-borderless' >
                <thead>
                    <tr>
                    <th scope='col'>Promedio de CO2 Registrado</th>
                    </tr>
                </thead>
        ";


        //Query donde se obtiene el promedio de los registros de CO2
        $queryPROM_CO2 = mysqli_query($connection, "select round(AVG(monitoreo.VALOR),3) from monitoreo where monitoreo.TIPOMEDICION = 'PPM CO2'");
        //Imprime cada linea del query solicitado
        while($resultado = mysqli_fetch_row($queryPROM_CO2)){
            echo "
                <tr>
                    <!-- Imprime la primer columna debido a que al obtener el promedio solo se obtiene una-->
                    <td> $resultado[0]  PPM CO2<br></td>
                </tr>
            ";
        } 
            echo "
            </table>
            </div>
            ";  
    }elseif($valor == 'Minimo'){

        echo "<div class = 'card card-signin my-5  mx-auto sombra' id = 'listaCons' style='text-align: center'>
        <table class=' table table-hover table-borderless'>
         <thead>
            <tr>
              <th scope='col'>Unidad</th>
              <th scope='col'>Sensor</th>
              <th scope='col'>Lugar</th>
              <th scope='col'>Fecha</th>
              <th scope='col'>Hora</th>
              <th scope='col'>Medicion</th>
              <th scope='col'>Valor</th>
            </tr>
          </thead>
        ";
        //  Se realiza el query donde se obtiene el menor registro de CO2
        $queryMIN_CO2 = mysqli_query($connection, "
            Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, MIN(monitoreo.VALOR) 
            from monitoreo, sensores, lugares, unidades 
            where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR and monitoreo.TIPOMEDICION = 'PPM CO2'");
        //Se itera todos los renglones obtenidos del query
        while($resultadoMINCO2 = mysqli_fetch_row($queryMIN_CO2)){
            //Se imprime las columnas obtenidas
            echo "
                <tr>
                <td> $resultadoMINCO2[0] </td>
                <td> $resultadoMINCO2[1] </td>
                <td> $resultadoMINCO2[2] </td>
                <td> $resultadoMINCO2[3] </td>
                <td> $resultadoMINCO2[4] </td>
                <td> $resultadoMINCO2[5] </td>
                <td> $resultadoMINCO2[6] <br></td>
                </tr>
            ";
        }
        echo "
            </table>
            </div>
            ";  
    }elseif ($valor == 'Maximo') {
        echo "<div class = 'card card-signin my-5  mx-auto sombra' id = 'listaCons' style='text-align: center'>
        <table class=' table table-hover table-borderless'>
         <thead>
            <tr>
              <th scope='col'>Unidad</th>
              <th scope='col'>Sensor</th>
              <th scope='col'>Lugar</th>
              <th scope='col'>Fecha</th>
              <th scope='col'>Hora</th>
              <th scope='col'>Medicion</th>
              <th scope='col'>Valor</th>
            </tr>
          </thead>
        ";
        //Se obtienen los datos de donde se registro la mayor medicion de CO2
        $queryMAX_CO2 = mysqli_query($connection, "
            Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, MAX(monitoreo.VALOR) 
            from monitoreo, sensores, lugares, unidades 
            where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR and monitoreo.TIPOMEDICION = 'PPM CO2'");
        //Se itera todos los renglones obtenidos del query
        while($resultadoMAXCO2 = mysqli_fetch_row($queryMAX_CO2)){
            //Se imprimen las columnas obtenidas de cada renglon
            echo "
                <tr>
                <td> $resultadoMAXCO2[0] </td>
                <td> $resultadoMAXCO2[1] </td>
                <td> $resultadoMAXCO2[2] </td>
                <td> $resultadoMAXCO2[3] </td>
                <td> $resultadoMAXCO2[4] </td>
                <td> $resultadoMAXCO2[5] </td>
                <td> $resultadoMAXCO2[6] <br></td>
                </tr>
            ";
        }
        echo "
            </table>
            </div>
            ";  
    }
}
//Se selecciona el boton de consultar temperatura
elseif(isset($_POST['ConsultaTemp'])){
    //Se obtiene la opcion que el usuario selecciono
    $valor = $_POST['TEMP'];
    //Se evalua la opcion que se ingresó
    if($valor == 'Promedio'){
        echo "<div class = 'card card-signin my-5 col-sm-9 mx-auto sombra' id = 'listaCons' style='text-align: center'>
                <table class=' table table-hover table-borderless '>
                <thead>
                    <tr>
                    <th scope='col'>Promedio de Temperatura Registrada</th>
                    </tr>
                </thead>
        ";
        //Se obtiene el promedio de datos registrados de Temperatura
        $queryPROM_TEMP = mysqli_query($connection, "select round(AVG(monitoreo.VALOR),3) from monitoreo where monitoreo.TIPOMEDICION = 'TEMPERATURA'");
        //Se itera los renglones obtenidos de la consulta
        while($resultado = mysqli_fetch_row($queryPROM_TEMP)){
            //Se imprime la columna obtenida
            echo "
            <tr>
            <td> $resultado[0]  Centigrados<br></td>
            </tr>
            ";
        } 
        echo "
        </table>
        </div>
        ";  
    }
    elseif($valor == 'Minimo'){
        echo "<div class = 'card card-signin my-5  mx-auto sombra' id = 'listaCons' style='text-align: center'>
        <table class=' table table-hover table-borderless'>
         <thead>
            <tr>
              <th scope='col'>Unidad</th>
              <th scope='col'>Sensor</th>
              <th scope='col'>Lugar</th>
              <th scope='col'>Fecha</th>
              <th scope='col'>Hora</th>
              <th scope='col'>Medicion</th>
              <th scope='col'>Valor</th>
            </tr>
          </thead>
        ";
        //  Se obtienen los datos de la menor temperatura registrada
        $queryMIN_TEMP = mysqli_query($connection, "
            Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, MIN(monitoreo.VALOR) 
            from monitoreo, sensores, lugares, unidades 
            where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR and monitoreo.TIPOMEDICION = 'TEMPERATURA'");
        //Se itera los renglones de la consulta
        while($resultadoMINTEMP = mysqli_fetch_row($queryMIN_TEMP)){
            //Se imprimen las columnas obtenidas
            echo "
                <tr>
                <td> $resultadoMINTEMP[0] </td>
                <td> $resultadoMINTEMP[1] </td>
                <td> $resultadoMINTEMP[2] </td>
                <td> $resultadoMINTEMP[3] </td>
                <td> $resultadoMINTEMP[4] </td>
                <td> $resultadoMINTEMP[5] </td>
                <td> $resultadoMINTEMP[6] <br></td>
                </tr>
            ";
        }
        echo "
            </table>
            </div>
            ";  
    }
    elseif ($valor == 'Maximo'){
        echo 
        "<div class = 'card card-signin my-5  mx-auto sombra' id = 'listaCons' style='text-align: center'>
        <table class=' table table-hover table-borderless'>
        <thead>
            <tr>
              <th scope='col'>Unidad</th>
              <th scope='col'>Sensor</th>
              <th scope='col'>Lugar</th>
              <th scope='col'>Fecha</th>
              <th scope='col'>Hora</th>
              <th scope='col'>Medicion</th>
              <th scope='col'>Valor</th>
            </tr>
          </thead>
        ";
        //Datos de donde se registro la mayor medicion de Temperatura
        $queryMAX_TEMP = mysqli_query($connection, "
            Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, MAX(monitoreo.VALOR) 
            from monitoreo, sensores, lugares, unidades 
            where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR and monitoreo.TIPOMEDICION = 'TEMPERATURA'");
        //Se itera los renglones obtenidos de la consulta
        while($resultadoMAXTEMP = mysqli_fetch_row($queryMAX_TEMP)){
            //Se imprime las columnas obtenidas
            echo "
                <tr>
                <td> $resultadoMAXTEMP[0] </td>
                <td> $resultadoMAXTEMP[1] </td>
                <td> $resultadoMAXTEMP[2] </td>
                <td> $resultadoMAXTEMP[3] </td>
                <td> $resultadoMAXTEMP[4] </td>
                <td> $resultadoMAXTEMP[5] </td>
                <td> $resultadoMAXTEMP[6] <br></td>
                </tr>
            ";
        }
        echo "
        </table>
        </div>
        ";  
    }
}

//Si se selecciona el boton de consulta personalizada
elseif(isset($_POST['ConsultaPerso'])){
    //Se obtienen los valores mandados por el formulario
    $fecha = $_POST["FechaRegistro"];
    $hora = $_POST["HoraRegistro"];
    $medicion = $_POST["TipoMedicion"];
    $equipo = $_POST["Equipo"];
    //Se declara un mensaje con el query principal
    $mensaje = "
    Select unidades.DESCRIPCION, sensores.DESCRIPCION, lugares.NOMBRE, monitoreo.FECHA, monitoreo.HORA, monitoreo.TIPOMEDICION, monitoreo.VALOR 
    from monitoreo, sensores, lugares, unidades 
    where monitoreo.IP_UNIDAD = unidades.IP_UNIDAD and monitoreo.SENSOR = sensores.ID_SENSOR and monitoreo.LUGAR = lugares.ID_LUGAR ";
    //Se evalua para cada campo del formulario si se ingreso o selecciono algun valor. Si sí se selecciono agrega al mensaje con el query principal el filtro necesario. 
    if($medicion != 'NADA'){
        $mensaje = $mensaje . " and monitoreo.TIPOMEDICION = '$medicion' ";
    }
    if(!empty($equipo) and $equipo != 'Selecciona el equipo'){
        $mensaje = $mensaje . " and monitoreo.IP_UNIDAD = '$equipo' ";
    }
    if(!empty($hora)){
        $mensaje = $mensaje . " and monitoreo.HORA = '$hora' ";
    }

    if(!empty($fecha)){
        $mensaje = $mensaje . " and monitoreo.FECHA = '$fecha' ";
    }
    //Realiza la consulta con el mensaje.
    $query1 = mysqli_query($connection, $mensaje);

    echo "<div class = 'card card-signin my-5  mx-auto sombra' id = 'listaCons'>
            <table class=' table table-hover table-borderless'>
            <thead>
                <tr>
                <th scope='col'>Unidad</th>
                <th scope='col'>Sensor</th>
                <th scope='col'>Lugar</th>
                <th scope='col'>Fecha</th>
                <th scope='col'>Hora</th>
                <th scope='col'>Medicion</th>
                <th scope='col'>Valor</th>
                </tr>
            </thead>

    ";
    //Itera los renglones de la consulta realizada
    while($resultado = mysqli_fetch_row($query1)){
        //Imprime las columnas de cada renglon en una tabla
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
}

echo "

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
        integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo'
        crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
        integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1'
        crossorigin='anonymous'></script>
    
    <!-- Script -->
    <script>
        function eliminarClasePerso() {
            var element = document.getElementById('Personalizado');
            element.classList.toggle('esconder');
        }
        function eliminarClaseTemp() {
            var element = document.getElementById('TempCons');
            element.classList.toggle('esconder');
        }
        function eliminarClaseCO2() {
            var element = document.getElementById('CO2Cons');
            element.classList.toggle('esconder');
        }
        function mostrarClase(){
            var element =document.getElementById('listaCons');
            element.classList.remove('esconder1');
        }
        
    </script>
</body>
</html> ";
?>



