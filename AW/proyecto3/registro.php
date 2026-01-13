<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - UserManager</title>
    <link rel="stylesheet" href="estilos1.css">
    <script src="validacion.js"></script>
</head>
<body>
    <div class="form-container">
        <h1>Crear Cuenta</h1>
        <form action="procesar-registro.php" method="post">
            
            <label>Nombre:</label>
            <input type="text" name="nombre" required placeholder="Tu nombre">

            <label>Email:</label>
            <input type="email" name="email" required placeholder="correo@ejemplo.com">

            <label>Edad:</label>
            <input type="number" name="edad" required placeholder="Tu edad">

            <label>Contraseña:</label>
            <input type="password" name="password" required placeholder="******">

            <input type="hidden" name="rol" value="user">

            <button type="submit" class="btn">Registrarse</button>
        </form>
        
        <p style="margin-top: 20px; color: #d8f3dc;">
            ¿Ya tienes cuenta? <a href="login.php" style="color: #52b788;">Inicia sesión aquí</a>
        </p>
    </div>
</body>
</html>