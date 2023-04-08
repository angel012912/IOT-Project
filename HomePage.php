<!-- 
Autor: Jose Angel Garcia Gomez
Date: 11-2021
Description: Main page of the project
-->

<?php
    echo "
<!doctype html>
<html lang='en'>

<head>
    <title>IOT|Inicio</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'> 
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css'>
    <!-- Bootstrap v5 -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
    <link rel='icon' type='image/png' href='favicon.jpg'>

    <link rel='stylesheet' href='Homestyles.css'>
    <style>
        .slider {
            background: url('Tec.jpg');
            height: 80vh;
            background-size: cover;
            background-position: top;
        }
        .show.dropdown dropdown-toggle::after{
            transition: transform 0.15s linear;
            margin-right: 30px
        }
        .dropdown-menu{
            margin-right: 10px;
        }
        .titleB{
            text-align: center;
            font-size: 1.5cm;
        }
        .margen{
            margin-bottom: 3rem;
        }
        .titleA{
            text-align: center;
        }
        .bg-gold {
            background: -webkit-linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
            background: -o-linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
            background: -moz-linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
            background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);
        }
        .card-holder {
            margin: 2em 0;
        }
        
    </style>
    <link rel = 'stylesheet' href='style_Texto.css'>

</head>


<!-- Cuerpo de la pagina-->

