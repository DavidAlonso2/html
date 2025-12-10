<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>INICIAR SESIÓN</h1>
<form action="procesar_login.php" method="post">
<label>USUARIO:</label>
<input type="text" name="usuario" required><br><br>
<label>CONTRASEÑA:</label>
<input type="password" name="password" required><br><br>
<button type="submit">ENTRAR</button>
</form>
<p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
</body>
</html>  