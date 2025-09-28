<?php<?php



// Aquí hardcodeamos los datos de conexión a la DB// Aquí hardcodeamos los datos de conexión a la DB

// En un entorno productivo, usar variables de entorno extraídas de un archivo .env o similar donde estan las herramientas de extracción// En un entorno productivo, usar variables de entorno extraídas de un archivo .env o similar donde estan las herramientas de extracción

$servername = "mysql-service"; // nombre del servicio del DB en Kubernetes$servername = "mysql-service"; // nombre del servicio del DB en Kubernetes

$username = "admin";$username = "admin";

$password = "adminpass";$password = "adminpass";

$database = "hospital";$database = "hospital";



// Creando conexión// Creando conexión





$link = new mysqli($servername, $username, $password, $database);$link = new mysqli($servername, $username, $password, $database);



/* check connection *//* check connection */

if (mysqli_connect_errno()) {if (mysqli_connect_errno()) {

    printf("Connect failed: %s\n", mysqli_connect_error());    printf("Connect failed: %s\n", mysqli_connect_error());

    exit();    exit();

}}



?>?>
