<?php
include "db.php"; 

if ($_POST) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $edad = $_POST["edad"];
    $rol = $_POST["rol"];
    $password = $_POST["password"];

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, edad, rol, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nombre, $email, $edad, $rol, $password_hash]);

        header("Location: login.php?status=ok");
        exit;

    } catch (PDOException $e) {
        die("Error al registrar: " . $e->getMessage());
    }
} else {
    header("Location: registro.php");
    exit;
}
?>