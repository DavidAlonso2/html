<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida - UserManager</title>
    <style>
        body {
            margin: 0;
            font-family: Consolas, monospace;
            background-color: #081c15;
            color: #d8f3dc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .bienvenida-box {
            text-align: center;
            padding: 40px;
            background-color: #0b2e23;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
            max-width: 450px;
            width: 90%;
            border: 1px solid #1b4332;
        }

        h1 {
            color: #95d5b2;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
            font-size: 24px;
        }

        p {
            margin-bottom: 30px;
            font-size: 1.1em;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            color: #ff6b6b;
            border: 2px solid #ff6b6b;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #ff6b6b;
            color: #081c15;
        }
    </style>
</head>
<body>

    <div class="bienvenida-box">
        <h1>¡HOLA, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h1>
        <p>Has iniciado sesión correctamente como usuario estándar.</p>
        
        <div class="btn-group">
            <a href="logout.php" class="btn">Cerrar Sesión</a>
        </div>
    </div>

</body>
</html>