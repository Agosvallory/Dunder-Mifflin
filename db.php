<?php
$host = "localhost";
$usuario = "u178928053_hugo";
$password = "?Q&3W@8l"; 
//
$baseDatos = "u178928053_dundermifflin";

$conn = new mysqli($host, $usuario, $password, $baseDatos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>

