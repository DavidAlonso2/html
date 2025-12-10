<?php
$host = "localhost";
$user = "administrador"; // por defecto en XAMPP/WAMP
$pass = "Vegeta777"; // por defecto en XAMPP/WAMP
$db = "proyecto_login";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
die("Error de conexión: " . $conn->connect_error);
}
?>