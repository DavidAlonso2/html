<?php
session_start();
include "db.php";

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($password, $usuario['password'])) {

        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['nombre'] = $usuario['nombre'];
        $_SESSION['rol'] = $usuario['rol'];

        header("Location: list.php");
        exit;
    } else {
        echo "<script>
            alert('Usuario o contraseña incorrectos');
            window.location = 'login.php';
        </script>";
    }
} else {
    header("Location: login.php");
    exit;
}
?>