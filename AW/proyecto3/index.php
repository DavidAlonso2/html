<?php
session_start();
if (isset($_SESSION['usuario_id'])) {
    header("Location: list.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - UserManager</title>
    <link rel="stylesheet" href="estilos1.css"> 
</head>
<body>

    <div class="welcome-box">
        <h1>UserManager</h1>
        <p>Sistema de Gestión de Usuarios</p>
        
        <div class="btn-group">
            <a href="login.php" class="btn btn-large">Iniciar Sesión</a>
            
            <a href="registro.php" class="btn btn-large btn-edit">Registrarse</a>
        </div>
    </div>

</body>
</html>