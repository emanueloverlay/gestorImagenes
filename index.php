<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: gestor.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="resources/styles.css">
    <script src="resources/index.js"></script>
</head>

<body>
    <div class="contenedor">
        <form id="form">
            <label for="">Usuario</label>
            <input type="text" name="user">

            <label for="">Contraseña</label>
            <input type="text" name="pass">
            <input type="submit" value="Ingresar">
        </form>
        <div class="options">
            <a href="#">click para crear usuario</a>
            <a href="#">click para eliminar usuario</a>
        </div>
    </div>
</body>

</html>