<body style='background-color: rgb(253,248,253)'>
    
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
    <div id='carouselExampleIndicators' class='carousel slide' data-ride='carousel'>
        <ol class='carousel-indicators'>
            <li data-target='#carouselExampleIndicators' data-slide-to='0' class='active'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='1'></li>
            <li data-target='#carouselExampleIndicators' data-slide-to='2'></li>
        </ol>
        <div class='carousel-inner'>
            <div class='carousel-item active' style='height: 80vh'>
                <img src='senso1.jpeg' class='d-block w-100' alt='First Slide'>
                <div class='carousel-caption d-none d-md-block'>
                    <h5>Conexion NODEMCU</h5>
                    <p>Sensores MQ135 y DHT11</p>
                </div>
            </div>
            <div class='carousel-item' style='height:  80vh'>
                <img src='Carrusel.jpeg' class='d-block w-100' alt='Second Slide'>
                <div class='carousel-caption d-none d-md-block'>
                    <h5>Componentes del circuito</h5>
                    <p> Sensor DHT11 | NodeMCU ESP8266 | Sensor MQ-135  </p>
                 </div>
            </div>
            <div class='carousel-item' style='height:  80vh'>
                <img src='Equipo.jpeg' class='d-block w-100' alt='Third Slide'>
                <div class='carousel-caption d-none d-md-block'>
                    <h5> Integrantes</h5>
                    <p>Jair Jimarez | Jos&eacute &Aacutengel.</p>
                </div>
            </div>
        </div>
        <a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-slide='prev'>
            <span class='carousel-control-prev-icon' aria-hidden='true'></span>
            <span class='sr-only'>Anterior</span>
        </a>
        <a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-slide='next'>
            <span class='carousel-control-next-icon' aria-hidden='true'></span>
            <span class='sr-only'>Siguiente</span>
        </a>

    </div>

    <!-- Contenido de la pagina -->
    <!-- Titulo de la pagina principal-->
    <br>
    <div class = 'contenedor'>
        <main>
            <div class = 'shadow p-3 mb-5 bg-body rounded' id = 'descr'>
                <p class = 'textS'>El incremento en la capacidad de procesamiento, la reducción de las dimensiones físicas y los avances en la optimización en el consumo de energía, han permitido que dispositivos de procesamiento digital se integren con sensores en diferentes procesos, habilitando la transformación digital de nuestra sociedad.
                Adicionalmente la conectividad de datos a muy bajo costo ha permitido la interconexión  de estos dispositivos a internet, con lo cual se ha logrado obtener información en tiempo real de los sensores con que cuentan dichos dispositivos.
            </div>
        </main>    
    </div>
    

  <!-- Etapas del reto -->
  <div class = 'contenedor'>
  <h5 class='card-title text-center'>Etapas de Desarrollo</h5>
  <div class='accordion' id='accordionPanelsStayOpenExample'>
  <div class='accordion-item'>
    <h2 class='accordion-header' id='panelsStayOpen-headingOne'>
      <button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#panelsStayOpen-collapseOne' aria-expanded='true' aria-controls='panelsStayOpen-collapseOne'>
        Etapa 1: Identificaci&oacuten del problema
      </button>
    </h2>
    <div id='panelsStayOpen-collapseOne' class='accordion-collapse collapse show' aria-labelledby='panelsStayOpen-headingOne'>
      <div class='accordion-body titleA'>
        En este momento se realiza al definición del proyecto, identificando los conocimientos que sean requeridos para realizarlo, así como los recursos que se necesitarán; esta etapa implica un análisis de los requerimientos del reto (problema a resolver), así como la determinación de alternativas para diseñar e implementar un sistema que cumpla con este propósito.
      </div>
    </div>
  </div>
  <div class='accordion-item'>
    <h2 class='accordion-header' id='panelsStayOpen-headingTwo'>
      <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#panelsStayOpen-collapseTwo' aria-expanded='false' aria-controls='panelsStayOpen-collapseTwo'>
        Etapa 2: Diseño conceptual
      </button>
    </h2>
    <div id='panelsStayOpen-collapseTwo' class='accordion-collapse collapse' aria-labelledby='panelsStayOpen-headingTwo'>
      <div class='accordion-body titleA'>
      En esta etapa se requerirá el diseño conceptual de un sistema cuyo funcionamiento cumpla con los requerimientos del reto, esto implicará la especificación y descripción de pruebas para sus componentes, tanto de \"hardware\" como de \"software\".
      </div>
    </div>
  </div>
  <div class='accordion-item'>
    <h2 class='accordion-header' id='panelsStayOpen-headingThree'>
      <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#panelsStayOpen-collapseThree' aria-expanded='false' aria-controls='panelsStayOpen-collapseThree'>
        Etapa 3: Implementaci&oacuten del prototipo
      </button>
    </h2>
    <div id='panelsStayOpen-collapseThree' class='accordion-collapse collapse' aria-labelledby='panelsStayOpen-headingThree'>
      <div class='accordion-body titleA'>
      Durante este tiempo se realizará la implementación del diseño conceptual, para lograr la integración de los componentes en un prototipo del sistema de IoT; esta implementación implica la construcción de los sistemas electrónicos (en \"protoboard\") para la conexión de sensores y actuadores del sistema, así como la implementación de los programas que los controlen y coordinen su operación integrada a través de Internet considerando la usabilidad y el diseño centrado en el usuario.
      </div>
    </div>
  </div>
    <div class='accordion-item'>
    <h2 class='accordion-header' id='panelsStayOpen-headingFour'>
      <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#panelsStayOpen-collapseFour' aria-expanded='false' aria-controls='panelsStayOpen-collapseFour'>
        Etapa 4: Validaci&oacuten
      </button>
    </h2>
    <div id='panelsStayOpen-collapseFour' class='accordion-collapse collapse' aria-labelledby='panelsStayOpen-headingFour'>
      <div class='accordion-body titleA'>
        En esta etapa se deberán validar todos los casos de prueba del sistema de IoT completamente integrado; adicionalmente se elaborar contar con la documentación del sistema funcional.
      </div>
    </div>
  </div>
</div>
</div>

<br><br>
<!-- Tarjetas -->

<div class='section-one container-fluid'>
  <h2 class='section-one__title'> Requerimientos del reto </h2>
  <div class='contenedor texto'>
    <div>
        <p class = 'textS'>En este bloque aplicarás los conocimientos y habilidades que has asimilado y desarrollado a lo largo de las interacciones con profesores y compañeros en la implementación de un sistema de informático , basado en microcontroladores conectados a Internet, para la adquisición de datos por sensores y el control de actuadores en una aplicación domótica (\"Smart City\" o \"Smart Campus\").
        <br>Particularmente se planteará un conjunto de requerimientos, entre los cuales destacan:</p>
        </div>
        <p>
  <a class='btn btn-outline-dark' data-toggle='collapse' href='#multiCollapseExample1' role='button' aria-expanded='false' aria-controls='multiCollapseExample1'> Primer</a>
  <button class='btn btn-outline-dark' type='button' data-toggle='collapse' data-target='#multiCollapseExample2' aria-expanded='false' aria-controls='multiCollapseExample2'> Segundo</button>
  <button class='btn btn-outline-dark' type='button' data-toggle='collapse' data-target='#multiCollapseExample3' aria-expanded='false' aria-controls='multiCollapseExample3'> Tercero</button>
  <button class='btn btn-outline-dark' type='button' data-toggle='collapse' data-target='#multiCollapseExample4' aria-expanded='false' aria-controls='multiCollapseExample4'> Cuarto </button>
  </p>
<div class='row'>
  <div class='col'>
    <div class='collapse multi-collapse' id='multiCollapseExample1'>
      <div class='card card-body'>
      Sistema de dispositivos digitales basado en 5 microcontroladores, interconectados en red de datos y programados para el intercambio de información a través de distintos protocolos (TCP, UDP, HTTP, MQTT, IFTTT o similares), seleccionados en base requerimientos de la aplicación específica.
      </div>
    </div>
  </div>
  <div class='col'>
    <div class='collapse multi-collapse' id='multiCollapseExample2'>
      <div class='card card-body'>
      Diseño e implementación, de una arquitectura de Información, en un servicio de alojamiento de información \"on premise\" o en la Nube, que habilite la recopilación de datos, comunicación entre dispositivos de la red domótica y generación de acciones de control en tiempo real.
      </div>
    </div>
  </div>
  <div class='col'>
    <div class='collapse multi-collapse' id='multiCollapseExample3'>
      <div class='card card-body'>
      Programación, interconexión y puesta en operación de dispositivos, que dentro de la red domótica, implementen funcionalidades específicas para adquisición de datos, control de actuadores y generación de información en para servicios en la red.
      </div>
    </div>
  </div>
  <div class='col'>
    <div class='collapse multi-collapse' id='multiCollapseExample4'>
      <div class='card card-body'>
      Análisis de requerimientos, planeación y administración del proceso de ejecución de la implementación de sistema domótico descrito anteriormente.
      </div>
    </div>
  </div>
</div>
</div>
<br>
  <div class='separator'>
    <svg class='separator__svg' width='100%' height='400' viewBox='0 0 100 100' preserveAspectRatio='none' fill='#44A36F' version='1.1' xmlns='http://www.w3.org/2000/svg'>
       <path d='M 100 100 V 10 L 0 100'/>
       <path d='M 30 73 L 100 18 V 10 Z' fill='#308355' stroke-width='0'/>
      </svg>
  </div>
  <!-- end Separator -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'
        integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo'
        crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
        integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1'
        crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'
        integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM'
        crossorigin='anonymous'></script>


</body>
</html>";

?>

