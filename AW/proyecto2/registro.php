<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registro</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>REGISTRO DE USUARIOS</h1>
<form action="procesar_registro.php" method="post">
<label>USUARIO:</label>
<input type="text" name="usuario" required><br><br>
<label>CONTRASEÑA:</label>
<input type="password" name="password" required><br><br>
<button type="submit">REGISTRARSE</button>
</form>
<p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
</body>
</html>