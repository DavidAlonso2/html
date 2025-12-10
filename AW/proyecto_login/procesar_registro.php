<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$file = fopen("usuarios.txt", "a");
fwrite($file, $usuario. ":" .password_hash($password,PASSWORD_DEFAULT) ."\n");
fclose($file);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<style>
    body {
        font-family: sans-serif;
        background: aqua;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
    }
    h1 {
        color: black;
        margin-top: 20px;
    }
    p {
        margin-top: 20px;
        font-size: 14px;
    }

    a {
        color: black;
        font-weight: bold;
    }                               
</style>
</head>
<body>
<h1 margin-top="90px">Usuario registrado correctamente</h1>
<br><br><br>
<br><p><a href='login.php'>Iniciar sesion</a></p>
<img src="https://i.pinimg.com/originals/68/08/aa/6808aa5544b6867b20a689660b2e80e2.gif" alt="¡BIENVENIDO!" width="350" height="350">
</body>
</html>