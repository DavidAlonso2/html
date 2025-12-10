<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de usuario</title>
<style>
    body {
        font-family: sans-serif;
        background: aqua;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .register-container {
        background: whitesmoke;
        width: 350px;
        padding: 25px 30px;
        text-align: center;
    }

    h1 {
        color: black;
        margin-bottom: 25px;
        font-size: 26px;
    }

    label {
        display: block;
        text-align: left;
        font-size: 14px;
        color: gray;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid gray;
        border-radius: 6px;
        font-size: 14px;
        background-color: gray;
    }

    input:focus {
        border-color: aqua;
    }

    button {
        width: 100%;
        background: aqua; 
        color: black;
        border: 2px solid black;
        padding: 12px;
        border-radius: 6px;
        font-size: 15px;
    }

    button:hover {
        background: aqua;
    }

    p {
        margin-top: 15px;
        font-size: 14px;
        color: gray;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="register-container">
<h1>REGISTRO</h1>
<form action="procesar_registro.php" method="post">
<label>Usuario:</label>
<input type="text" name="usuario" required>
<label>Contraseña:</label>
<input type="password" name="password" required>
<button type="submit">Registrarse</button>
</form>
<p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
</div>
</body>
</html>