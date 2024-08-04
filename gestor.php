<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor subida imagen</title>
    <link rel="stylesheet" href="resources/styles.css">
    <script src="resources/main.js"></script>

</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
        exit();
    }
    ?>
    <div class="contenedor">
        <button id="btnLogout">Logout</button>

        <h2>Subir Imagen</h2>
        <form action="app/controllers/imagesController.php?function=insert" method="post" enctype="multipart/form-data">
            <input type="file" name="image" required>
            <input type="submit" value="Subir Imagen">
        </form>

        <div class="options">
            <hr>
            <a href="galeria.php">Ver galeria</a>
        </div>
    </div>
</body>

</html>