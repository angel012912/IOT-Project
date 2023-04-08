#include <TimeLib.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WebServer.h>
#include <WiFiClient.h>
#include <MQ135.h>
#include <DHTesp.h>

#define DHTTYPE DHT11
WiFiClient client;
HTTPClient http;
DHTesp dht;
time_t hoy = now();

String red = "Tec-IoT";
String password = "spotless.magnetic.bridge";
const char* host = "10.48.84.134";
const int port = 80;
byte cont = 0;
byte cont_maximo = 50;

String ipUnidad = "1";
String SensorC02;
String SensorT;
String Lugar ="5";
String Año;
String Mes;
String Dia;
String Hora;
String Minuto;

void setup() {
  Serial.begin(115200);
  dht.setup(2, DHTesp::DHT11);

  //Conexion Wifi
  WiFi.begin(red,password);
  while(WiFi.status() != WL_CONNECTED and cont < cont_maximo){
    cont++;
    delay(100);
    Serial.print(".");
  }
  Serial.println("");

  if(cont < cont_maximo){
    Serial.println("-------------------------------------------");
    Serial.print("Conectado a: ");
    Serial.println(WiFi.SSID());
    Serial.print("IP: ");
    Serial.println(WiFi.localIP());
    Serial.print("MAC: ");
    Serial.println(WiFi.macAddress());
    Serial.println("-------------------------------------------");
  }else{
    Serial.println("-------------------------------------------");
    Serial.println("Error de conexion");
    Serial.println("-------------------------------------------");
  }
}

void loop(){  

String url = "http://10.48.84.134/Pagina_Web/registro_datos.php?";
 
Año = String(year());
Mes = String(month());
Dia = String(day());
Hora = String(hour());
Minuto = String(minute());

//Valores de todos los sensores
float co2 = analogRead(A0);
co2 = map(co2,0,1023,10,200); //Esta OK la funcion Map
float humidity = dht.getHumidity();
float temperature = dht.getTemperature();

url += "ipUnidad=";
    url += ipUnidad;
    url += "&Lugar=";
    url += Lugar;
    url += "&SensorCO2=";
    url += co2;
    url += "&SensorH=";
    url += humidity;
    url += "&SensorT=";
    url += temperature;
    



Serial.println(url);

if(http.begin(client,url)){
  int codigo = http.GET();
  Serial.printf("Codigo: %d\n", codigo);  
  String respuesta = http.getString();
  Serial.println(respuesta);
}else{
  int codigo = http.GET();
  Serial.printf("GET falló, error: %s\n", http.errorToString(codigo).c_str());
}

    
                   
  digitalWrite(LED_BUILTIN,HIGH);
  Serial.println("");
  Serial.print("Humedad: ");
  Serial.print(humidity);
  Serial.println("%\t");
  Serial.print("Temperatura: ");
  Serial.print(temperature);
  Serial.print(" °C ");
  Serial.println("");
  Serial.print("CO2: ");
  Serial.println(co2);
  digitalWrite(LED_BUILTIN,LOW);
  delay(30000);
}

   
