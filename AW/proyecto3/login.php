<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - UserManager</title>
    <link rel="stylesheet" href="estilos1.css">
</head>
<body>
    <div class="form-container">
        <h1>Iniciar Sesión</h1>
        
        <form action="procesar-login.php" method="post">
            <label>Email:</label>
            <input type="email" name="email" required placeholder="correo@ejemplo.com">

            <label>Contraseña:</label>
            <input type="password" name="password" required placeholder="******">

            <button type="submit" class="btn">Entrar</button>
        </form>

        <p style="margin-top: 20px; color: #d8f3dc;">
            ¿No tienes cuenta? <a href="registro.php" style="color: #52b788;">Regístrate aquí</a>
        </p>
        <p><a href="index.php" style="color: #74c69d; font-size: 0.9em;">Volver al inicio</a></p>
    </div>
</body>
</html>