<?php
session_start(); 
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

include "db.php";

$stmt = $pdo->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="estilos1.css">
</head>
<body>

    <div class="container">
        
        <div class="dashboard-header">
            <div>
                <h1>Gestión de Usuarios</h1>
                <div class="user-info">
                    Hola, <strong><?php echo htmlspecialchars($_SESSION['nombre']); ?></strong> 
                    (Rol: <?php echo htmlspecialchars($_SESSION['rol']); ?>)
                </div>
            </div>
            
            <a href="logout.php" class="btn btn-delete">Cerrar Sesión</a>
        </div>

        <div style="margin-bottom: 15px;">
            <a href="create.php" class="btn">Nuevo Usuario</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Edad</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['edad']); ?></td>
                    <td><?php echo htmlspecialchars($usuario['rol']); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $usuario['id']; ?>" class="btn-edit">Editar</a>
                        <a href="delete.php?id=<?php echo $usuario['id']; ?>" class="btn-delete" onclick="return confirm('¿Seguro?');">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>