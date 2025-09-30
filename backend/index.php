<?php<?php

header("Access-Control-Allow-Origin: *");header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Headers: *");header("Access-Control-Allow-Headers: *");



include 'conexao.php';include 'conexao.php';



$nombre = $_POST["nombre"];$nombre = $_POST["nombre"];

$apellido = $_POST["apellido"];$apellido = $_POST["apellido"];

$fecha_nacimiento = $_POST["fecha_nacimiento"];$fecha_nacimiento = $_POST["fecha_nacimiento"];

$telefono = $_POST["telefono"];$telefono = $_POST["telefono"];

$email = $_POST["email"];$email = $_POST["email"];



$stmt = $link->prepare("INSERT INTO pacientes (nombre, apellido, fecha_nacimiento, telefono, email) VALUES (?, ?, ?, ?, ?)");$stmt = $link->prepare("INSERT INTO pacientes (nombre, apellido, fecha_nacimiento, telefono, email) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $nombre, $apellido, $fecha_nacimiento, $telefono, $email);$stmt->bind_param("sssss", $nombre, $apellido, $fecha_nacimiento, $telefono, $email);



if ($stmt->execute()) {if ($stmt->execute()) {

    echo "Paciente registrado com sucesso";    echo "Paciente registrado com sucesso";

} else {} else {

    echo "Error: " . $stmt->error;    echo "Error: " . $stmt->error;

}}

?>?>
