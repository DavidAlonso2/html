<?php
session_start();
if (!isset($_SESSION['usuario'])) {
header("Location: login.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenida</title>
<style>
    
    body {
        font-family: sans-serif;
        background: aqua;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    h1 {
        color: black;
        margin-bottom: 25px;
    }

    input:focus {
        border-color: aqua;
    }
       
</style>
</head>
<body>
<h1>Bienvenido, <?php echo $_SESSION['usuario']; ?> 🎉</h1>
<p>Has iniciado sesión correctamente.</p>
<p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>