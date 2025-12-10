<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Iniciar sesión</title>

<style>
    body {
        font-family: sans-serif;
        background: aqua;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background: whitesmoke;
        width: 350px;
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        text-align: center;
    }

    h1 {
        color: black;
        margin-bottom: 25px;
    }

    label {
        display: block;
        text-align: left;
        font-size: 14px;
        color: grey;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
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
        color: white;
        padding: 12px;
        border-radius: 6px;
        font-size: 15px;
    }

    button:hover {
        background: aqua;
    }
    
    a:hover {
        text-decoration: underline;
    }
</style>

</head>
<body>

<div class="login-container">
<h1>INICIAR SESIÓN</h1>
<form action="procesar_login.php" method="post">
<label>Usuario:</label>
<input type="text" name="usuario" required>
<label>Contraseña:</label>
<input type="password" name="password" required>
<button type="submit">Entrar</button>
</form>
<p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
</div>
</body>
</html>