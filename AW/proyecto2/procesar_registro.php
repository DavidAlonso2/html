<?php
include "conexion.php";
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$check_sql = "SELECT usuario FROM usuarios WHERE usuario = ?";
$check_stmt = $conn->prepare($check_sql);
$check_stmt->bind_param("s", $usuario);
$check_stmt->execute();
$check_stmt->store_result();

if ($check_stmt->num_rows > 0) {
    echo "<h1>Error: el nombre de usuario ya está en uso</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
    $check_stmt->close();
    $conn->close();
    exit();
}

$check_stmt->close();

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
$stmt->bind_param("ss", $usuario, $hash);

if ($stmt->execute()) {
    echo "<h1>Usuario registrado correctamente 🎉</h1>";
    echo "<p><a href='login.php'>Iniciar sesión</a></p>";
} else {
    echo "<h1>Error en el registro</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="estilos.css">
</head>
</html>